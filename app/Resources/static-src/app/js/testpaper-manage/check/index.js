import QuestionTypeBuilder from '../../testpaper/widget/question-type-builder';
import {
  testpaperCardFixed,
} from 'app/js/testpaper/widget/part';

$.validator.addMethod("score",function(value,element){ 
  let isFloat = /^\d+(\.\d)?$/.test(value);
  if (!isFloat){
    return false;
  }

  if (Number(value) <= Number($(element).data('score'))) {
    return true;
  } else {
    return false;
  }
  
}, $.validator.format("分数只能是<=题目分数、且>=0的整数或者1位小数"));

class CheckTest
{
  constructor($container) {

    this.$container = $container;
    this.checkContent = {};
    this.$form = $container.find('form');
    this.$dialog = $container.find('#testpaper-checked-dialog');
    this.validator = null;
    this._initEvent();
    this._init();
    this._initValidate();
    testpaperCardFixed();
  }

  _initEvent() {
    this.$container.on('focusin','textarea',event=>this._showEssayInputEditor(event));
    this.$container.on('click','[data-role="check-submit"]',event=>this._submitValidate(event));
    this.$container.on('click','*[data-anchor]',event=>this._quick2Question(event));
    this.$dialog.on('click','[data-role="finish-check"]',event=>this._submit(event));
    this.$dialog.on('change','select',event=>this._teacherSayFill(event));
  }

  _init() {

  }

  _showEssayInputEditor(event) {
    let $shortTextarea = $(event.currentTarget);

    if ($shortTextarea.hasClass('essay-teacher-say-short')) {
      
      event.preventDefault();
      event.stopPropagation();
      $(this).blur();
      let $longTextarea = $shortTextarea.siblings('.essay-teacher-say-long');
      let $textareaBtn = $longTextarea.siblings('.essay-teacher-say-btn');

      $shortTextarea.hide();
      $longTextarea.show();
      $textareaBtn.show();

      let editor = CKEDITOR.replace($longTextarea.attr('id'), {
        toolbar: 'Minimal',
        filebrowserImageUploadUrl: $longTextarea.data('imageUploadUrl')
      });

      editor.on('blur', function(e) {
        editor.updateElement();
        setTimeout(function() {
          $longTextarea.val(editor.getData());
          $longTextarea.change();
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

  _initValidate(event) {
    this.validator = this.$form.validate();

    if ($('*[data-score]:visible').length > 0) {
      $('*[data-score]:visible').each(function(index){
        $(this).rules('add',{
          required:true,
          score:true,
          min:0,
          messages: {    
            required: "请输入分数",    
          } 
        })
      })
    }

  }

  _quick2Question(event) {
    let $target = $(event.currentTarget); 
    let position = $($target.data('anchor')).offset();
    $(document).scrollTop(position.top - 55);
  }

  _submitValidate(event) {
    let $target = $(event.currentTarget);
    let scoreTotal = 0;

    if (this.validator == undefined || this.validator.form()) {
      let self = this;
      $('*[data-score]').each(function(){
        let content = {};
        let questionId = $(this).data('id');
        
        content['score'] = Number($(this).val());
        content['teacherSay'] = $('[name="teacherSay_'+questionId+'"]').val();

        self.checkContent[questionId] = content;
        scoreTotal = scoreTotal + Number($(this).val());
      })

      let subjectiveScore = Number(this.$dialog.find('[name="objectiveScore"]').val());
      let totalScore = Number(scoreTotal) + subjectiveScore;

      this.$dialog.find('#totalScore').html(totalScore);
      this.$dialog.modal('show');
    }


  }

  _submit(event) {

    let $target = $(event.currentTarget);
    let teacherSay = this.$dialog.find('textarea').val();
    let passedStatus = this.$dialog.find('[name="passedStatus"]:checked').val();

    $target.button('loading');
    $.post($target.data('postUrl'), {result:this.checkContent,teacherSay:teacherSay,passedStatus:passedStatus}, function(response) {
      window.location.href = $target.data('goto');
    })
  }

  _teacherSayFill(event) {
    let $target = $(event.currentTarget);
    let $option = $target.find('option:selected');

    if ($option.val() == '') {
      this.$dialog.find('textarea').val('');
    } else {
      this.$dialog.find('textarea').val($option.text());
    }
  }
}

new CheckTest($('.container'));
