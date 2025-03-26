;(function($){

  $(document).ready(function(){
  
  //========== HEADER ACTIVE STRATS ============= //
   var windowOn = $(window);
   windowOn.on('scroll', function () {
     var scroll = windowOn.scrollTop();
     if (scroll < 100) {
       $("#vl-header-sticky").removeClass("header-sticky");
     } else {
       $("#vl-header-sticky").addClass("header-sticky");
     }
   });
   
  //========== HEADER ACTIVE ENDS ============= //
  
  //========== MOBILE MENU STARTS ============= //
    var vlMenuWrap = $('.vl-mobile-menu-active > ul').clone();
    var vlSideMenu = $('.vl-offcanvas-menu nav');
    vlSideMenu.append(vlMenuWrap);
    if ($(vlSideMenu).find('.sub-menu, .vl-mega-menu').length != 0) {
      $(vlSideMenu).find('.sub-menu, .vl-mega-menu').parent().append('<button class="vl-menu-close"><i class="fas fa-chevron-right"></i></button>');
    }
  
    var sideMenuList = $('.vl-offcanvas-menu nav > ul > li button.vl-menu-close, .vl-offcanvas-menu nav > ul li.has-dropdown > a');
    $(sideMenuList).on('click', function (e) {
      console.log(e);
      e.preventDefault();
      if (!($(this).parent().hasClass('active'))) {
        $(this).parent().addClass('active');
        $(this).siblings('.sub-menu, .vl-mega-menu').slideDown();
      } else {
        $(this).siblings('.sub-menu, .vl-mega-menu').slideUp();
        $(this).parent().removeClass('active');
      }
    });
  
  
  $(".vl-offcanvas-toggle").on('click',function(){
    $(".vl-offcanvas").addClass("vl-offcanvas-open");
    $(".vl-offcanvas-overlay").addClass("vl-offcanvas-overlay-open");
  });
  
  $(".vl-offcanvas-close-toggle,.vl-offcanvas-overlay").on('click', function(){
    $(".vl-offcanvas").removeClass("vl-offcanvas-open");
    $(".vl-offcanvas-overlay").removeClass("vl-offcanvas-overlay-open");
  });
  
  //========== MOBILE MENU ENDS ============= //

  //========== SIDEBAR/SEARCH AREA ============= //
$(".header-search-btn").on("click", function (e) {
  e.preventDefault();
  $(".header-search-form-wrapper").addClass("open");
  $('.header-search-form-wrapper input[type="search"]').focus();
  $('.body-overlay').addClass('active');
  });
  $(".tx-search-close").on("click", function (e) {
  e.preventDefault();
  $(".header-search-form-wrapper").removeClass("open");
  $("body").removeClass("active");
  $('.body-overlay').removeClass('active');
  });
  $('#mobile-menu-active').metisMenu();
  $('#mobile-menu-active .dropdown > a').on('click', function (e) {
  e.preventDefault();
  });
  $(".hamburger_menu").on("click", function (e) {
  e.preventDefault();
  $(".slide-bar").toggleClass("show");
  $("body").addClass("on-side");
  $('.body-overlay').addClass('active');
  $(this).addClass('active');
  });
  $(".close-mobile-menu > a").on("click", function (e) {
  e.preventDefault();
  $(".slide-bar").removeClass("show");
  $("body").removeClass("on-side");
  $('.body-overlay').removeClass('active');
  $('.hamburger_menu').removeClass('active');
  });
  //========== SIDEBAR/SEARCH AREA ============= //

  //========== PAGE PROGRESS STARTS ============= // 
    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery(".progress-wrap").addClass("active-progress");
      } else {
        jQuery(".progress-wrap").removeClass("active-progress");
      }
    });
    jQuery(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });
  //========== PAGE PROGRESS STARTS ============= // 

  
  //========== VIDEO POPUP STARTS ============= //
     if ($(".popup-youtube").length > 0) {
      $(".popup-youtube").magnificPopup({
      type: "iframe",
      });
      }
  //========== VIDEO POPUP ENDS ============= //
  AOS.init;
  AOS.init({disable: 'mobile'});
  
  //========== NICE SELECT ============= //
  $('select').niceSelect();
  
  //========== CASE IMAGE ============= //
  
  });
  //========== COUNTER UP============= //
  const ucounter = $('.counter');
  if (ucounter.length > 0) {
   ucounter.countUp();  
  };
  
  const color = $(".service-list li a");
  color.on("click", function () {
    $(".service-list li a");
    $(this).addClass("active");
  });

  
  //========== TESTIMONIAL AREA ============= //
  
  // testimonial //
  $('.portfolio-slider-area').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    items:10,
    navText:["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"],
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    responsiveClass:true,
    responsive:{
    0:{
      items:1,                
    },
    600:{
      items:1,
    },
    1000:{
      items:2,
    }
    }
  });


    // testimonial //
    $('.testimonial-review-area').owlCarousel({
      loop:true,
      margin:30,
      nav:true,
      dots:false,
      items:10,
      navText:["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"],
      autoplay:true,
      smartSpeed:1500,
      autoplayTimeout:3000,
      responsiveClass:true,
      responsive:{
      0:{
        items:1,                
      },
      600:{
        items:2,
      },
      1000:{
        items:3,
      }
      }
    });

    // testimonial //
    $('.testimonial-slider-box').owlCarousel({
      loop:true,
      margin:30,
      nav:true,
      dots:true,
      items:10,
      navText:["<i class='fa-solid fa-angle-up'></i>","<i class='fa-solid fa-angle-down'></i>"],
      autoplay:true,
      smartSpeed:1500,
      autoplayTimeout:3000,
      responsiveClass:true,
      responsive:{
      0:{
        items:1,                
      },
      600:{
        items:1,
      },
      1000:{
        items:1,
      }
      }
    });

    // testimonial //
    $('.about-brand-slider').owlCarousel({
      loop:true,
      margin:30,
      nav:false,
      dots:false,
      items:10,
      autoplay:true,
      smartSpeed:1500,
      autoplayTimeout:3000,
      responsiveClass:true,
      responsive:{
      0:{
        items:2,                
      },
      600:{
        items:3,
      },
      1000:{
        items:4,
      }
      }
    });

// testimonial //
$('.portfolio-slider2-boxarea').owlCarousel({
  loop:true,
  margin:30,
  nav:false,
  dots:false,
  items:10,
  autoplay:true,
  smartSpeed:1500,
  autoplayTimeout:3000,
  responsiveClass:true,
  responsive:{
  0:{
    items:1,                
  },
  600:{
    items:1,
  },
  1000:{
    items:2,
  }
  }
});

  //testimonial slider //
  $(".slider2").slick({
    slidesToShow: 4,
    asNavFor: '.slider1',
    focusOnSelect: true,
    infinite: false,
  });

  $(".slider1").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay:true,
    autoplaySpeed:2000,
    loop: true,
    focusOnSelect: true,
    asNavFor: ".slider2",
    infinite: true,
    prevArrow: $('.next-arrow'),
    nextArrow: $('.prev-arrow'),
  });
  //========== PRELOADER ============= //
  $(window).on("load", function (event) {
    setTimeout(function () {
      $("#preloader").fadeToggle();
    }, 200);
  
  });
  
  })(jQuery);

  //========== GSAP AREA ============= //
  
  if ($('.text-anime-style-1').length) {
    let staggerAmount 	= 0.05,
    translateXValue = 0,
    delayValue 		= 0.5,
     animatedTextElements = document.querySelectorAll('.text-anime-style-1');
  
    animatedTextElements.forEach((element) => {
    let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.words, {
      duration: 1,
      delay: delayValue,
      x: 20,
      autoAlpha: 0,
      stagger: staggerAmount,
      scrollTrigger: { trigger: element, start: "top 85%" },
      });
    });
    }
  
    if ($('.text-anime-style-2').length) {
    let	 staggerAmount 		= 0.05,
     translateXValue	= 20,
     delayValue 		= 0.5,
     easeType 			= "power2.out",
     animatedTextElements = document.querySelectorAll('.text-anime-style-2');
  
    animatedTextElements.forEach((element) => {
    let animationSplitText = new SplitText(element, { type: "chars, words" });
      gsap.from(animationSplitText.chars, {
        duration: 1,
        delay: delayValue,
        x: translateXValue,
        autoAlpha: 0,
        stagger: staggerAmount,
        ease: easeType,
        scrollTrigger: { trigger: element, start: "top 85%"},
      });
    });
    }
  
    if ($('.text-anime-style-3').length) {
    let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');
  
    animatedTextElements.forEach((element) => {
    //Reset if needed
    if (element.animation) {
      element.animation.progress(1).kill();
      element.split.revert();
    }
  
    element.split = new SplitText(element, {
      type: "lines,words,chars",
      linesClass: "split-line",
    });
    gsap.set(element, { perspective: 400 });
  
    gsap.set(element.split.chars, {
      opacity: 0,
      x: "50",
    });
  
    element.animation = gsap.to(element.split.chars, {
      scrollTrigger: { trigger: element,	start: "top 90%" },
      x: "0",
      y: "0",
      rotateX: "0",
      opacity: 1,
      duration: 1,
      ease: Back.easeOut,
      stagger: 0.02,
    });
    });
    }
  
    if($('.reveal').length){gsap.registerPlugin(ScrollTrigger);let revealContainers=document.querySelectorAll(".reveal");revealContainers.forEach((container)=>{let image=container.querySelector("img");let tl=gsap.timeline({scrollTrigger:{trigger:container,toggleActions:"play none none none"}});tl.set(container,{autoAlpha:1});tl.from(container,1.5,{xPercent:-100,ease:Power2.out});tl.from(image,1.5,{xPercent:100,scale:1.3,delay:-1.5,ease:Power2.out});});}
    
    //========== PROGRESS BAR AREA ============= //
    function animateElements() {
      $('.progressbar').each(function () {
        var elementPos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        var percent = $(this).find('.circle').attr('data-percent');
        var percentage = parseInt(percent, 10) / parseInt(100, 10);
        var animate = $(this).data('animate');
        if (elementPos < topOfWindow + $(window).height() - 10 && !animate) {
          $(this).data('animate', true);
          $(this).find('.circle').circleProgress({
            startAngle: -Math.PI / 2,
            value: percent / 100,
            size: 80,
            thickness: 5,
            emptyFill: "#2B2D2E",
            fill: {
              color: '#CEF12B'
            }
          }).on('circle-animation-progress', function (event, progress, stepValue) {
            $(this).find('div').text((stepValue*100).toFixed() + "%");
          }).stop();
        }
      });
    }
    
    // Show animated elements
    animateElements();
    $(window).scroll(animateElements);

    const listItems = document.querySelectorAll('.list-container li');
    const images = document.querySelectorAll('.image-container .image');
    listItems.forEach(item => {
        item.addEventListener('mouseover', () => {
            const targetImageId = item.getAttribute('data-image');
            images.forEach(div => {
                div.classList.remove('active');
                if (div.id === targetImageId) {
                    div.classList.add('active');
                }
            });
        });
    });

    
// UPDATE: I was able to get this working again... Enjoy!
var cursor = document.querySelector('.procus-cursor');
var cursorinner = document.querySelector('.procus-cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
})

// SWIPER SLIDER //
document.addEventListener("DOMContentLoaded", function () {
  var swiper3 = new Swiper(".swiper-thumb2", {
    spaceBetween: 10,
    slidesPerView: 6,
    freeMode: true,
    watchSlidesProgress: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
  var swiper4 = new Swiper(".swiper-testimonial-2", {
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    thumbs: {
      swiper: swiper3,
    },
  });
});
