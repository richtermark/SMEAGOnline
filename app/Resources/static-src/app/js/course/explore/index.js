echo.init();

$('#live, #free').on('click', event => {
  const $this = $(event.currentTarget);
  $('input:checkbox').attr('checked', false);
  $this.attr('checked',true);

  window.location.href = $this.val();
});

$(".open-course-list").on('click','.section-more-btn a', event => {
  const url = $(this).attr('data-url');
  $.ajax({
    url: url,
    dataType: 'html',
    success: function(html) {
      const content = $('.open-course-list .course-block,.open-course-list .section-more-btn', $(html)).fadeIn('slow');
      $(".section-more-btn").remove();
      $('.open-course-list').append(content);
      echo.init();
    } 
  });
});

