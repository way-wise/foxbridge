
// jQuery('.preloader').fadeIn();

jQuery(window).scroll(function(){
    if (jQuery(this).scrollTop() > 50) {
        
       jQuery('header').addClass('sticky_menu');
    } 
    else {
       jQuery('header').removeClass('sticky_menu');
    }
});

jQuery(document).ready(function($){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#backToTop').fadeIn('slow');
        } else {
            $('#backToTop').fadeOut('slow');
        }
    });
    $('#backToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});

jQuery(function() {
  var $loader = jQuery(".preloader");
  setInterval(function() {
    $loader.fadeOut();
  }, 2000);
});

jQuery(function() {
  var $blinkText = jQuery(".dit1");
  setInterval(function() {
    $blinkText.toggleClass("blink");
  }, 100);
});
jQuery(function() {
  var $blinkText = jQuery(".dit2");
  setInterval(function() {
    $blinkText.toggleClass("blink");
  }, 200);
});
jQuery(function() {
  var $blinkText = jQuery(".dit3");
  setInterval(function() {
    $blinkText.toggleClass("blink");
  }, 300);
});




jQuery('.toggle_btn').click(function(){
    jQuery('.responsive').slideToggle();
});

var a = jQuery('.mobile').html();
var nav_l = jQuery('.2nd_nav_left').html();
var nav_r = jQuery('.2nd_nav_right').html();
jQuery('.responsive').html(a);
jQuery('.responsive').append(nav_l,nav_r);

var x = jQuery("header .logo a").html();
if(x == ""){
    jQuery("header .logo a").html("<h3>MUTA'AL</h3>");
} else{
    jQuery("header .logo a").html();
}

$('.cavasoff').click(function(){
    $('.cavasoff_menu').toggleClass('open_canvas');
});
$('.close_btn').click(function(){
    $('.cavasoff_menu').removeClass('open_canvas');
});

////////////////////////////////////////////////////////////////POPUP JS  
jQuery('.closer').click(function(){
    jQuery('.paypopup').css('opacity','0');
    jQuery('.paypopup').css('z-index','-1');
    jQuery('.poppup_box').css('transform','scale(0)');
    jQuery('.poppup_box').css('opacity','0');
    jQuery('.poppup_box').css('pointer-events','none');
}); 
jQuery('#search').click(function(){
    jQuery('.search').css('opacity','1');
    jQuery('.search').css('z-index','99999');
    jQuery('.search .poppup_box').css('transform','scale(1)');
    jQuery('.search .poppup_box').css('opacity','1');
    jQuery('.poppup_box').css('pointer-events','all');
});
////////////////////////////////////////////////////////////////POPUP JS 


$('.slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    autoplay:true,
  speed: 500,
  adaptiveHeight: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.2_box_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay:true,
  speed: 300,
  adaptiveHeight: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});
$('.3_box_slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    autoplay:true,
  speed: 300,
  adaptiveHeight: true,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$('.4_box_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay:true,
  speed: 300,
  adaptiveHeight: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
$('.5_box_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay:true,
  speed: 300,
  adaptiveHeight: true,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:5
        }
    }
});








jQuery(document).ready(function(){
    jQuery('div#Our-Gallery .inner .hover-wrap .hover-wrap-inner').prepend('<div class="click-to-view"><div class="zoom-iicon"><i class="fa fa-eye" aria-hidden="true"></i></div>');
    jQuery('div#Our-Gallery .click-to-view').click(function(){
        var a = jQuery(this).next().find('div#Our-Gallery .skip-lazy').attr("src");
        jQuery('.custom-gallery img').attr('src', a);
        jQuery('.custom-gallery').addClass('eneble');
    }); 
    jQuery('.custom-gallery').click(function(){
        jQuery('.custom-gallery').removeClass('eneble');
    });
}); 







// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


