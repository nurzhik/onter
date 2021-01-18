$(document).ready(function(){
	// begin burger menu
  $('.mob-start').on('click', function () {
        if($('.mob-start').hasClass('mob-start--active')){
            $('.mob-start').removeClass('mob-start--active');
            $('.menu').removeClass('menu--active');
        }else{
            $('.mob-start').addClass('mob-start--active');
            $('.menu').addClass('menu--active');
        }                           
  });
  // end burger menu

  // begin закрытия окна уведомления
  $(document).click(function(event) { 
      if(!$(event.target).closest('.message').length) { 
        if($('.alert').hasClass('alert--active')){
            $('.alert').removeClass('alert--active');
        }
      }  
  });
  $('.my-alert__close').click(function(event) {
      $('.alert').removeClass('alert--active');
  });   
  // end закрытия окна уведомления

  $('.main_text_slider').slick({
    autoplay: false,
    arrows: false,
    dots: false,
    fade: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    // appendDots: $('.bank_gal_control'),
    // appendArrows: $('.bank_gal_control'),
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.main_img_silder',
    // prevArrow: '<button type="button" class="slick_arrow slick_prev"></button>',
    // nextArrow: '<button type="button" class="slick_arrow slick_next"></button>',
    // responsive:[{
    //   breakpoint: 800,
    //   settings:{
    //     slidesToShow: 2,
    //   }
    // },
    // {
    //   breakpoint: 500,
    //   settings:{
    //     slidesToShow: 1,
    //   }
    // }]
  });

  $('.main_img_silder').slick({
    autoplay: false,
    arrows: false,
    dots: true,
    dotsClass: 'main_dots',
    appendDots: $('.main_img_dots'),
    pauseOnHover: false,
    pauseOnFocus: false,
    fade: true,
    speed: 50,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.main_text_slider',
  });

  mainSlider();
 
});  


$(document).on("click", function(event){
  var target = event.target;

  if( !$(target).hasClass('lang_choice') && !$(target).hasClass('lang_icon') && !$(target).hasClass('lang_choice_name') ){
    $('.other_lang').slideUp();
    $('.lang_block').removeClass('active');
  }

  // if( !$(target).hasClass('mob_menu') && !$(target).hasClass('menu_btn') && !$(target).hasClass('menu_btn_span') && !$(target).hasClass('menu_link') ){
  //   $('.mob_menu').removeClass('active');
  //   $('.under_nav').slideUp(700);
  // }

  // if( !$(target).hasClass('lang_block') && !$(target).hasClass('lang_choice') && !$(target).hasClass('lang') ){
  //   $('.lang_block').removeClass('active');
  //   $('.other_lang').slideUp(700);
  // }

  // if( !$(target).hasClass('search_input') && !$(target).hasClass('search_input') && !$(target).hasClass('search_btn') && !$(target).hasClass('search_show') ){
  //   $('.search_block, .search_show').removeClass('active');
  // }
});

$('.lang_choice').on("click", function(){
  $(this).siblings('.other_lang').slideToggle();
  $(this).parent('.lang_block').toggleClass('active');
});


$(window).resize(function(){
  mobMenu();
});

function mobMenu(){
  if( $('.mob_menu').css("display") == 'block' ){
    $('.header_top .menu').prependTo('.under_nav');
    $('.sub_menu').hide();
  } else{
    $('.under_nav .menu').prependTo('.header_top .container');
    $('.header_top .container .logo').prependTo('.header_top .container');
    $('.sub_menu').show();
  }
}

mobMenu();

$('.mob_menu').on("click", function(){
  if( $(this).hasClass('active') ){
    $(this).removeClass('active');
    $('.under_nav').slideUp(700);
  } else{
    $(this).addClass('active');
    $('.under_nav').slideDown(700);
  }
});

$('.under_nav').on("click", function(event){
  var target = event.target;
  if( $(target).hasClass('menu_link') ){
    if( $(target).hasClass('active') && $(target).siblings('.sub_menu').css("display") == 'none' ){
      $(target).siblings('.sub_menu').slideDown(600);
    } else if( $(target).hasClass('active') ){
      $(target).removeClass('active');
      $(target).siblings('.sub_menu').slideUp(600);
    } else{
      $(target).addClass('active');
      $(target).siblings('.sub_menu').slideDown(600);
    }
  }

  if( $(target).hasClass('sub_link') ){
     $(target).siblings('.sub_menu').slideToggle(600);
  }
});


// Main Dots

function mainDot(){
  var dots_len = $('.main_dots').children('li');
  
  for( i=0; i<dots_len.length; i++ ){
    // $(dots_len[i]).children('button').addClass('dot_' + (i + 1));
    $(dots_len[i]).addClass('dot_' + (i + 1));
    $(dots_len[i]).append('<div class="main_dot_num">0' + (i + 1) + '</div>');
  }
}

$(document).ready(function(){
  if( $('.main_dots').hasClass('main_dots') ){
    mainDot();
  }
});


// Main Dots END

// Main IMG Slider


$('.main_img_silder').on('afterChange', function(event, slick, currentSlide, nextSlide){
  $('.main_img_silder').find('.slick-current').removeClass('prev');
  $('.main_img_silder').find('.slick-current').removeClass('next');

  $('.main_img_silder').find('.slick-current').prev('.slick-slide').prev('.slick-slide').addClass('prev');
  $('.main_img_silder').find('.slick-current').prev('.slick-slide').addClass('prev');
  $('.main_img_silder').find('.slick-current').next('.slick-slide').addClass('next');
  $('.main_img_silder').find('.slick-current').next('.slick-slide').next('.slick-slide').addClass('next');
});

function mainSlider(){
  $('.main_img_silder').find('.slick-current').next('.slick-slide').addClass('next');
}

