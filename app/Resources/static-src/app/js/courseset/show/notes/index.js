

$('.js-like')
    .on('click', (event) => {
      const $self = $(event.currentTarget);
      const $num = $self.find('.js-like-num');
      const num = parseInt($num.text());
      let url, isLiked = $self.hasClass('color-primary');
      if(isLiked){
        url = $self.data('cancelLikeUrl');
      }else {
        url = $self.data('likeUrl');
      }

      $.post(url)
          .done((response) => {
            if(isLiked){
              $self.removeClass('color-primary');
              $num.text(num-1);
            }else{
              $self.addClass('color-primary');
              $num.text(num+1);
            }
          })
    });