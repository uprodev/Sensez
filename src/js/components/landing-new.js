jQuery(document).ready(function ($) {
  if (window.visualViewport.height < 800) {
    $(".page-wrapper").addClass("less-height");
  }
  $(window).on("resize", function () {
    if (window.visualViewport.height < 800) {
      $(".page-wrapper").addClass("less-height");
    } else {
      $(".page-wrapper").removeClass("less-height");
    }
  });

  // screen 03
  ScrollTrigger.matchMedia({
    "(min-width: 1024px)": function () {
      var scrollers = document.querySelectorAll(".screen-headlines li");
      scrollers.forEach((li, i) => {
        gsap.to(li.querySelector("h2"), {
          scrollTrigger: {
            scroller: ".screen-03 .container",
            trigger: li,
            start: "center bottom",
            end: "center 50%",
            toggleActions: "play resume resume resume",
            scrub: true,
          },
          opacity: 1,
        });

        var img = li.dataset.image;
        gsap.to(document.getElementById(img), {
          scrollTrigger: {
            scroller: ".screen-03 .container",
            trigger: li,
            start: "center bottom",
            end: "bottom -150vh",
            toggleActions: "play resume resume resume",
            scrub: true,
          },
          y: "-100%",
          opacity: 1,
        });
      });
    },
  });

  new fullpage("#fullpage", {
    scrollOverflow: true,
    scrollingSpeed: 500,
    fitToSectionDelay: false,
    verticalCentered: true,
    responsiveWidth: 769,
    onLeave: function (origin, destination, direction, trigger) {
      // screen 03
      if (destination.index === 2 && direction === "down") {
        gsap.to(".landing-03 .item", {
          duration: 0.5,
          delay: 2,
          scale: 1,
          opacity: 1,
          stagger: 0.2,
          ease: "none",
        });
      }

      // screen 08
      if (destination.index === 7 && direction === "down") {
        gsap.to(".landing-08 .bg", {
          duration: 2,
          width: "120%",
          height: "120%",
          borderRadius: 0,
          delay: 0.5,
        });
      }
    },
  });

  var tl = gsap.timeline({
    repeat: -1,
  });
  tl.to(".landing-09 h2 span", {
    y: "100%",
    duration: 0.01,
  })
    .to(".landing-09 h2 span:first-child", {
      duration: 0.5,
      y: 0,
    })
    .to(
      ".landing-09 h2 span:first-child",
      {
        duration: 0.5,
        y: "-100%",
      },
      "+=1"
    )
    .to(".landing-09 h2 span:nth-child(2)", {
      duration: 0.5,
      y: 0,
    })
    .to(
      ".landing-09 h2 span:nth-child(2)",
      {
        duration: 0.5,
        y: "-100%",
      },
      "+=1"
    )
    .to(".landing-09 h2 span:nth-child(3)", {
      duration: 0.5,
      y: 0,
    })
    .to(
      ".landing-09 h2 span:nth-child(3)",
      {
        duration: 0.5,
        y: "-100%",
      },
      "+=1"
    );

  // swiper
  if ($(".testimonials-swiper").length) {
    const swiper = new Swiper(".testimonials-swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 50,
      observer: true,
      observeParents: true,
      navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
      },
      on: {
        init: function () {
          ScrollTrigger.refresh();
        },
      },
    });
  }

  imagesLoaded("body", function () {
    ScrollTrigger.refresh();
  });
});
