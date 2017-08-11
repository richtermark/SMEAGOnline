import 'common/select2';
export default class Base {
  constructor() {
    this.initSelect2();
    this.initCkeditor();
    this.initValidator();
    this.initCategory();
  }

  initSelect2() {
    $('#course_tags').select2({
      ajax: {
        url: app.arguments.tagMatchUrl + '#',
        dataType: 'json',
        quietMillis: 100,
        data: function (term, page) {
          return {
            q: term,
            page_limit: 10
          };
        },
        results: function (data) {
          var results = [];
          $.each(data, function (index, item) {

            results.push({
              id: item.name,
              name: item.name
            });
          });

          return {
            results: results
          };

        }
      },
      initSelection: function (element, callback) {
        var data = [];
        $(element.val().split(",")).each(function () {
          data.push({
            id: this,
            name: this
          });
        });
        callback(data);
      },
      formatSelection: function (item) {
        return item.name;
      },
      formatResult: function (item) {
        return item.name;
      },
      formatSearching: function () {
        return Translator.trans('搜索中...');
      },
      width: 'off',
      multiple: true,
      maximumSelectionSize: 20,
      placeholder: Translator.trans('请输入标签'),
      width: 'off',
      multiple: true,
      createSearchChoice: function () {
        return null;
      },
      maximumSelectionSize: 20
    });
  }

  initValidator() {
    let $form = $('#course-form');
    let validator = $form.validate({
      rules: {
        title: {
          required: true
        },
        subtitle: {
          required: true,
          maxlength: 70,
        },
      }
    })

    $('#course-create-btn').click(() => {
      if (validator.form()) {
        $form.submit();
      }
    })
  }

  initCkeditor() {
    if ($('#course-about-field').length > 0) {
      CKEDITOR.replace('course-about-field', {
        allowedContent: true,
        toolbar: 'Detail',
        filebrowserImageUploadUrl: $('#course-about-field').data('imageUploadUrl')
      });
    }
  }

  initCategory() {
    $('[data-role="tree-select"], [name="categoryId"]').select2({
      treeview: true,
      dropdownAutoWidth: true,
      treeviewInitState: 'collapsed',
      placeholderOption: 'first'
      // treeviewInitState: 'expanded'
    });
  }
}