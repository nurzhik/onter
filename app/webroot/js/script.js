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

  $('.theme_slider').slick({
    autoplay: false,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    speed: 1000,
    slidesToShow: 6,
    slidesToScroll: 2,
    prevArrow: '<button type="button" class="slick_arrow slick_prev"></button>',
    nextArrow: '<button type="button" class="slick_arrow slick_next"></button>',
    responsive:[{
      breakpoint: 1201,
      settings: {
        slidesToShow: 5,
      }
    },
    {
      breakpoint: 1101,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 781,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 681,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 410,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }]
  });

  $('.comment_text_slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: true,
    appendArrows: $('.comment_arrows'),
    dots: true,
    appendDots: $('.comment_control'),
    dotsClass: 'comment_dots',
    pauseOnHover: true,
    pauseOnFocus: true,
    adaptiveHeight: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick_arrow slick_prev"></button>',
    nextArrow: '<button type="button" class="slick_arrow slick_next"></button>',
    // asNavFor: '.comment_img_slider',
  });

  // $('.comment_img_slider').slick({
  //   autoplay: false,
  //   arrows: false,
  //   dots: false,
  //   fade: true,
  //   speed: 1000,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   asNavFor: '.comment_text_slider',
  // });

  if( $('.search_res').hasClass('search_res') ){
    searchInfo();
  }

  $('.pacient_video_btn ').on("click", function(){
    $('#set_date').datetimepicker({
        timepicker:false,
        format:'d.m.Y',
        formatDate:'d.m.Y',
        yearStart: 2020,
        yearEnd: 2025,
        dayOfWeekStart: 1,
        todayButton: false,
        closeOnWithoutClick: false,
        closeOnDateSelect: true,
        validateOnBlur: true,
    });

    $('#set_time').datetimepicker({
        timepicker: true,
        datepicker:false,
        minTime: '08:00',
        maxTime: '21:00',
        yearStart: 2020,
        yearEnd: 2025,
        dayOfWeekStart: 1,
        format: 'H:i',
        todayButton: false,
        closeOnWithoutClick: false,
        closeOnDateSelect: true,
        validateOnBlur: true
    });

    $.datetimepicker.setLocale('ru');
  });

  if( $('#reg_date') != undefined ){
    $('#reg_date').datetimepicker({
        timepicker:false,
        format:'d.m.Y',
        formatDate:'d.m.Y',
        yearStart: 2020,
        yearEnd: 2025,
        dayOfWeekStart: 1,
        todayButton: false,
        closeOnWithoutClick: false,
        closeOnDateSelect: true,
        validateOnBlur: true,
    });
    $.datetimepicker.setLocale('ru');
  }

  // if( $('#set_consultation') != undefined ){
  //   console.log("true");

  //   $('#set_date').datetimepicker({
  //       timepicker:false,
  //       format:'d.m.Y',
  //       formatDate:'d.m.Y',
  //       yearStart: 2020,
  //       yearEnd: 2025,
  //       dayOfWeekStart: 1,
  //       todayButton: false,
  //       closeOnWithoutClick: false,
  //       closeOnDateSelect: true,
  //       validateOnBlur: true,
  //   });

  //   $('#set_time').datetimepicker({
  //       timepicker: true,
  //       datepicker:false,
  //       minTime: '08:00',
  //       maxTime: '21:00',
  //       yearStart: 2020,
  //       yearEnd: 2025,
  //       dayOfWeekStart: 1,
  //       format: 'H:i',
  //       todayButton: false,
  //       closeOnWithoutClick: false,
  //       closeOnDateSelect: true,
  //       validateOnBlur: true
  //   });

  //   $.datetimepicker.setLocale('ru');
  // }

  $.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };

  $('input[type="tel"]').click(function(){
    $(this).setCursorPosition(3);
  }).mask("+7 (999) 999 99 99");

  $('.way').waypoint({
    handler: function() {
    $(this.element).addClass("way--active");
    },
    offset: '90%'
  });
 
});  

$(window).on("scroll", function(){
  var top = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
  if( top > 50 ){
    $('.header_top').addClass('scroll');
  } else{
    $('.header_top').removeClass('scroll');
  }
});


$(document).on("click", function(event){
  var target = event.target;

  // if( !$(target).hasClass('lang_choice') ){
  //   $('.other_lang').slideUp();
  //   $('.lang_block').removeClass('active');
  // }

  // if( !$(target).hasClass('mob_menu') && !$(target).hasClass('menu_btn') && !$(target).hasClass('menu_btn_span') && !$(target).hasClass('menu_link') ){
  //   $('.mob_menu').removeClass('active');
  //   $('.under_nav').slideUp(700);
  // }
});

$('.lang_choice').on("click", function(){
  $(this).siblings('.other_lang').slideToggle();
  $(this).parent('.lang_block').toggleClass('active');
});

$(window).resize(function(){
  mobMenu();
  loginBtn();

  if( $('.search_res').hasClass('search_res') ){
    searchInfo();
  }
});

// Menu

function mobMenu(){
  if( $('.mob_menu').css("display") == 'block' ){
    $('.header_top .container .menu').prependTo('.under_nav');
    // $('.sub_menu').hide();
  } else{
    $('.under_nav .menu').prependTo('.header_top .container');
    $('.header_top .container .logo_block').prependTo('.header_top .container');
    // $('.sub_menu').show();
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

// $('.under_nav').on("click", function(event){
//   var target = event.target;
//   if( $(target).hasClass('menu_link') ){
//     if( $(target).hasClass('active') && $(target).siblings('.sub_menu').css("display") == 'none' ){
//       $(target).siblings('.sub_menu').slideDown(600);
//     } else if( $(target).hasClass('active') ){
//       $(target).removeClass('active');
//       $(target).siblings('.sub_menu').slideUp(600);
//     } else{
//       $(target).addClass('active');
//       $(target).siblings('.sub_menu').slideDown(600);
//     }
//   }

//   if( $(target).hasClass('sub_link') ){
//      $(target).siblings('.sub_menu').slideToggle(600);
//   }
// });

// Menu END

function loginBtn(){
  if( $('.header_top .container').width() < 600 ){
    $('.head_right .login_buttons').appendTo('.under_nav');
  } else{
    $('.under_nav .login_buttons').prependTo('.head_right');
  }
}

loginBtn();

// Page share links

var share_index = 0;

function shareLinks(){
  if( $('.ya-share2').hasClass('ya-share2') ){
    var fb, vk, tg, wp;

    vk = $('.ya-share2__list').find('.ya-share2__item_service_vkontakte').children('.ya-share2__link').attr('href');
    fb = $('.ya-share2__list').find('.ya-share2__item_service_facebook').children('.ya-share2__link').attr('href');
    tg = $('.ya-share2__list').find('.ya-share2__item_service_telegram').children('.ya-share2__link').attr('href');
    wp = $('.ya-share2__list').find('.ya-share2__item_service_whatsapp').children('.ya-share2__link').attr('href');

    if( wp != undefined ){
      $('.facebook_share').attr('href', fb);
      $('.vk_share').attr('href', vk);
      $('.telegram_share').attr('href', tg);
      $('.wp_share').attr('href', wp);
    } else{
      if( share_index < 10 ){
        setTimeout(shareLinks, 1000);
        share_index++;
      }
    }
  }
}
if( $('.page_share').hasClass('page_share') ){
  shareLinks();
}

// Page share links END

// Search Info

$('.res_more').on("click", function(){
  if( $('.header_top .container').width() > 700 ){
    var index = $(this).parent().index();
    $('.search_info').children('.search_info_item.active').removeClass('active');
    $('.search_info').children('.search_info_item').eq(index).addClass('active');
    $('.search_info').height( $('.search_info_item.active').outerHeight() + 10 );

    if( $(this).hasClass('active') ){
      $('.search_res_list, .search_info').removeClass('active');
      $(this).removeClass('active');
      // $('.search_info').css("height", 0);
      $('.search_info').height( 0 );
    } else{
      $('.res_more.active').removeClass('active');
      $('.search_res_list, .search_info').addClass('active');
      $(this).addClass('active');
    }
  } else{
    if( $(this).hasClass('active') ){
      $(this).removeClass('active');
      $(this).parent('.res_item').removeClass('active');
      $(this).siblings('.search_info_item').slideUp(700);
    } else{
      $(this).addClass('active');
      $(this).parent('.res_item').addClass('active');
      $(this).siblings('.search_info_item').slideDown(700);
    }
  }
});


function searchInfo(){
  var info_block = $('.search_info').children('.search_info_item');
  var res_item = $('.search_res_list').children('.res_item');

  if( $('.header_top .container').width() < 800 ){
    for( i=0; i<res_item.length; i++ ){
      $(info_block[i]).appendTo( $(res_item).eq(i) ).hide();
    }
    $('.search_res_list, .search_info').removeClass('active');
  } else{
    for( i=0; i<res_item.length; i++ ){
      $(res_item[i]).find('.search_info_item').appendTo( $('.search_info') ).show();
    }
  }
}

// Search Info END


// Login script

$('.pass_eye').on("click", function(){
  if( $(this).hasClass('active') ){
    $(this).removeClass('active');
    $(this).siblings('input').attr('type', 'password');
  } else{
    $(this).addClass('active');
    $(this).siblings('input').attr('type', 'text');
  }
});

// Login script END


// FAQ

$('.faq_question').on("click", function(){
  if( $(this).hasClass('active') ){
    $(this).removeClass('active');
    $(this).siblings('.faq_answer').slideUp(800);
  } else{
    $(this).addClass('active');
    $(this).siblings('.faq_answer').slideDown(800);
  }
});

// FAQ END

// Doc Register file input

$('.donwload_file').on("mouseleave", function(){
  var input_val = $('#doc_file').val();
  if( input_val != '' ){
    input_val = input_val.slice(12);
    $('.download_file_text').text(input_val);
  } else{
    $('.download_file_text').text( $('.download_file_text').attr('data-text') );
  }
});

// Doc Register file input END

// Profile img file

$('.profile_img_label').on("mouseleave", function(){
  var input_val = $('#profile_img_file').val();
  if( input_val != '' ){
    input_val = input_val.slice(12);
    $('.profile_img_name').text(input_val);
  } else{
    $('.profile_img_name').text('');
  }
});

// Profile img file END

// Doctor Rating Stars

$('.rating_item').on("mouseover", function(){
  $(this).addClass('active').prevAll().addClass('active');
  $(this).nextAll().removeClass('active');
});

$('.rating_item').on("click", function(){
  var id_num = $(this).attr('data-id');
  console.log( id_num );
  $('#doc_rating').val( id_num );
  $('#doc_rating').attr( 'value', id_num );

  $('#rating_consultation').addClass('active');
  $('.const_rating_block').hide();
  $('.const_thankyou').show();
});

// Doctor Rating Stars END