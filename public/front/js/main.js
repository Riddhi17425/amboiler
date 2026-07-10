// header
// window.addEventListener("scroll", function () {
//   const header = document.querySelector(".header");
//   if (window.scrollY > 0) {
//     header.classList.add("scrolled");
//   } else {
//     header.classList.remove("scrolled");
//   }
// });
let lastScrollTop = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', function () {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > 100) {
    header.classList.add('sticky'); // Make sticky after 100px
    if (currentScroll > lastScrollTop) {
      // Scrolling down
      header.classList.add('hide');
    } else {
      // Scrolling up
      header.classList.remove('hide');
    }
  } else {
    // Before 100px scroll
    header.classList.remove('sticky', 'hide');
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});


// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {

  $('.hero_slider').slick({
    fade: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
     pauseOnHover: false,   // ðŸ‘ˆ mouse enter par stop NA ho
  pauseOnFocus: false,   // ðŸ‘ˆ focus (click/tab) par bhi stop NA ho
    responsive: [
      {
        breakpoint: 576,
        settings: {
          arrows: false,
        }
      }
    ]
  });

  // Custom Navigation
  $('.prev').click(function () {
    $('.hero_slider').slick('slickPrev');
  });

  $('.next').click(function () {
    $('.hero_slider').slick('slickNext');
  });

  $('.hero_slider').on('beforeChange', function () {
    // Remove the direct pseudo-element manipulation
    $('.slick-dots li').removeClass('progress-active');
    // Add the class to the first dot to restart animation
    $('.slick-dots li.slick-active').addClass('progress-active');
  });

  // process slider
  $('.processslider').slick({
    dots: false,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500,
    infinite: true,
    speed: 2000,
    fade: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          dots: false,
        }
      }
    ]
  });

  // indus slider
  // $('.home_inds_slider').slick({
  //   infinite: true,
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   // centerMode:true,
  //   autoplaySpeed: 4000,
  //   dots: true,
  //   arrows: false,
  //   responsive: [
  //     {
  //       breakpoint: 1024,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 1,
  //       }
  //     },
  //     {
  //       breakpoint: 576,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //       }
  //     },
  //   ]
  // });

  // servcice slider
 //   $('.service_slider').slick({
//     infinite: true,
//     slidesToShow: 3,
//     slidesToScroll: 3,
//     autoplay: true,
//     autoplaySpeed: 4000,
//     dots: true,
//     arrows: false,
//     responsive: [
//       {
//         breakpoint: 1024,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 1,
          
//         }
//       },
//       {
//         breakpoint: 576,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           dots: false,
//           arrows: true,
//         }
//       },
//     ]
//   });


$(document).ready(function () {
  var slideCount = $('.service_slider .service_slide').length;

  $('.service_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    responsive: [
        {
            breakpoint: 1921,
            settings:{
               dots: slideCount > 3 ? true : false, 
            }
        },
        
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots:true
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: true
        }
      }
    ]
  });
});



  // test slider
  $('.test_msg_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    autoplay: false,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    pauseOnFocus: false,
    asNavFor: '.test_face_slider',
    responsive: [
      {
        breakpoint: 576,
        settings: {
          arrows: false,
          dots: true
        }
      }
    ]

  });
  $('.test_face_slider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    infinte: true,
    arrows: false,
    loop: true,
    asNavFor: '.test_msg_slider',
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
  // test slider


  // search box
  $('.search-btn').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('open');
    $('.search-box__dropdown').toggleClass('open');
  });

  // Prevent hiding when clicking inside the search input
  $('.search-box__dropdown').on('click', function (e) {
    e.stopPropagation(); // Prevent event bubbling
  });

  // Hide dropdown when clicking outside
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.search-box').length) {
      $('.search-box__dropdown').removeClass('open');
      $('.search-btn').removeClass('open');
    }
  });

});

// cetificate qm slider
$('.certificate_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  infinte: true,
  loop: true,
  arrows: true,
});
// network slider
$('.network_slider').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  infinite: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1200, // screens < 1200px
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 992, // screens < 992px
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768, // screens < 768px
      settings: {
        slidesToShow: 2,
        arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 576, // screens < 576px
      settings: {
        slidesToShow: 1,
        arrows: false,
        dots: true
      }
    }
  ]
});


// category select js
$(document).ready(function () {
  $("#categoryFilter").change(function () {
    var selectedCategory = $(this).val(); // Jo category select hui
    $(".category-item .row").hide(); // Pehle sabko hide kar do

    if (selectedCategory === "all") {
      $(".category-item .row").show(); // Agar "Show All" select hai, toh sab wapas show ho
    } else {
      $("#" + selectedCategory).show(); // Sirf selected category ka section show ho
    }
  });
});

// project


const slider = $('.project_slider');

$('#exampleModal').on('shown.bs.modal', () => {
  if (!slider.hasClass('slick-initialized')) {
    slider.slick({ slidesToShow: 1, dots: true, arrows: false });
  }
}).on('hidden.bs.modal', () => {
  if (slider.hasClass('slick-initialized')) slider.slick('unslick');
});

slider.on('click', '.slick-dots li', e => e.preventDefault());


// 
$('.boiler_slider').slick({
  centerMode: true,
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 4000,
  dots: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        autoplay: true,
        centerMode: false,
      }
    }
  ]
});

$('#boiler-next').on('click', function () {
  $('.boiler_slider').slick('slickNext');
});


$('#boiler-prev').on('click', function () {
  $('.boiler_slider').slick('slickPrev');
});


$('.linkedin_slider').slick({
  centerMode: false,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 4000,
  dots: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        autoplay: true,
        centerMode: false,
      }
    }
  ]
});

$('.linkedin-next').on('click', function () {
  $('.linkedin_slider').slick('slickNext');
});


$('.linkedin-prev').on('click', function () {
  $('.linkedin_slider').slick('slickPrev');
});

// ----------------------------------------------------------------


    function mousecursor() {
      const inner = document.querySelector(".cursor-inner"),
            outer = document.querySelector(".cursor-outer");
      let mouseX = 0, mouseY = 0, isHover = false;

      window.addEventListener("mousemove", e => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        outer.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
        inner.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
      });

      $("body").on("mouseenter", "a, .cursor-pointer", function() {
        inner.classList.add("cursor-hover");
        outer.classList.add("cursor-hover");
      });

      $("body").on("mouseleave", "a, .cursor-pointer", function() {
        inner.classList.remove("cursor-hover");
        outer.classList.remove("cursor-hover");
      });

      inner.style.visibility = "visible";
      outer.style.visibility = "visible";
    }

    mousecursor();
    
    // -----------------------------------
    
const scrollBtn = document.getElementById('scrollTopBtn');
const circle = scrollBtn.querySelector('.progress-ring');

const radius = circle.r.baseVal.value; // 🔥 auto detect radius
const circumference = 2 * Math.PI * radius;

circle.style.strokeDasharray = circumference;
circle.style.strokeDashoffset = circumference;

window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const docHeight =
    document.documentElement.scrollHeight - window.innerHeight;

  const scrollPercent = scrollTop / docHeight;
  const offset = circumference - scrollPercent * circumference;

  circle.style.strokeDashoffset = offset;

  if (scrollTop > 200) {
    scrollBtn.style.opacity = '1';
    scrollBtn.style.pointerEvents = 'auto';
  } else {
    scrollBtn.style.opacity = '0';
    scrollBtn.style.pointerEvents = 'none';
  }
});

scrollBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

    
    // -------------------------------
    
    // When page fully loads, hide loader
    window.addEventListener("load", function() {
      const loader = document.getElementById("loader");
      loader.classList.add("hide");
    });



    // -----------------------------------------header



        // Next level navigation
    document.querySelectorAll('.next-menu').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const target = link.getAttribute('data-target');
        document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
        document.getElementById(target).classList.add('active');
      });
    });

    // Back navigation
    document.querySelectorAll('.back-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const backTarget = btn.getAttribute('data-back');
        document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
        document.getElementById(backTarget).classList.add('active');
      });
    });


    // ----------------------------------------
$(document).ready(function () {
  const slideCount = $(".service_new_lt_tabs .service_slide_new").length;

  $(".service_new_lt_tabs").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
     pauseOnHover: false,   // ðŸ‘ˆ mouse enter par stop NA ho
  pauseOnFocus: false,   // ðŸ‘ˆ focus (click/tab) par bhi stop NA ho
    dots: slideCount > 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: { slidesToShow: 2, slidesToScroll: 1, dots: true },
      },
      {
        breakpoint: 576,
        settings: { slidesToShow: 2, slidesToScroll: 1, dots: false },
      },
    ],
  });

  // âœ… Click on slide - update image + title + desc only
  $(document).on("click", ".service_slide_new", function () {
    updateActiveSlide($(this));
  });

  // âœ… Update when slider auto-changes
  $(".service_new_lt_tabs").on("afterChange", function (event, slick, currentSlide) {
    const $current = $(slick.$slides[currentSlide]).find(".service_slide_new");
    updateActiveSlide($current);
  });

  // âœ… Update only right side image + text (no background change)
  function updateActiveSlide($slide) {
    $(".service_slide_new").removeClass("active");
    $slide.addClass("active");

    const img = $slide.data("img");
    const title = $slide.data("title");
    const desc = $slide.data("desc");

    $("#serviceImage").attr("src", img);
    $("#serviceTitle").text(title);
    $("#serviceDesc").text(desc);
  }

  // âœ… Initialize first slide on load
  const $first = $(".service_new_lt_tabs .service_slide_new.active");
  updateActiveSlide($first);
});
