import $ from 'jquery';
import Instafeed from 'instafeed.js';
import slick from 'slick-carousel';

// import styles
require('../assets/styles/styles.scss');
require('slick-carousel/slick/slick.scss');
require('slick-carousel/slick/slick-theme.scss');

$(document).ready(function () {

  // Setup `InstaFeed` gallery
  if ($('#instafeed').length > 0) {
    const feed = new Instafeed({
      get: 'user',
      limit: 8,
      userId: 916800866,
      accessToken: '916800866.5b88765.c9cb1c7df2a744d29376ad3ac3debce5',
      resolution: 'standard_resolution',
      template: '<div class="col-ig"><a class="d-block image" href="{{link}}" target="_blank"><img class="img-fluid" src="{{image}}"/></a></div>',
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
      pause: false,
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
      pause: false,
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
  $('#mainNav').find('li:not(#menu-item-58)').find('a').click(function (e) {
    e.preventDefault();
    const section = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(section).offset().top,
    });
  });

  // Remove double scroll bars when mobile nav is open
  $('.contact-us-modal').on('show.bs.modal', function (e) {
    $('html').css({overflowY: 'hidden'});
  });
  $('.contact-us-modal').on('hide.bs.modal', function (e) {
    $('html').css({overflowY: 'auto'});
  });

  // Setup Newsletter Form
  $('#e2ma_signup_submit_button')
    .attr('value', 'Submit Details');

  $('.e2ma_signup_form_row').each(function(index) {
    const text = $(this).find('.e2ma_signup_form_label').text();
    const value = $.trim(text.replace(/\*/g, '').replace(/ /g, '').toLowerCase());
    
    if (text.indexOf('*') === -1) {
      $(this).find('.e2ma_signup_form_element').append('<div class="optional">Optional</div>');
    }

    switch(value) {
      case 'email':
        return $(this).find('.e2ma_signup_form_element').find('input').attr('placeholder', 'Your@email.com');
      break;
      case 'firstname':
        return $(this).find('.e2ma_signup_form_element').find('input').attr('placeholder', 'First Name');
      break;
      case 'lastname':
        return $(this).find('.e2ma_signup_form_element').find('input').attr('placeholder', 'Last Name');
      break;
      case 'company':
        return $(this).find('.e2ma_signup_form_element').find('input').attr('placeholder', 'Your Company');
      break;
      case 'role':
        return $(this).find('.e2ma_signup_form_element').find('input').attr('placeholder', 'Job Title');
      break;
    }
  });

  $(window).scroll(function() {    
    var offset;
    var navbarHeight;
    const scroll = $(window).scrollTop();

    if ($(window).width() < 768) {
      offset = 400;
      navbarHeight = 55;
    }
    else {
      offset = 600;
      navbarHeight = 75;
    }

    if (scroll >= (offset - navbarHeight)) {
      $('body').addClass('dark-logo');
    } else {
      $('body').removeClass('dark-logo');
    }
  });
});
