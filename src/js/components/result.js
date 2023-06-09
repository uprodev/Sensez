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

  var bgBody;
  // fullpage
  new fullpage("#fullpage", {
    scrollOverflow: true,
    scrollingSpeed: 500,
    fitToSectionDelay: false,
    verticalCentered: true,
    afterRender: function () {
      var screenStart = $(".res-screen-01");
      gsap.to("body", {
        backgroundColor: screenStart.data("bg"),
        duration: 0.1,
      });
      bgBody = screenStart.data("bg");
    },
    onLeave: function (origin, destination, direction, trigger) {
      console.log(destination.index);
      if (destination.item.dataset.bg) {
        gsap.to("body", {
          backgroundColor: destination.item.dataset.bg,
          duration: 1,
        });
      }
      if (destination.index === 1) {
        gsap.to(".contact-us", {
          opacity: 1,
          duration: 0.3,
        });
      } else if (destination.index === 0) {
        gsap.to(".contact-us", {
          opacity: 0,
          duration: 0.3,
        });
      }
      if (destination.item.classList.contains("res-screen-05")) {
        gsap.to(".res-screen-05  .image figure", {
          x: 0,
          duration: 1,
          delay: 0,
        });
      }
      if (destination.item.querySelector(".block-locked")) {
        destination.item.querySelector(".inner").classList.add("visible");
      }
      if (destination.item.querySelector(".block-scales")) {
        setTimeout(() => {
          scales();
        }, 300);
      }
    },
  });

  $(".read-more").on("click", function (e) {
    var txt1 = "More details...",
      txt2 = "Less details...";
    if ($(this).prev("ul").hasClass("opened")) {
      $(this).text(txt1);
      $(this).prev("ul").removeClass("opened");
    } else {
      $(this).text(txt2);
      $(this).prev("ul").addClass("opened");
    }
    fullpage_api.reBuild();
  });

  $(".block-locked .btn").on("click", function (e) {
    e.preventDefault();
    fullpage_api.moveSectionDown();
  });

  $(".btn-scroll").on("click", function () {
    fullpage_api.moveSectionDown();
  });

  $(".btn-top").on("click", function () {
    fullpage_api.silentMoveTo(1);
  });

  function isElementInViewport(el, offset = 0) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + offset /* or $(window).height() */ && rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */;
  }

  // document.querySelector(".res-screen-02 .fp-overflow").addEventListener("scroll", function () {
  //   console.log(isElementInViewport(document.querySelector(".block-scales")));
  //   if (isElementInViewport(document.querySelector(".block-scales")) && !scalesAnimated && !scalesAnimating) {
  //     scales();
  //   }
  // });

  var scalesAnimated = false;
  var scalesAnimating = false;
  function scales() {
    scalesAnimating = true;
    var counters = document.querySelectorAll(".counter");
    gsap.utils.toArray(counters).forEach(function (elem) {
      gsap.to(elem, {
        textContent: elem.dataset.text,
        duration: 1,
        ease: Power1.easeIn,
        snap: { textContent: 1 },
        stagger: 1,
        onComplete: function () {
          scalesAnimated = true;
        },
      });
    });

    var bars = document.querySelectorAll(".bar");
    gsap.utils.toArray(bars).forEach(function (bar) {
      var barInner = bar.querySelector(".bar-inner"),
        barInnerW = barInner.dataset.width + "%",
        barTtitle = bar.previousElementSibling;
      gsap.to(barInner, {
        width: barInnerW,
        duration: 1,
        ease: Power1.easeIn,
        snap: { textContent: 1 },
        stagger: 1,
      });
      gsap.to(barTtitle, {
        left: barInnerW,
        duration: 1,
        ease: Power1.easeIn,
        snap: { textContent: 1 },
        stagger: 1,
      });
    });
  }

  gsap.utils.toArray(".block-scroll").forEach(function (elem) {
    ScrollTrigger.create({
      scroller: ".res-screen-02 .fp-overflow",
      trigger: elem,
      start: "top 90%",
      toggleActions: "play none none none",
      onEnter: function () {
        gsap.to(elem, {
          duration: 0.5,
          y: 0,
          autoAlpha: 1,
          ease: "none",
          overwrite: "auto",
        });
        // if (elem.classList.contains("block-locked")) {
        //   elem.querySelector(".inner").classList.add("visible");
        // }
      },
    });
  });

  ScrollTrigger.create({
    scroller: ".res-screen-05 .fp-overflow",
    trigger: ".cite .inner",
    start: "top 90%",
    toggleActions: "play none none none",
    onEnter: function () {
      gsap.to(".cite .inner", {
        duration: 0.5,
        y: 0,
        autoAlpha: 1,
        ease: "none",
        overwrite: "auto",
      });
    },
  });

  // swiper
  if ($(".reviews-swiper").length) {
    const swiper = new Swiper(".reviews-swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }

  $(".res-screen-06 .image")
    .on("mouseenter", function () {
      $(".res-screen-06").addClass("hover");
    })
    .on("mouseleave", function () {
      $(".res-screen-06").removeClass("hover");
    });

  $(".contact-us-close").on("click", function () {
    $(".contact-us").hide(200);
  });
});
