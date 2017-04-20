
(function($) {

	$(window).load(function(){
		if( $("body").hasClass( "home") ){
			var $grid = $('.grid').masonry({
		  		columnWidth: '.grid-item',
		  		itemSelector: '.grid-item',
		  		gutter: 10,
		  		percentPosition: true
			});
		}		
	});

	$(window).scroll(function() { // check if scroll event happened
		
		if( $("body").hasClass( "home") ){
			if ($(document).scrollTop() > 400) { // check if user scrolled more than 50 from top of the browser window
				$('.site-title').css('position', 'relative');
				$('nav.main-navigation').css('position', 'relative');

			} else {
				$('.site-title').css('position', 'fixed');
				$('nav.main-navigation').css('position', 'fixed');
			}
		}
	});

})( jQuery );

