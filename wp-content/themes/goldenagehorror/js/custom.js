
(function($) {

	$(window).load(function(){
	
	});

	$(window).scroll(function() { // check if scroll event happened
		
		if( $("body").hasClass( "home") && $(document).width() > 700 ){
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

	window.onload = function(){

    var bLazy = new Blazy({
        breakpoints: [{
	    	width: 420, 
	    	src: 'data-src-small'
		}],
		success: function(element){
		    if( jQuery("body").hasClass( "home") ){
				var $grid = jQuery('.grid').masonry({
			  		columnWidth: '.grid-item',
			  		itemSelector: '.grid-item',
			  		gutter: 10,
			  		percentPosition: true
				});
			}	
        }
   });


};