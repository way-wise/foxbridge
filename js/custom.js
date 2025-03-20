const list = document.querySelectorAll('.list');

function accordion(e){
    e.stopPropagation(); 
    if(this.classList.contains('active')){
        this.classList.remove('active');
    }
    else if(this.parentElement.parentElement.classList.contains('active')){
        this.classList.add('active');
    }
    else{
        for(i=0; i < list.length; i++){
          list[i].classList.remove('active');
        }
            this.classList.add('active');
        }
}
for(i = 0; i < list.length; i++ ){
    list[i].addEventListener('click', accordion);
}



(function ($) {
  
  "use strict";

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();
})(jQuery);

// jQuery('.preloader').fadeIn();

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 50) {
    jQuery("header").addClass("sticky_menu");
  } else {
    jQuery("header").removeClass("sticky_menu");
  }
});

jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#backToTop").fadeIn("slow");
    } else {
      $("#backToTop").fadeOut("slow");
    }
  });
  $("#backToTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

jQuery(function () {
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });

  if(document.querySelector(".popover-dismiss")){
  var popover = new bootstrap.Popover(
    document.querySelector(".popover-dismiss"),
    {
      trigger: "focus",
    }
  );

}
});

jQuery(function () {
  var $loader = jQuery(".preloader");
  setInterval(function () {
    $loader.fadeOut();
  }, 2000);
});

jQuery(function () {
  var $blinkText = jQuery(".dit1");
  setInterval(function () {
    $blinkText.toggleClass("blink");
  }, 100);
});
jQuery(function () {
  var $blinkText = jQuery(".dit2");
  setInterval(function () {
    $blinkText.toggleClass("blink");
  }, 200);
});
jQuery(function () {
  var $blinkText = jQuery(".dit3");
  setInterval(function () {
    $blinkText.toggleClass("blink");
  }, 300);
});

jQuery(".toggle_btn").click(function () {
  jQuery(".responsive").slideToggle();
});

var a = jQuery(".mobile").html();
var nav_l = jQuery(".2nd_nav_left").html();
var nav_r = jQuery(".2nd_nav_right").html();
jQuery(".responsive").html(a);
jQuery(".responsive").append(nav_l, nav_r);

var x = jQuery("header .logo a").html();
if (x == "") {
  jQuery("header .logo a").html("<h3>MUTA'AL</h3>");
} else {
  jQuery("header .logo a").html();
}

$(".cavasoff").click(function () {
  $(".cavasoff_menu").toggleClass("open_canvas");
});
$(".close_btn").click(function () {
  $(".cavasoff_menu").removeClass("open_canvas");
});

  $(document).on("click", function(event){
        var $trigger = $(".cavasoff");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".cavasoff_menu").removeClass('open_canvas');
        }            
    });

////////////////////////////////////////////////////////////////POPUP JS
jQuery(".closer").click(function () {
  jQuery(".paypopup").css("opacity", "0");
  jQuery(".paypopup").css("z-index", "-1");
  jQuery(".poppup_box").css("transform", "scale(0)");
  jQuery(".poppup_box").css("opacity", "0");
  jQuery(".poppup_box").css("pointer-events", "none");
});
jQuery("#search").click(function () {
  jQuery(".search").css("opacity", "1");
  jQuery(".search").css("z-index", "99999");
  jQuery(".search .poppup_box").css("transform", "scale(1)");
  jQuery(".search .poppup_box").css("opacity", "1");
  jQuery(".poppup_box").css("pointer-events", "all");
});
////////////////////////////////////////////////////////////////POPUP JS

$(document).ready(function () {
  $(".minus").click(function () {
    var $input = $(this).parent().find("input");
    var count = parseInt($input.val()) - 1;
    count = count < 0 ? 0 : count;
  
    $input.val(count);
    $input.change();
    return false;
  });
  $(".plus").click(function () {
    var $input = $(this).parent().find("input");
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });


$(".quantity").hide();
$(".restaurantpage .quantitycheck").click(function () {
  if ($(this).is(":checked")) {
    $(".quantity").show();
  } else {
    //$(".plusminus").val("1");

    $(".quantity").hide();
  }
});



$(".slider").owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  dots: false,
  autoplay: true,
  speed: 500,
  adaptiveHeight: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
$(".2_box_slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: true,
  speed: 300,
  adaptiveHeight: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});
$(".3_box_slider").owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  dots: false,
  autoplay: true,
  speed: 300,
  adaptiveHeight: true,
  responsive: {
    0: {
      items: 1,
    },
    800: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});
$(".4_box_slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: true,
  speed: 300,
  adaptiveHeight: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});
$(".5_box_slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  autoplay: true,
  speed: 300,
  adaptiveHeight: true,
  responsive: {
    0: {
      items: 1,
    },
    480: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});


});
jQuery(document).ready(function () {
  jQuery("div#Our-Gallery .inner .hover-wrap .hover-wrap-inner").prepend(
    '<div class="click-to-view"><div class="zoom-iicon"><i class="fa fa-eye" aria-hidden="true"></i></div>'
  );
  jQuery("div#Our-Gallery .click-to-view").click(function () {
    var a = jQuery(this).next().find("div#Our-Gallery .skip-lazy").attr("src");
    jQuery(".custom-gallery img").attr("src", a);
    jQuery(".custom-gallery").addClass("eneble");
  });
  jQuery(".custom-gallery").click(function () {
    jQuery(".custom-gallery").removeClass("eneble");
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

////////////////////////////////////////////////////////////////CheckoutTab
var currentTab = 0;
document.addEventListener("DOMContentLoaded", function (event) {
  showTab(currentTab);
});

function showTab(n) {
  var x = document.getElementsByClassName("tab");

  if(x[n] && x[n].style){
  x[n].style.display = "block";
  if (n == 0 && document.getElementById("prevBtn")) {
    document.getElementById("prevBtn").style.display = "none";
  } else if (document.getElementById("prevBtn")) {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1 && document.getElementById("nextBtn")) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else if (document.getElementById("nextBtn")) {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n);

}
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  //if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    // document.getElementById("regForm").submit();
    // return false;
    //alert("sdf");
    document.getElementById("nextprevious").style.display = "none";
    document.getElementById("all-steps").style.display = "none";
    document.getElementById("text-message").style.display = "block";
  }
  showTab(currentTab);
}

function validateForm() {
  var x,
    y,
    i,
    valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}
function fixStepIndicator(n) {

    if(document.getElementsByClassName("step")[0] ){
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
}

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}



$(document).ready(function() {
    //set initial state.

    var fileInput = $('.photo_upload');
    var maxSize = fileInput.data('max-size');
    $('#regForm').submit(function(e){
        if(fileInput.get(0).files.length){
            var fileSize = fileInput.get(0).files[0].size; // in bytes
            if(fileSize>maxSize){
                alert('Your photo must be less than 10 MB in size');
                return false;
            }else{
                // alert('file size is correct- '+fileSize+' bytes');
            }
        } 

    });

 
    $('.addon_checkbox').change(function () {

        var total_amount = parseFloat($('#total_amount').data('total'));
 

        if (this.checked) {
            total_amount += parseFloat($(this).data('price'));

            $('<li id="addon_' + $(this).data('name').replace(' ', '_') + '"   >' + $(this).data('name') + ' <span class="float-end">$' + parseFloat($(this).data('price')).toFixed(2) + '</span></li>').insertBefore("#list_item_taxes");


        }

        else {

            $('#addon_' + $(this).data('name').replace(' ', '_')).remove();

            total_amount = total_amount - parseFloat($(this).data('price'));

        }
        var total_taxes = ((total_amount / 100) * 13);



        $('#total_amount').text(addCommas((total_amount + total_taxes).toFixed(2)));
        $('#total_amount').data('total', (total_amount));
        $('#total_taxes').text((total_taxes).toFixed(2));


    });

     var current_date = new Date();
 $('#order_date').attr("value",current_date.getFullYear()+'-'+(current_date.getMonth()+1)+'-'+current_date.getDate());



});


function removeRestuarantBillingItem(item,price){


 
  var items_cost = parseFloat($('#items_total').text());
  var item_count = parseInt($('#item_count_'+item).val()) > 0 ? parseInt($('#item_count_'+item).val()) : 0 ;

  console.log('#item_count_'+item,item_count);
  if(item_count > 0){


  var new_cost = items_cost-(parseFloat(price)*item_count);
  
  console.log(    (new_cost/100)*13  );
  
  
  $('#items_total').text(new_cost.toFixed(2));
  $('#total_tax').text(parseFloat((new_cost/100)*13).toFixed(2));
  $('#bill_total').text(parseFloat((new_cost)+((new_cost/100)*13)).toFixed(2));
 
  }
  $('#item_'+item).remove();

  if(new_cost  == 0){
    $('#order_submit').attr('disabled',true);
  }
  else{
    $('#order_submit').attr('disabled',false);
  }

}


var additionalMenuOptions = [];
function changeAdditionalOption(checked,price,item){


  var items_cost = parseFloat($('#items_total').text());
  var item_count = parseInt($('#'+item).val()) > 0 ? parseInt($('#'+item).val()) : 1 ;

  console.log(checked,price,item,item_count);

  if(item_count > 0 && checked && price > 0){

    var new_cost = items_cost+ (parseFloat(price)*item_count);

    $('#items_total').text(new_cost.toFixed(2));
    $('#total_tax').text(parseFloat((new_cost/100)*13).toFixed(2));
    $('#bill_total').text(parseFloat((new_cost)+((new_cost/100)*13)).toFixed(2));

    additionalMenuOptions[item] = parseFloat(price);


    console.log(additionalMenuOptions);
  }

  else if(item_count > 0 && price == 0 && additionalMenuOptions[item] ){

    
    var new_cost = items_cost- (parseFloat(additionalMenuOptions[item])*item_count);

    $('#items_total').text(new_cost.toFixed(2));
    $('#total_tax').text(parseFloat((new_cost/100)*13).toFixed(2));
    $('#bill_total').text(parseFloat((new_cost)+((new_cost/100)*13)).toFixed(2));
    delete additionalMenuOptions[item];



  }



}
function addRestuarantBillingItem(item,price){


  var items_cost = parseFloat($('#items_total').text());
  var item_count = parseInt($('#item_count_'+item).val()) > 0 ? parseInt($('#item_count_'+item).val()) : 1 ;


  item_count++;

  var new_cost = items_cost+ (parseFloat(price));

console.log(item,item_count);



  
  console.log(    (new_cost/100)*13  );
  
  if(item_count > 0){
  
    if(additionalMenuOptions[item]  ){

      new_cost += parseFloat(additionalMenuOptions[item]);

      console.log('in here',parseFloat(additionalMenuOptions[item]));


    
    }


  $('#items_total').text(new_cost.toFixed(2));
  $('#total_tax').text(parseFloat((new_cost/100)*13).toFixed(2));
  $('#bill_total').text(parseFloat((new_cost)+((new_cost/100)*13)).toFixed(2));

  }

  if(new_cost  == 0){
    $('#order_submit').attr('disabled',true);
  }
  else{
    $('#order_submit').attr('disabled',false);
  }

}


function subtractRestuarantBillingItem(item,price){


  console.log(item);
  var items_cost = parseFloat($('#items_total').text());
  var item_count = parseInt($('#item_count_'+item).val()) > 0 ? parseInt($('#item_count_'+item).val()) : 0 ;


  console.log('#item_count_'+item,item_count);
  var new_cost = items_cost- (parseFloat(price));
  
  console.log(    (new_cost/100)*13  );

  
  
  if(item_count > 0){

    if(additionalMenuOptions[item]  ){

      new_cost -= parseFloat(additionalMenuOptions[item]);

  
    
    }
 

  $('#items_total').text(new_cost.toFixed(2));
  $('#total_tax').text(parseFloat((new_cost/100)*13).toFixed(2));
  $('#bill_total').text(parseFloat((new_cost)+((new_cost/100)*13)).toFixed(2));
  
  }

  if(new_cost  == 0){
    $('#order_submit').attr('disabled',true);
  }
  else{
    $('#order_submit').attr('disabled',false);
  }

}




(function() {

    var width = 320; // We will scale the photo width to this
    var height = 0; // This will be computed based on the input stream

    var streaming = false;

    var video = null;
    var canvas = null;
    var photo = null;
    var startbutton = null;

    function startup() {
        video = document.getElementById('video');
        canvas = document.getElementById('photo-canvas');
        photo = document.getElementById('photo');
        startbutton = document.getElementById('startbutton');
        //disabled for now
        if(navigator .mediaDevices && 1==2){
        navigator.mediaDevices.getUserMedia({
                video: true,
                audio: false
            })
            .then(function(stream) {
                video.srcObject = stream;
                video.play();
            })
            .catch(function(err) {
                console.log("An error occurred: " + err);
            });

        }

        if(video){
        video.addEventListener('canplay', function(ev) {
            if (!streaming) {
                height = video.videoHeight / (video.videoWidth / width);

                if (isNaN(height)) {
                    height = width / (4 / 3);
                }

                video.setAttribute('width', width);
                video.setAttribute('height', height);
                canvas.setAttribute('width', width);
                canvas.setAttribute('height', height);
                streaming = true;
            }
        }, false);

        startbutton.addEventListener('click', function(ev) {
            takepicture();
            ev.preventDefault();
        }, false);
        clearphoto();
    }


    }


    function clearphoto() {
        var context = canvas.getContext('2d');
        context.fillStyle = "#AAA";
        context.fillRect(0, 0, canvas.width, canvas.height);

        var data = canvas.toDataURL('image/png');
        photo.setAttribute('src', data);
    }





    function takepicture() {
        var context = canvas.getContext('2d');
        if (width && height) {
            canvas.width = width;
            canvas.height = height;
            context.drawImage(video, 0, 0, width, height);

            var data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        } else {
            clearphoto();
        }
    }





    window.addEventListener('load', startup, false);
})();





         if( typeof  $('.portfolio-item').isotope !== 'undefined'){
        $('.portfolio-item').isotope({
          	itemSelector: '.item',
         	layoutMode: 'masonry'
          });
         }
         $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
		 
		 
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');

          if( typeof  popup_btn.magnificPopup !== 'undefined'){
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });

        }
    

  $('.tee-search').click(function (){
  
    var redirectUrl = document.location.origin+'/tee-time?' ;
    

    var selectedDate = 'YYYY-MM-DD';


    $('.tee-date').each(function(i,obj){

if($(obj).val() != 'YYYY-MM-DD'){

  selectedDate = $(obj).val();
}
    });


    
    $('.tee-players').each(function(i,obj){

      if( parseInt($(obj).val()) > 0 ){
  
        redirectUrl+=`&players=${parseInt($(obj).val())}`;
      }
 });

    
 $('.tee-holes').each(function(i,obj){

 
  if( parseInt($(obj).val()) > 0 ){
  
    redirectUrl+=`&holes=${parseInt($(obj).val())}`;
  }
});


 


    if(selectedDate != 'YYYY-MM-DD'){
      redirectUrl+=`&date=${selectedDate}`;

  
     document.location.replace(redirectUrl);

    }

    
    console.log(redirectUrl);
    
    
    
    });
  });
  
  
  
  
  //Price Tabs
  
(function ($) {
  "use strict";

   
    collyshefra_pricingTabToggle();
    
})(window.jQuery);


        
function collyshefra_pricingTabToggle(){
    "use-scrict";

    // Variables
    var priceTabLink       = $('.price-toggle-wrap > a'),
        priceTabContent    = $('.pricing-tab-toggle-content');

    priceTabLink.on("click",function(){
        priceTabLink.removeClass('active');
        $(this).addClass('active');
        priceTabContent.removeClass('active');
        priceTabContent.eq($(this).index()).addClass("active animated fadeInUp");
    });
}


function calculateLeaguePackagePrice(){


  $('form').each((k,v)=>{


    var holes = 9;

    var packagePrice = 0;
    var rounds = 1;
    //calculate green fee
    // console.log(v);
    // select all checked radio buttons
    $(v).find('input[type="radio"]:checked').each((k1,v1)=>{
 

      var name =  $(v1).attr('name');


 
      if(name == 'holes'){
  
        holes = parseInt($(v1).val());
  
        // console.log(holes)
  
      }


      else if(name == 'rounds'){
        rounds = parseInt($(v1).val());


      }



      // console.log(name);


 
   

       // get the price
       var price = $(v1).data('price'+holes);
 
       if(name =='cart' && rounds > 1){

        price = (parseFloat(price)*(parseInt(rounds)));
          
      }

   
 
    if(price !=undefined && !isNaN(price)){


    packagePrice=parseFloat(packagePrice)+ parseFloat(price);
 
    $(v).find('.package-price').text('$'+packagePrice.toFixed(2));
    }
    

 
 
 
    });
 
  
 
  
 
    // console.log(v);
 
 })
 
}

//Price Tabs
jQuery(document).ready(function ($) {
var a = 0;
$(window).scroll(function () {

  if($("#counter-box").length > 0){
    var oTop = $("#counter-box").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-number");
            $({
                countNum: $this.text()
            }).animate(
                {
                    countNum: countTo
                },

                {
                    duration: 2000,
                    easing: "swing",
                    step: function () {
                        //$this.text(Math.ceil(this.countNum));
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    },
                    complete: function () {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                        //alert('finished');
                    }
                }
            );
        });
        a = 1;
    }
  }
});

});

