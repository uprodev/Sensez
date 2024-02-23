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

  const text91 = new SplitType(".landing-09 h2 span:first-child", { types: "words, chars" });
  const text92 = new SplitType(".landing-09 h2 span:nth-child(2)", { types: "words, chars" });
  const text93 = new SplitType(".landing-09 h2 span:nth-child(3", { types: "words, chars" });

  var tl9 = gsap.timeline({
    repeat: -1,
    paused: true,
  });
  tl9
    .to(text91.chars, {
      opacity: 1,
      duration: 0.2,
      stagger: 0.1,
    })
    .to(text91.chars, {
      opacity: 0,
      duration: 0.1,
    })
    .to(text92.chars, {
      opacity: 1,
      duration: 0.2,
      stagger: 0.1,
    })
    .to(text92.chars, {
      opacity: 0,
      duration: 0.1,
    })
    .to(text93.chars, {
      opacity: 1,
      duration: 0.2,
      stagger: 0.1,
    })
    .to(text93.chars, {
      opacity: 0,
      duration: 0.1,
    });

  // logo rotate
  $(".landing-logo").on("mousemove", (event) => {
    if (event.clientX < $(window).width() / 2) {
      console.log(event.clientX);
      $(".landing-01").get(0).style.setProperty("--logo1", "-20deg");
      $(".landing-01").get(0).style.setProperty("--logo2", "-15deg");
    } else {
      $(".landing-01").get(0).style.setProperty("--logo1", "20deg");
      $(".landing-01").get(0).style.setProperty("--logo2", "15deg");
    }
  });

  // screen 01
  gsap.to(".landing-01 .landing-logo", {
    opacity: 1,
    duration: 0.5,
    ease: "none",
    delay: 0.5,
  });
  gsap.to(".landing-01 h1, .landing-01 h2", {
    y: 0,
    yPercent: 0,
    opacity: 1,
    stagger: 0.5,
    duration: 0.5,
    ease: "none",
    delay: 1,
  });

  // screen 06, 07
  var cx = window.innerWidth / 2;
  var cy = window.innerHeight / 2;

  document.querySelector(".landing-06 .col-image").addEventListener("mousemove", function (event) {
    dx = event.pageX / -cx;
    dy = event.pageY / -cy;
    gsap.to(".landing-06 .col-image .img-rounded,.landing-06 .col-image .image-outline, .landing-06 .el", {
      x: dx * 5,
      y: dy * 5,
      duration: 0.1,
      ease: "none",
    });
  });

  document.querySelector(".landing-07 .col-image").addEventListener("mousemove", function (event) {
    dx = event.pageX / -cx;
    dy = event.pageY / -cy;
    gsap.to(".landing-07 .col-image .img-rounded,.landing-07 .col-image .image-outline, .landing-07 .el", {
      x: dx * 5,
      y: dy * 5,
      duration: 0.1,
      ease: "none",
    });
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
        if ($(window).width() < 1024) {
          gsap.to(".landing-03 .item", {
            duration: 0.5,
            scale: 1,
            opacity: 1,
            stagger: 0.3,
            ease: "none",
          });
        } else {
          var tl3 = gsap
            .timeline()
            .to(".landing-03 .item-3", {
              duration: 0.6,
              scale: 1,
              opacity: 1,
              ease: "none",
            })
            .to(
              ".landing-03 .item-2",
              {
                duration: 0.6,
                scale: 1,
                opacity: 1,
                stagger: 0.3,
                ease: "none",
              },
              "-=0.3"
            )
            .to(
              ".landing-03 .item-1",
              {
                duration: 0.6,
                scale: 1,
                opacity: 1,
                stagger: 0.3,
                ease: "none",
              },
              "-=0.3"
            )
            .to(
              ".landing-03 .item-4",
              {
                duration: 0.6,
                scale: 1,
                opacity: 1,
                stagger: 0.3,
                ease: "none",
              },
              "-=0.3"
            );
        }
      }

      // screen 04
      if (destination.index === 3 && direction === "down") {
        gsap.to(".landing-04 h2", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          duration: 0.5,
          ease: "none",
          delay: 0.5,
        });
        gsap.to(".landing-04 ul li", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          stagger: 0.15,
          duration: 0.3,
          ease: "none",
          delay: 1,
        });
      }

      // screen 05
      if (destination.index === 4 && direction === "down") {
        var headline5 = SplitType.create(".landing-05 h2");
        $(window).on("resize", () => {
          headline5.split();
        });
        $(".landing-05 h2").css("visibility", "visible");
        gsap.to(headline5.lines, {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          stagger: 0.15,
          ease: "none",
          delay: 0.5,
          onComplete: () => {
            $(".landing-05 h2 span").addClass("outlined");
            gsap.to(".landing-05 .icon", {
              scaleY: 1,
              duration: 0.3,
              ease: "none",
              onComplete: () => {
                $(".landing-05 .wrapper").css("opacity", 1);
              },
            });
          },
        });
      }

      // screen 06
      if (destination.index === 5 && direction === "down") {
        gsap.to(".landing-06 h3", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          duration: 0.3,
          ease: "none",
          delay: 0.5,
        });
        gsap.to(".landing-06 ul li", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          duration: 0.3,
          stagger: 0.15,
          ease: "none",
          delay: 0.8,
        });
      }

      // screen 07
      if (destination.index === 6 && direction === "down") {
        gsap.to(".landing-07 h3", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          duration: 0.3,
          ease: "none",
          delay: 0.5,
        });
        gsap.to(".landing-07 p", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          duration: 0.2,
          ease: "none",
          delay: 0.8,
        });
        gsap.to(".landing-07 ul li", {
          y: 0,
          yPercent: 0,
          opacity: 1,
          stagger: 0.15,
          duration: 0.3,
          ease: "none",
          delay: 0.9,
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

        var headline8 = SplitType.create(".landing-08 h2");
        $(window).on("resize", () => {
          headline8.split();
        });
        $(".landing-08 h2").css("visibility", "visible");
        gsap.to(".landing-08 .subtitle", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 0.5,
        });
        gsap.to(headline8.lines, {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          stagger: 0.15,
          ease: "none",
          delay: 1,
          onComplete: () => {
            $(".landing-08 h2 span").addClass("outlined");
          },
        });
      }

      // screen 09
      if (destination.index === 8) {
        gsap.to(".landing-09 .el", {
          opacity: 1,
          scale: 1,
          duration: 0.3,
          stagger: 0.15,
          ease: "none",
          delay: 0.5,
        });
        gsap.to(".landing-09 .h1", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 1,
          onComplete: () => {
            tl9.play();
          },
        });
        gsap.to(".landing-09 h2:last-child", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 3.5,
        });
        gsap.to(".landing-09 .icon", {
          scaleY: 1,
          duration: 0.3,
          ease: "none",
          delay: 3.8,
        });
      }

      // screen 10
      if (destination.index === 9) {
        gsap.to(".landing-10 .section-header-number", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 1,
        });
        gsap.to(".landing-10 h2", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 1.2,
        });
      }

      // screen 11
      if (destination.index === 10) {
        gsap.to(".landing-11 h2", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 1,
        });
        gsap.to(".landing-11 .subtitle", {
          opacity: 1,
          y: 0,
          yPercent: 0,
          duration: 0.3,
          ease: "none",
          delay: 1.2,
        });
      }
    },
  });

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

  $(".landing-02 .box, .landing-03 .item, .landing-05 h2 span, .landing-05 img, .landing-06 img, .landing-07 img").on("click", function () {
    var start = $(".landing-02 .btn-start");
    start.trigger("click");
  });
});
