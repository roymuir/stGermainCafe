$( document ).ready(function() {

	// Mobile menu
	$('#menu-button').on('click', function (e) {
		e.preventDefault();
		$('.overlay').addClass('overlay-open');
		$('body').css('overflow', 'hidden');
	});
	$('.overlay-close, .overlay .scroll-link').on('click', function (e) {
		e.preventDefault();
		$('.overlay').removeClass('overlay-open');
		$('body').css('overflow', '');
	});

	// Header image parallax
	/*if(!$('.contact').length) {
		if ($(window).width() > 768) {
			$(window).bind('scroll', function(e){
		    	parallaxScroll();
			});
		}

		function parallaxScroll(){
		    var scrolled = $(window).scrollTop();
		    $('.page-image-img').css('background-position-y', (0-(scrolled*.25))+'px');
		}
	}*/

	// Gallery
	var myLazyLoad = new LazyLoad();

	// Google map
	if($('.contact').length) {
		function initMap() {
		    var stgermain = {lat: -39.4916434, lng: 176.9162708};
		    var map = new google.maps.Map(document.getElementById('map'), {
		      	zoom: 17,
		      	center: stgermain,
		      	scrollwheel: false,
		      	streetViewControl: false,
		      	mapTypeControl: false,
		      	fullscreenControl: false
		    });
		    var myIcon = new google.maps.MarkerImage('themes/stgermaincafe/images/st-germain-map-marker.png', null, null, null, new google.maps.Size(36,48));
		    var marker = new google.maps.Marker({
		      	position: stgermain,
		      	map: map,
		      	icon: myIcon
		    });
		}
		initMap();
	}

	// Catering category order
	if($('.catering').length) {

		function cateringCategory() {
			if ($(window).width() > 767 && $(window).width() < 992) {
				var catQuantity = $('.catering-block .col-sm-6:last-child .catering-category').length;
				for (var i = 0; i < catQuantity; i++) {
					//console.log(i);
					$('.catering-block .col-sm-6:last-child .catering-category:nth-child('+ (i+1) + ')').appendTo('.catering-block .col-sm-6:nth-child('+ (i+1) + ')');
				}
	
			}
		}

		cateringCategory();
	}

});