import $ from 'jquery';
import Instafeed from 'instafeed.js';
import slick from 'slick-carousel';
import skrollr from 'skrollr';

// import styles
require('../assets/styles/styles.scss');
require('slick-carousel/slick/slick.scss');
require('slick-carousel/slick/slick-theme.scss');

$(document).ready(function () {

  if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    skrollr.init({
        forceHeight: false
    });
}

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
      slidesToShow: 3,
      slidesToScroll: 1,
      pause: false,
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
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
  $('li#menu-item-78').find('a').click(function (e) {
    e.preventDefault();
    const section = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(section).offset().top,
    });
  });

  // Setup modal trigger nav links
  $('#menu-item-79').find('a').attr('data-toggle', 'modal');
  $('#menu-item-79').find('a').attr('data-target', '.recent-projects-modal');
  $('#menu-main-navigation-1').find('#menu-item-79').find('a').attr('data-toggle', 'modal');
  $('#menu-main-navigation-1').find('#menu-item-79').find('a').attr('data-target', '.recent-projects-modal');

  // Remove double scroll bars when mobile nav is open
  $('.contact-us-modal').on('show.bs.modal', function (e) {
    $('html').css({overflowY: 'hidden'});
  });
  $('.contact-us-modal').on('hide.bs.modal', function (e) {
    $('html').css({overflowY: 'auto'});
  });

  // Init slider inside bs modal
  $('.recent-projects-modal').on('show.bs.modal', function (e) {
    // Recent Projects Nav menu slider
    $('#recentProjectsSlider').not('.slick-initialized').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      dots: true,
      speed: 300,
      cssEase: 'linear',
      pause: false,
      arrows: false,
      responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }],
    });

    // $('#recentProjectsSlider').on('init reInit resize destroy afterChange', function (event, slick, currentSlide, nextSlide) {
    //     var i = (currentSlide ? currentSlide : 0) + 1;
    //     $('.paging-info').text(i + '/' + $(slick.$slider[0].children[0].children[0]).find('.slick-slide:not(.slick-cloned)').length);
    // });

    $('.left-arrow').click(function(event){
      $('#recentProjectsSlider').slick('slickPrev');
    });

    $('.right-arrow').click(function(event){
      $('#recentProjectsSlider').slick('slickNext');
    });
  });

  $('.recent-projects-modal').on('shown.bs.modal', function (e) {
    $(window).trigger('resize');
    $('#mainNav').toggleClass('recent-projects-modal-active');
    $('.taptap-menu-button-wrapper').toggleClass('recent-projects-modal-active');

    $('.paging-info').text($('#recentProjectsSlider').slick().currentSlide() + '/' + $('.case-study-item.slick-slide').size());

    $(window).on('resize', function() {
      if ($(this).width() < 768) {
        $('html').css({overflowY: 'hidden'});
      }
    });
  });

  $('.recent-projects-modal').on('hide.bs.modal', function (e) {
    $('html').css({overflowY: 'auto'});
    $('.taptap-menu-button-wrapper').removeClass('recent-projects-modal-active');
    $('#mainNav').removeClass('recent-projects-modal-active');
  });

  $('.recent-projects-modal').on('hidden.bs.modal', function (e) {
    $('#recentProjectsSlider').slick('unslick');
  });

  $('.icon-arrow-left').click(function(e) {
      $('#menu-item-79').find('a').trigger('click');
      $('.taptap-main-menu-button').trigger('click');
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
