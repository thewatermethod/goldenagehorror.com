(function($) {
	$(window).scroll(function() { // check if scroll event happened
		if ($(document).scrollTop() > 400) { // check if user scrolled more than 50 from top of the browser window
			
			$('.site-title').css('position', 'relative');
			$('nav.main-navigation').css('position', 'relative');

		} else {
			$('.site-title').css('position', 'fixed');
			$('nav.main-navigation').css('position', 'fixed');
		}
	});


})( jQuery );