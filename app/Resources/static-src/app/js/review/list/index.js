import notify from 'common/notify';
import ThreadShowWidget from 'app/js/thread/thread-show';
let $form = $('#review-form');

let validator = $form.validate({
  rules: {
    rating: {
      required: true,
      'raty_star': true,
    },
    content: {
      required: true,
    }
  },
  messages: {
    rating: {
      required: Translator.trans('请打分'),
    }
  }
});

if ($form.length > 0) {
  $form.find('.rating-btn').raty({
    path: $form.find('.rating-btn').data('imgPath'),
    hints: [Translator.trans('很差'), Translator.trans('较差'), Translator.trans('还行'), Translator.trans('推荐'), Translator.trans('力荐')],
    score: function () {
      return $(this).attr('data-rating');
    },
    click: function (score, event) {
      $form.find('[name=rating]').val(score);
    }
  });


  $form.find('.js-btn-save').on("click", function () {
    if (validator.form()) {
      $form.find('.js-btn-save').button('loading');
      $.post($form.attr('action'), $form.serialize(), function (json) {
        $form.find('.js-review-remind').fadeIn('fast', function () {
          window.location.reload();
        });
      }, 'json');
    }
  });



  $('.js-hide-review-form').on('click', function () {
    $(this).hide();
    $('.js-show-review-form').show();
    $form.hide();
  });

  $('.js-show-review-form').on('click', function () {
    $(this).hide();
    $('.js-hide-review-form').show();
    $form.show();
  });

}

let $reviews = $('.js-reviews');

$('.js-reviews').hover(function () {
  let $fullLength = $(this).find('.full-content').text().length;

  if ($fullLength > 100 && $(this).find('.short-content').is(":hidden") == false) {
    $(this).find('.show-full-btn').show();
  } else {
    $(this).find('.show-full-btn').hide();
  }
})

$reviews.on('click', '.show-full-btn', function () {
  let $review = $(this).parents('.media');
  $review.find('.short-content').slideUp('fast', function () {
    $review.find('.full-content').slideDown('fast');
  });
  $(this).hide();
  $review.find('.show-short-btn').show();
});

$reviews.on('click', '.show-short-btn', function () {
  let $review = $(this).parents('.media');
  $review.find('.full-content').slideUp('fast', function () {
    $review.find('.short-content').slideDown('fast');
  });
  $(this).hide();
  $review.find('.show-full-btn').show();
});

if ($('.js-reviews').length > 0) {
  let threadShowWidget = new ThreadShowWidget({
    element: '.js-reviews',
  });

  console.log($('.js-reviews'));
  threadShowWidget.undelegateEvents('.js-toggle-subpost-form', 'click');
  $('.js-toggle-subpost-form').click(function (e) {
    e.stopPropagation();
    let postNum = $(this).closest('.thread-subpost-container').find('.thread-subpost-content .thread-subpost-list .thread-subpost').length;

    if (postNum >= 5) {
      Notify.danger('评论回复已达5条上限，不能再回复!');
      return;
    }
    let $form = $(this).parents('.thread-subpost-container').find('.thread-subpost-form');
    $form.toggleClass('hide');
    threadShowWidget._initSubpostForm($form);
  })
}