
import Instafeed from 'instafeed.js';

// import styles
require('../assets/styles/styles.scss');

$(document).ready(function() {

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

	// Setup `contact us` modal
    $('#menu-item-78').find('a').attr('data-toggle', 'modal');
    $('#menu-item-78').find('a').attr('data-target', '.contact-us-modal');
    $('.taptap-menu-button-wrapper:not(.taptap-menu-active)').click(function() {
	  	$('#menu-main-navigation-1 #menu-item-78').find('a').attr('data-toggle', 'modal');
    	$('#menu-main-navigation-1 #menu-item-78').find('a').attr('data-target', '.contact-us-modal');
	});
	$('.contact-us-modal').on('show.bs.modal', function(e) {
		$('html').css({ overflowY: 'hidden'});
	});
	$('.contact-us-modal').on('hide.bs.modal', function(e) {
		$('html').css({ overflowY: 'auto'});
	});
});
