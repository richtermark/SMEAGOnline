import QuestionTypeBuilder from './question-type-builder';
import CopyDeny from './copy-deny';
import ActivityEmitter from "../../activity/activity-emitter";
import notify from "common/notify";

class DoTestBase
{
  constructor($container) {
    this.$container = $container;
    this.answers = {};
    this.usedTime = 0;
    this.$form = $container.find('form');
    this._initEvent();
    this._initUsedTimer();
    this._isCopy();
    this._alwaysSave();
  }

  _initEvent() {
    this.$container.on('focusin','textarea',event=>this._showEssayInputEditor(event));
    this.$container.on('click','[data-role="test-suspend"],[data-role="paper-submit"]',event=>this._btnSubmit(event));
    this.$container.on('click','.js-testpaper-question-list li',event=>this._choiceList(event));
    this.$container.on('click','*[data-anchor]',event=>this._quick2Question(event));
    this.$container.find('.js-testpaper-question-label').on('click','input',event=>this._choiceLable(event));
    this.$container.on('click','.js-marking',event=>this._markingToggle(event));
    this.$container.on('click','.js-favorite',event=>this._favoriteToggle(event));
    this.$container.on('click','.js-analysis',event=>this._analysisToggle(event));
    this.$container.on('blur','[data-type="fill"]',event=>this.fillChange(event));
  }

  _isCopy() {
    let isCopy = this.$container.find('.js-testpaper-body').data('copy');
    if (isCopy) {
      new CopyDeny();
    }
  }

  fillChange(event) {
    let $input = $(event.currentTarget);
    this._renderBtnIndex($input.attr('name'),$input.val()? true:false);
  }

  _markingToggle(event) {
    let $current = $(event.currentTarget).addClass('hidden');
    $current.siblings('.js-marking.hidden').removeClass('hidden');
    let id = $current.closest('.js-testpaper-question').attr('id');
    
    $(`[data-anchor="#${id}"]`).find('.js-marking-card').toggleClass("hidden");
  }

  _favoriteToggle(event) {
    let $current = $(event.currentTarget);
    let targetType = $current.data('targetType');
    let targetId = $current.data('targetId');

    $.post($current.data('url'),{targetType:targetType, targetId:targetId},function (response) {
      $current.addClass('hidden').siblings('.js-favorite.hidden').data('url',response.url);  
      $current.addClass('hidden').siblings('.js-favorite.hidden').removeClass('hidden');
    })
    .error(function(response){
      notify('error', response.error.message);
    })
  }

  _analysisToggle(event) {
    let $current = $(event.currentTarget);
    $current.addClass('hidden');
    $current.siblings('.js-analysis.hidden').removeClass('hidden');
    $current.closest('.js-testpaper-question').find('.js-testpaper-question-analysis').slideToggle();
  }

  _initUsedTimer() {
    let self = this;
    this.$usedTimer = window.setInterval(() =>{
      self.usedTime += 1;
    }, 1000);
  }

  _choiceLable(event) {
    let $target = $(event.currentTarget);
    let $lableContent = $target.closest('.js-testpaper-question-label');
    this.changeInput($lableContent,$target);
  }
 
  _choiceList(event) {
    let $target = $(event.currentTarget);
    let index = $target.index();
    let $lableContent = $target.closest('.js-testpaper-question').find('.js-testpaper-question-label');
    let $input = $lableContent.find('label').eq(index).find('input');
    $input.prop('checked', !$input.prop('checked')).change();
    this.changeInput($lableContent,$input);
  }

  changeInput($lableContent,$input) {
    let num = 0;
    $lableContent.find('label').each(function (index,item) {
      if($(item).find('input').prop('checked')) {
        $(item).addClass('active');
        num ++;
      }else {
        $(item).removeClass('active');
      }
    })
    let questionId = $input.attr('name');
    this._renderBtnIndex(questionId,num>0?true:false)
  }

   _renderBtnIndex(idNum,done = true,doing = false) {
    let $btn = $(`[data-anchor="#question${idNum}"]`);
    if(done) {
      $btn.addClass('done');
    }else {
      $btn.removeClass('done');
    }
    if(doing) {
      $btn.addClass('doing').siblings('.doing').removeClass('doing');
    }else {
      $btn.removeClass('doing')
    }
  }
  _showEssayInputEditor(event) {
    let $shortTextarea = $(event.currentTarget);

    if ($shortTextarea.hasClass('essay-input-short')) {
      
      event.preventDefault();
      event.stopPropagation();
      $(this).blur();
      let $longTextarea = $shortTextarea.siblings('.essay-input-long');
      let $textareaBtn = $longTextarea.siblings('.essay-input-btn');

      $shortTextarea.hide();
      $longTextarea.show();
      $textareaBtn.show();

      let editor = CKEDITOR.replace($longTextarea.attr('id'), {
        toolbar: 'Minimal',
        filebrowserImageUploadUrl: $longTextarea.data('imageUploadUrl')
      });

      editor.on('blur', e => {
        editor.updateElement();
        setTimeout(()=>{
          $longTextarea.val(editor.getData());
          $longTextarea.change();
          $longTextarea.val() ? this._renderBtnIndex($longTextarea.attr('name'),true) : this._renderBtnIndex($longTextarea.attr('name'),false);
        }, 1);
      });

      editor.on('instanceReady', function(e) {
        this.focus();

        $textareaBtn.one('click', function() {
          $shortTextarea.val($(editor.getData()).text());
          editor.destroy();
          $longTextarea.hide();
          $textareaBtn.hide();
          $shortTextarea.show();
        });
      });

      editor.on('key', function(){
        editor.updateElement();
        setTimeout(function() {
          $longTextarea.val(editor.getData());
          $longTextarea.change();
        }, 1);
      });

      editor.on('insertHtml', function(e) {
        editor.updateElement();
        setTimeout(function() {
          $longTextarea.val(editor.getData());
          $longTextarea.change();
        }, 1);
      });
    }
    
  }

  _quick2Question(event) {
    let $target = $(event.currentTarget); 
    let position = $($target.data('anchor')).offset();
    $(document).scrollTop(position.top - 55);
  }

  _suspendSubmit(url) {
    let values = this._getAnswers();

    $.post(url,{data:values,usedTime:this.usedTime})
    .done((response) => {})
    .error(function (response) {
      notify('error', response.error.message);
    });
  }

  _btnSubmit(event) {
    let $target = $(event.currentTarget);
    $target.button('loading');
    this._submitTest($target.data('url'), $target.data('goto'));
  }

  _submitTest(url,toUrl='') {
    let values = this._getAnswers();
    let emitter = new ActivityEmitter();

    $.post(url,{data:values,usedTime:this.usedTime})
    .done((response) => {
      if (response.result) {
        emitter.emit('finish', {data: ''});
      }

      if (toUrl != '' || response.goto != '') {
        window.location.href = toUrl;
      } else if (response.goto != ''){
        window.location.href = response.goto;
      } else if (response.message != '') {
        notify('error', response.message);
      }
    })
    .error(function (response) {
      notify('error', response.error.message);
    });
  }

  _getAnswers() {
    let values = {};

    $('*[data-type]').each(function(index){
      let questionId = $(this).attr('name');
      let type = $(this).data('type');
      const questionTypeBuilder = QuestionTypeBuilder.getTypeBuilder(type);
      let answer = questionTypeBuilder.getAnswer(questionId);
      values[questionId] = answer;
    })

    return JSON.stringify(values);
  }

  _alwaysSave() {
    if ($('input[name="testSuspend"]').length > 0) {
      let self = this;
      let url = $('input[name="testSuspend"]').data('url');
      setInterval(function(){
        self._suspendSubmit(url);
        let currentTime = new Date().getHours()+ ':' + new Date().getMinutes()+ ':' +new Date().getSeconds();
        notify('success',currentTime + ' 已保存');
      }, 3 * 60 * 1000);
    }
  }

}

//临时方案，libs/vendor.js这个方法没有起作用
/*$(document).ajaxSend(function(a, b, c) {
  if (c.type == 'POST') {
    b.setRequestHeader('X-CSRF-Token', $('meta[name=csrf-token]').attr('content'));
  }
});*/

export default DoTestBase;