jQuery(document).ready(function(){
	jQuery(window).scroll(function() { // check if scroll event happened
		if (jQuery(document).scrollTop() > 400) { // check if user scrolled more than 50 from top of the browser window
			
			jQuery('.site-title').css('position', 'relative');
			jQuery('nav.main-navigation').css('position', 'relative');

		} else {
			jQuery('.site-title').css('position', 'fixed');
			jQuery('nav.main-navigation').css('position', 'fixed');
		}
	});
});