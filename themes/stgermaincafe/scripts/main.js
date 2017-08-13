$( document ).ready(function() {
    
	if($('.home').length) {
		var viewportWidth = $(window).width();
		var viewportHeight = $(window).height();
		var navHeight = $('.main-nav').height();
		var viewableArea = Math.ceil(viewportHeight - navHeight);

		$('.main-content').outerHeight(viewableArea);
	}

	if(!$('.contact').length) {
		$(window).bind('scroll', function(e){
	    	parallaxScroll();
		});

		function parallaxScroll(){
		    var scrolled = $(window).scrollTop();
		    $('.page-image-header img').css('top', (0-(scrolled*.25))+'px');
		}
	}

});

function initMap() {
    var stgermain = {lat: -39.4916434, lng: 176.9162708};
    var map = new google.maps.Map(document.getElementById('map'), {
      	zoom: 16,
      	center: stgermain
    });
    var marker = new google.maps.Marker({
      	position: stgermain,
      	map: map
    });
}