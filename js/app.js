
import Instafeed from 'instafeed.js';
import slick from 'slick-carousel';

// import styles
require('../assets/styles/styles.scss');
require('slick-carousel/slick/slick.scss');
require('slick-carousel/slick/slick-theme.scss');

$(document).ready(function() {

	// Setup `InstaFeed` gallery
	if ($('#instafeed').length > 0) { 
		const feed = new Instafeed({
		  get: 'user',
		  limit: 8,
		  userId: 916800866,
		  accessToken: '916800866.5b88765.c9cb1c7df2a744d29376ad3ac3debce5',
		  resolution: 'standard_resolution',
		  template: '<div class="col-ig"><a class="d-block image" href="{{link}}"><img class="img-fluid" src="{{image}}"/></a></div>',
		});

		feed.run();
	}

	// Setup Home Slider
	if ($('#homeSlider').length > 0) { 
		$('#homeSlider').slick({
			dots: false,
			infinite: true,
			fade: true,
			cssEase: 'linear',
			autoplay: true,
			mobileFirst: true,
			arrows: false,
		});
	}

	// Setup Our Team Slider
	if ($('#ourTeamCarousel').length > 0) { 
		$('#ourTeamCarousel').slick({
			dots: false,
			infinite: true,
			speed: 300,
			autoplay: true,
			cssEase: 'linear',
			slidesToShow: 1,
			slidesToScroll: 1,
			mobileFirst: true,
			arrows: true,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				},
			}],
		});
	}

	// Smooth scrolling nav links
	$('#mainNav').find('li:not(#menu-item-58)').find('a').click(function(e) {
		e.preventDefault();
		const section = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(section).offset().top,
		});
	});

	// Remove double scroll bars when mobile nav is open
	$('.contact-us-modal').on('show.bs.modal', function(e) {
		$('html').css({ overflowY: 'hidden'});
	});
	$('.contact-us-modal').on('hide.bs.modal', function(e) {
		$('html').css({ overflowY: 'auto'});
	});
});
