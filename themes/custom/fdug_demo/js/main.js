(function ($) {
  $(document).ready(function() {

    $('.menu').click(function(e){
      $('.drawer').toggleClass('closed');
      e.preventDefault();
    });

  });
})(jQuery);
