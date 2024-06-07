
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 100) {
    $("header").addClass("bg_header");
  } else {
    $("header").removeClass("bg_header");
  }
});


AOS.init({

  once: true

});

$('.slider-candel').slick({
  dots: true,
  infinite: false,
  speed: 300,
  arrows:false,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



$('.product-slider').owlCarousel({
  autoWidth: true,
  loop: true,
  margin: 20,
  dots: false,
  nav: true,
  navText: [
      // prevIcon,
      // nextIcon
      '<i class="fa-regular fa-arrow-left"></i>',
      '<i class="fa-regular fa-arrow-right"></i>'
      ],
  responsive: {
      0: {
          items: 1
      },
      600: {
          items: 3
      },
      1000: {
          items: 3
      }
  }
})
