/* -------------------------------------
    Smart sticky
     -------------------------------------- */
(function($){
    'use strict';

    // Fixed Nav
	var lastScrollTop = 0;
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();
		if ( wScroll > $('#nav').height() + 300 ) {
			if ( wScroll < lastScrollTop ) {
				$('#nav-fixed').removeClass('slide-up').addClass('slide-down');
			} else {
				$('#nav-fixed').removeClass('slide-down').addClass('slide-up');
			}
		}
		if ( wScroll > $('#nav').height() + 100 ) {
			$('#nav-fixed').addClass('fixed');
		} else {
			$('#nav-fixed').removeClass('fixed');
			$('#nav-fixed').removeClass('slide-down');
		}
		lastScrollTop = wScroll
	});


})(jQuery);