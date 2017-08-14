$( document ).ready(function() {
    
	/*if($('.home').length) {
		var viewportWidth = $(window).width();
		var viewportHeight = $(window).height();
		var navHeight = $('.main-nav').height();
		var viewableArea = Math.ceil(viewportHeight - navHeight);

		$('.main-content').outerHeight(viewableArea);
	}*/

	if(!$('.contact').length) {
		if ($(window).width() > 768) {
			$(window).bind('scroll', function(e){
		    	parallaxScroll();
			});
		}

		function parallaxScroll(){
		    var scrolled = $(window).scrollTop();
		    $('.page-image-img img').css('top', (0-(scrolled*.25))+'px');
		}
	}

});

if($('.contact').length) {
	function initMap() {
	    var stgermain = {lat: -39.4916434, lng: 176.9162708};
	    var map = new google.maps.Map(document.getElementById('map'), {
	      	zoom: 16,
	      	center: stgermain,
	      	scrollwheel: false
	    });
	    var myIcon = new google.maps.MarkerImage('themes/stgermaincafe/images/st-germain-map-marker.png', null, null, null, new google.maps.Size(36,48));
	    var marker = new google.maps.Marker({
	      	position: stgermain,
	      	map: map,
	      	icon: myIcon
	    });
	}
}