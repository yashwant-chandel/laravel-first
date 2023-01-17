// TESTIMONIALS end here 
$('.testimonial-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  adaptiveHeight: true,
  asNavFor: '.slider-nav'
  });

$('.testimonial-nav-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.testimonial-slider',
  dots: false,
  focusOnSelect: true,
  arrows: true,
  responsive: [
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: false,
      dots: false,
      arrows: true
    }
  },
   {
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: false,
      dots: false,
      arrows: true
    }
  },
  ]
});

// Featured Books start here 
$('.slider-nav').slick({
  slidesToShow: 3,
  centerMode: true,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,

  centerMode: true,
  arrows: false,
  autoplay: false,
  focusOnSelect: true,
  responsive: [
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      infinite: false,
      arrows: false,
      dots: false
    }
  },
  ]
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav'
});

// Blogs start here 
$('.blog-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: false,
      arrows: true,
      dots: false
    }
  },
  {
    breakpoint: 991,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 791,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
    }
  },
  {
    breakpoint: 575,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
    }
  },
  {
    breakpoint: 375,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
    }
  }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });

// shop start here 
function showList(e) {
  var $gridCont = $(".grid-container");
  e.preventDefault();
  $gridCont.hasClass("list-view")
    ? $gridCont.removeClass("list-view")
    : $gridCont.addClass("list-view");
}
function gridList(e) {
  var $gridCont = $(".grid-container");
  e.preventDefault();
  $gridCont.removeClass("list-view");
}

$(document).on("click", ".btn-grid", gridList);
$(document).on("click", ".btn-list", showList);

