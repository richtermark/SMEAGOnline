import notify from 'common/notify';
export default class QuestionManage{
  constructor($element) {
    this.$element = $element;
    this.$button = this.$element.find('[data-role="pick-item"]');
    this.$typeNav = this.$element.find('#testpaper-question-nav');
    this.$modal = $('#testpaper-confirm-modal');
    this.currentType = this.$typeNav.find('.active').children().data('type');
    this.questions = [];
    this._initEvent();
  }

  _initEvent() {
    this.$button.on('click',event => this._showPickerModal(event));
    this.$typeNav.on('click','li', event => this._changeNav(event));
    this.$element.on('click','.js-request-save',event => this._confirmSave(event));
    this.$modal.on('click','.js-confirm-submit',event => this._submitSave(event));
  }

  _showPickerModal(event) {
    let excludeIds = [];
    $('[data-type="'+this.currentType+'"]').find('[name="questionIds[]"]').each(function(){
        excludeIds.push($(this).val());
    });

    let $modal = $("#modal").modal();
    $modal.data('manager', this);
    $.get(this.$button.data('url'), {excludeIds: excludeIds.join(','), type: this.currentType}, function(html) {
        $modal.html(html);
    });
  }

  _changeNav(event) {
    let $target = $(event.currentTarget);
    let type = $target.children().data('type');
    this.currentType = type;

    this.$typeNav.find('li').removeClass('active');
    $target.addClass('active');

    this.$element.find('[data-role="question-body"]').addClass('hide');
    this.$element.find('#testpaper-items-'+type).removeClass('hide');
    this.$element.find('[data-role="batch-select"]').prop('checked',false);
    this.$element.find('[data-role="batch-item"]').prop('checked',false);
  }
  _confirmSave(event) {
    let isOk = this._validateScore();

    if (!isOk) {
        return ;
    }

    if( $('[name="passedScore"]').length > 0){
        let passedScoreErrorMsg = $('.passedScoreDiv').siblings('.help-block').html();
        if ($.trim(passedScoreErrorMsg) != ''){
            return ;
        }
    }

    let stats = this._calTestpaperStats();

    if($('[name="passedScore"]').length > 0){
      let passedScore = $('input[name="passedScore"]').val();
      if( passedScore > stats.total.score){
        notify('danger','及格分数（' + passedScore + '）不能高于总分（' + stats.total.score + '）。');
        return;
      }
    }
    
    let html='';
    $.each(stats, function(index, statsItem){
        let tr = "<tr>";
            tr += "<td>" + statsItem.name + "</td>";
            tr += "<td>" + statsItem.count + "</td>";
            tr += "<td>" + statsItem.score.toFixed(1) + "</td>";
            tr += "</tr>";
        html += tr;
    });

    this.$modal.find('.detail-tbody').html(html);

    this.$modal.modal('show');
  }

  _validateScore() {
    let isOk = true;

    if (this.$element.find('[name="scores[]"]').length == 0) {
        notify('danger','请选择题目。');
        isOk = false;
    }

    this.$element.find('input[type="text"][name="scores[]"]').each(function() {
        var score = $(this).val();

        if (score == '0') {
            notify('danger','题目分值不能为0。');
            isOk = false;
        }

        if (!/^(([1-9]{1}\d{0,2})|([0]{1}))(\.(\d){1})?$/.test(score)) {
            notify('danger','题目分值只能填写数字，并且在3位数以内，保留一位小数。');
            $(this).focus();
            isOk = false;
        }
    });

    return isOk;
  }

  _calTestpaperStats() {
    let stats = {};
    let self = this;

    this.$typeNav.find('li').each(function() {
        let type = $(this).find('a').data('type'),
            name = $(this).find('a').data('name');
            

        stats[type] = {name:name, count:0, score:0, missScore:0};

        self.$element.find('#testpaper-items-'+type).find('[name="scores[]"]').each(function() {
            let itemType = $(this).closest('tr').data('type');
            let score = itemType == 'material' ? 0 : parseFloat($(this).val());
            let question = {};

            if (itemType != 'material') {
              stats[type]['count'] ++;
            }
            
            stats[type]['score'] += score;
            stats[type]['missScore'] = parseFloat($(this).data('miss-score'));

            let questionId = $(this).closest('tr').data('id');

            question['id'] = questionId;
            question['score'] = score;
            question['missScore'] = parseFloat($(this).data('miss-score'));
            question['type'] = type;
            
            self.questions.push(question);
        });
    });

    let total = {name:Translator.trans('总计'), count:0, score:0};
    $.each(stats, function(index, statsItem) {
        total.count += statsItem.count;
        total.score += statsItem.score;
    });

    stats.total = total;

    return stats;
  }

  _submitSave(event) {
    let passedScore = 0;
    let $target = $(event.currentTarget);
    if ($('input[name="passedScore"]:visible').length > 0) {
        passedScore = $('input[name="passedScore"]').val();
    }

    $target.button('loading').addClass('disabled');
    
    $.post(this.$element.attr('action'),{questions:this.questions,passedScore:passedScore},function(result){
      if (result.goto) {
        window.location.href = result.goto;
      }
    })
  }
}