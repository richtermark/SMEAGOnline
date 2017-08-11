import notify from 'common/notify';
import 'common/select2';
import 'app/js/classroom-manage/classroom-create';

initEditor();
const validator = initValidator();
toggleExpiryValue($("[name=expiryMode]:checked").val());

$("[name='expiryMode']").change(function () {
  if (app.arguments.classroomStatus === 'published') {
    return false;
  }
  var expiryValue = $("[name='expiryValue']").val();
  if (expiryValue) {
    if (expiryValue.match("-")) {
      $("[name='expiryValue']").data('date', $("[name='expiryValue']").val());
    } else {
      $("[name='expiryValue']").data('days', $("[name='expiryValue']").val());
    }
    $("[name='expiryValue']").val('')
  }

  if ($(this).val() == 'forever') {
    $('.expiry-value-js').addClass('hidden');
  } else {
    $('.expiry-value-js').removeClass('hidden');
    var $esBlock = $('.expiry-value-js > .controls > .help-block');
    $esBlock.text($esBlock.data($(this).val()));
  }
  toggleExpiryValue($(this).val());
});

function initEditor() {
  let editor_classroom_about = CKEDITOR.replace('about', {
    allowedContent: true,
    toolbar: 'Detail',
    filebrowserImageUploadUrl: $('#about').data('imageUploadUrl'),
    filebrowserFlashUploadUrl: $('#about').data('flashUploadUrl')
  });

  $('[data-role="tree-select"], [name="categoryId"]').select2({
    treeview: true,
    dropdownAutoWidth: true,
    treeviewInitState: 'collapsed',
    placeholderOption: 'first'
  });
}

function initValidator() {
  return $('#classroom-set-form').validate({
    rules: {
      title: {
        required: true,
      }
    },
  });

  $('#classroom-save').click(() => {
    // validator.form();
  })
}

function toggleExpiryValue(expiryMode) {
  if (!$("[name='expiryValue']").val()) {
    $("[name='expiryValue']").val($("[name='expiryValue']").data(expiryMode));
  }
  elementRemoveRules($("[name='expiryValue']"));
  switch (expiryMode) {
    case 'days':
      $('[name="expiryValue"]').datetimepicker('remove');
      $(".expiry-value-js .controls > span").removeClass('hidden');
      elementAddRules($('[name="expiryValue"]'),getExpiryModeDaysRules());
      validator.form();
      break;
    case 'date':
      if($('#classroom_expiryValue').attr('readonly') !== undefined){
        return false;
      }
      $(".expiry-value-js .controls > span").addClass('hidden');
      $("#classroom_expiryValue").datetimepicker({
        language: 'zh-CN',
        autoclose: true,
        format: 'yyyy-mm-dd',
        minView: 'month',
        endDate: new Date(Date.now() + 86400 * 365 * 10 * 1000)
      });
      $("#classroom_expiryValue").datetimepicker('setStartDate', new Date);
       elementAddRules($('[name="expiryValue"]'),getExpiryModeDateRules());
       validator.form();
      break;
    default:
      break;
  }
}

function getExpiryModeDaysRules() {
  return {
    required: true,
    digits:true,
    min: 1,
    max: 10000,
    messages: {
      required: '请输入有效期天数',
    }
  }
}

function getExpiryModeDateRules() {
  return {
    required: true,
    date: true,
    after_now_date: true,
    messages: {
      required: '请输入截至日期',
    }
  }
}

function elementAddRules($element, options) {
  $element.rules("add", options);
}

function elementRemoveRules($element) {
  $element.rules('remove');
}

