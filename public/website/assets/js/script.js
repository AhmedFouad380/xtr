
// swiper slider
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

//   show and hide elemnts (popular product)

$(document).ready(function () {
    $(".load-more").click(function () {
        $(".none-products").toggle();
    });
});

$('.load-more').click(function(){
    var $this = $(this);
    $this.toggleClass('load-more');
    if($this.hasClass('load-more')){
        $this.text('load-more');         
    } else {
        $this.text('Less');
        $this.addClass('less');
    }
});

// owl carousel
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    stagePadding: 50,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:8,
            nav:true,
            loop:false
        }
    }


});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})


//   counter inputs
$(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) + - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

$(".minus").click(function(){
    $(this).addClass("counter-active");
    $(".plus").removeClass("counter-active");
  });

  $(".plus").click(function(){
    $(this).addClass("counter-active");
    $(".minus").removeClass("counter-active");
  });

// show model

  $(".add-cart").click(function(){
    $(".show-me").show();
  });

  

 
  
 
  



