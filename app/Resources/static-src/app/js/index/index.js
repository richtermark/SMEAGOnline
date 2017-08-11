import Swiper from 'swiper';
import '../teacher/follow-btn';

echo.init();

if ($(".es-poster .swiper-slide").length > 1) {
  var swiper = new Swiper('.es-poster.swiper-container', {
    pagination: '.swiper-pager',
    paginationClickable: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    loop: true,
    calculateHeight: true,
    roundLengths: true,
    onInit: function (swiper) {
      $(".swiper-slide").removeClass('swiper-hidden');
    }
  });
}

$("body").on('click', '.js-course-filter', function () {
  var $btn = $(this);
  var courseType = $btn.data('type');
  var text = $('.course-filter .visible-xs .active a').text();
  $.get($btn.data('url'), function (html) {
    $('#' + courseType + '-list-section').after(html).remove();
    var parent = $btn.parent();
    if (!parent.hasClass('course-sort')) {
      text = $btn.find("a").text();
    }
    $('.course-filter .visible-xs .btn').html(text + " " + '<span class="caret"></span>');
    // Lazyload.init();
    echo.init();
  })
});