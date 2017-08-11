import 'bootstrap-notify';

const notify = (level, message, delay = 3000, icon = null) => {
  $('[data-notify="container"]').remove();
  let iconFont = icon;
  if (!iconFont) {
    switch (level) {
      case 'info':
        iconFont = "es-icon es-icon-info color-info mrm";
        break;
      case 'success':
        iconFont = "es-icon es-icon-iccheckcircleblack24px color-success mrm";
        break;
      case 'danger':
        iconFont = "es-icon es-icon-icon_close_circle color-danger mrm";
        break;
      case 'warning':
        iconFont = "es-icon es-icon-warning color-warning mrm";
        break;
      default:
        break;
    }
  }
  $.notify({
    message: message,
    icon: iconFont,
  }, {
    type: level, //info,danger,warning,success
    delay: delay,
    placement: {
      from: 'top',
      align: 'center'
    },
    offset: 20,
    z_index: 1051,
    timer: 100,
    template: '<div data-notify="container" class="notify-content">' +
      '<div class="notify notify-{0}">' +
        '<span data-notify="icon"></span>' +
        '<span data-notify="title">{1}</span>' +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
          '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        '</div>' +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
      '</div>' +
    '</div>'
  });
};

export default notify;

