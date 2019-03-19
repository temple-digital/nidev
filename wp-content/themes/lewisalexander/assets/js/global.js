jQuery(document).ready(function ($) {

    // Explore responsive
    $(".explore").click(function() {
      var windowSize = $(window).width();
      var $offset = 0;

      if (windowSize <= 640) {
        $offset = 0;
      }

      $('html,body').animate({
        scrollTop: $(".explore").offset().top -$offset}, 1000);
    });


    $(".portfolio-slider .text .text-btn .plus-icon").click(function() {
		$(this).closest('.portfolio-item').find('.text').toggleClass('active');
        return false;
    });

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 500) {
    //         $(".hero .text").addClass("fixed");
    //     } else {
    //         $(".hero .text").removeClass("fixed");
    //     }
    // });
});
