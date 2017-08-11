class Marketing {
  constructor() {
    this.validator = null;
    this.init();
  }

  init() {
    this.initDatePicker('#expiryStartDate');
    this.initDatePicker('#expiryEndDate');
    this.initDatePicker('#deadline');
    this.initValidator();
    this.initExpiryMode();
    this.initenableBuyExpiry();
    this.taskPriceSetting();
    this.checkBoxChange();
    this.initDatetimepicker();
    this.setService();
  }

  setService() {
    $('.js-service-item').click(function (event) {
      let $item = $(event.currentTarget);
      let $values = $('#course_services').val();
      let values;
      if (!$values) {
        values = [];
      } else {
        values = JSON.parse($values);
      }

      if ($item.hasClass('label-primary')) {
        $item.removeClass('label-primary').addClass('label-default');
        values.splice(values.indexOf($item.data('code')), 1);
      } else {
        $item.removeClass('label-default').addClass('label-primary');
        values.push($item.data('code'));
      }
      
      $('#course_services').val(JSON.stringify(values));
    });
  }

  initDatetimepicker() {
    $('input[name="buyExpiryTime"]').datetimepicker({
      format: 'yyyy-mm-dd',
      language: "zh",
      minView: 2, //month
      autoclose: true,
    }).on('hide', () => {
      this.validator && this.validator.form();
    })
    this.updateDatetimepicker();
  }

  initValidator() {
    let $form = $('#course-marketing-form');
    $('.js-task-price-setting').perfectScrollbar();
    this.validator = $form.validate({
      groups: {
        date: 'expiryStartDate expiryEndDate'
      },
      rules: {
        originPrice: {
          required: function () {
            return $("[name=isFree]:checked").val() == 0;
          },
          positive_currency: function () {
            return $("[name=isFree]:checked").val() == 0;
          },
        },
        watchLimit: {
          digits: true
        },
      },
      messages: {
        buyExpiryTime: {
          required: '请选择有效的加入截止日期',
          date: '请选择有效的加入截止日期'
        },
      }
    });
    $('#course-submit').click((event) => {
      if (this.validator && this.validator.form()) {
        $(event.currentTarget).button('loading');
        $form.submit();
      }
    });
  }

  updateDatetimepicker() {
    $('input[name="buyExpiryTime"]').datetimepicker('setStartDate', new Date(Date.now()));
    $('input[name="buyExpiryTime"]').datetimepicker('setEndDate', new Date(Date.now() + 86400 * 365 * 10 * 1000));
  }

  checkBoxChange() {
    $('input[name="buyable"]').on('change',  (event)=> {
      if ($('input[name="buyable"]:checked').val() == 0) {
        $('.js-course-add-close-show').removeClass('hidden');
        $('.js-course-add-open-show').addClass('hidden');
      } else {
        $('.js-course-add-close-show').addClass('hidden');
        $('.js-course-add-open-show').removeClass('hidden');
      }
      this.initenableBuyExpiry();
    });
    $('input[name="enableBuyExpiryTime"]').on('change', (event) => {
      if ($('input[name="enableBuyExpiryTime"]:checked').val() == 0) {
        $('#buyExpiryTime').addClass('hidden');
      } else {
        $('#buyExpiryTime').removeClass('hidden');
        this.updateDatetimepicker();
      }
      this.initenableBuyExpiry();
    });

    $('input[name="deadlineType"]').on('change', (event) => {
      if ($('input[name="deadlineType"]:checked').val() == 'end_date') {
        $('#deadlineType-date').removeClass('hidden');
        $('#deadlineType-days').addClass('hidden');
      } else {
        $('#deadlineType-date').addClass('hidden');
        $('#deadlineType-days').removeClass('hidden');
      }
      this.initExpiryMode();
    });

    $('input[name="expiryMode"]').on('change', (event) => {
      if ($('input[name="expiryMode"]:checked').val() == 'date') {
        $('#expiry-days').removeClass('hidden').addClass('hidden');
        $('#expiry-date').removeClass('hidden');
      } else if ($('input[name="expiryMode"]:checked').val() == 'days') {
        $('#expiry-date').removeClass('hidden').addClass('hidden');
        $('#expiry-days').removeClass('hidden');
      } else {
        $('#expiry-date').removeClass('hidden').addClass('hidden');
        $('#expiry-days').removeClass('hidden').addClass('hidden');
      }
      this.initExpiryMode();
    });

    $('input[name="isFree"]').on('change', (event) => {
      if ($('input[name="isFree"]:checked').val() == 0) {
        $('.js-is-free').removeClass('hidden');
      } else {
        $('.js-is-free').addClass('hidden');
      }
    });
    $('input[name="tryLookable"]').on('change', (event) => {
      if ($('input[name="tryLookable"]:checked').val() == 1) {
        $('.js-enable-try-look').removeClass('hidden');
      } else {
        $('.js-enable-try-look').addClass('hidden');
      }
    });

    $('input[name="showServices"]').on('change', (event) => {
      if ($('input[name="showServices"]:checked').val() == 1) {
        $('.js-services').removeClass('hidden');
      } else {
        $('.js-services').addClass('hidden');
      }
    });
  }

  taskPriceSetting() {
    $('.js-task-price-setting').on('click', 'li', function (event) {
      let $li = $(this).toggleClass('open');
      let $input = $li.find('input');
      $input.prop("checked", !$input.is(":checked"))
    });

    $('.js-task-price-setting').on('click', 'input', function (event) {
      event.stopPropagation();
      let $input = $(this);
      $input.closest('li').toggleClass('open');
    });
  }

  initDatePicker($id) {
    let $picker = $($id);
    $picker.datetimepicker({
      format: 'yyyy-mm-dd',
      language: "zh",
      minView: 2, //month
      autoclose: true,
      endDate: new Date(Date.now() + 86400 * 365 * 10 * 1000)
    }).on('hide', () => {
      this.validator.form();
    });
    $picker.datetimepicker('setStartDate', new Date());
  }

  initenableBuyExpiry() {
    let $enableBuyExpiryTime = $('[name="enableBuyExpiryTime"]:checked');
    let $buyable = $('[name="buyable"]:checked');
    let $buyExpiryTime = $('[name="buyExpiryTime"]');
    if ($buyable.val() == 1 && $enableBuyExpiryTime.val() == 1) {
      this.elementAddRules($buyExpiryTime, this.getBuyExpiryTimeRules());
    }
    else {
      this.elementRemoveRules($buyExpiryTime);
    }
    this.validator.form();
  }

  initExpiryMode() {
    let $deadline = $('[name="deadline"]');
    let $expiryDays = $('[name="expiryDays"]');
    let $expiryStartDate = $('[name="expiryStartDate"]');
    let $expiryEndDate = $('[name="expiryEndDate"]');
    let expiryMode = $('[name="expiryMode"]:checked').val();
    this.elementRemoveRules($deadline);
    this.elementRemoveRules($expiryDays);
    this.elementRemoveRules($expiryStartDate);
    this.elementRemoveRules($expiryEndDate);

    switch (expiryMode) {
      case 'days':
        let $deadlineType = $('[name="deadlineType"]:checked');
        if ($deadlineType.val() === 'end_date') {
          this.elementAddRules($deadline, this.getDeadlineEndDateRules());
          this.validator.form();
          return;
        }
        this.elementAddRules($expiryDays, this.getExpiryDaysRules());
        this.validator.form();
        break;
      case 'date':
        this.elementAddRules($expiryStartDate, this.getExpiryStartDateRules());
        this.elementAddRules($expiryEndDate, this.getExpiryEndDateRules());
        this.validator.form();
        break;
      default:
        this.validator.form();
        break;
    }
  }

  getBuyExpiryTimeRules() {
    return {
      required: true,
      messages: {
        required: Translator.trans('请输入加入截止日期!')
      }
    };
  }

  getExpiryEndDateRules() {
    return {
      required: true,
      date: true,
      after_date: '#expiryStartDate',
      messages: {
        required: Translator.trans('请输入结束日期!')
      }
    }
  }

  getExpiryStartDateRules() {
    return {
      required: true,
      date: true,
      before_date: '#expiryEndDate',
      messages: {
        required: Translator.trans('请输入开始日期!')
      }
    }
  }

  getExpiryDaysRules() {
    return {
      required: true,
      positive_integer: true,
      max_year: true,
      messages: {
        required: Translator.trans('请输入有效期天数')
      }
    }
  }

  getDeadlineEndDateRules() {
    return {
      required: true,
      date: true,
      messages: {
        required: Translator.trans('请输入截至日期!')
      }
    }
  }

  elementAddRules($element, options) {
    $element.rules("add", options);
  }

  elementRemoveRules($element) {
    $element.rules('remove');
  }
}

new Marketing();