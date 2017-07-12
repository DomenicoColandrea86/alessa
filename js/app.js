
import Instafeed from 'instafeed.js';

// import styles
require('../assets/styles/styles.scss');

$(document).ready(function() {
	// Smooth scrolling nav links
	$('#mainNav').find('li:not(#menu-item-58)').find('a').click(function(e) {
		e.preventDefault();
		const section = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(section).offset().top,
		});
	});

	// Setup `InstaFeed` gallery
	const feed = new Instafeed({
	  get: 'user',
	  limit: 8,
	  userId: 916800866,
	  accessToken: '916800866.5b88765.c9cb1c7df2a744d29376ad3ac3debce5',
	  resolution: 'standard_resolution',
	  template: '<div class="col-ig"><a class="d-block image" href="{{link}}"><img class="img-fluid" src="{{image}}"/></a></div>',
	});

	feed.run();

	$('.contact-us-modal').on('show.bs.modal', function(e) {
		$('html').css({ overflowY: 'hidden'});
	});
	$('.contact-us-modal').on('hide.bs.modal', function(e) {
		$('html').css({ overflowY: 'auto'});
	});
});
