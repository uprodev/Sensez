jQuery(document).ready(function ($) {
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
      if (destination.index === 4) {
        gsap.to(".res-screen-05  .image figure", {
          x: 0,
          duration: 1,
          delay: 0.5,
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
    },
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

  var counters = document.querySelectorAll(".counter");
  gsap.utils.toArray(counters).forEach(function (elem) {
    gsap.from(elem, {
      scrollTrigger: {
        scroller: ".res-screen-02 .fp-overflow",
        scrollTrigger: ".block-scales",
      },
      textContent: 0,
      duration: 1,
      delay: 1,
      ease: Power1.easeIn,
      snap: { textContent: 1 },
      stagger: 1,
    });
  });

  var bars = document.querySelectorAll(".bar");
  gsap.utils.toArray(bars).forEach(function (bar) {
    var barInner = bar.querySelector(".bar-inner"),
      barInnerW = barInner.dataset.width + "%",
      barTtitle = bar.previousElementSibling;
    gsap.to(barInner, {
      scrollTrigger: {
        scroller: ".res-screen-02 .fp-overflow",
        scrollTrigger: ".block-scales",
      },
      width: barInnerW,
      duration: 1,
      delay: 1,
      ease: Power1.easeIn,
      snap: { textContent: 1 },
      stagger: 1,
    });
    gsap.to(barTtitle, {
      scrollTrigger: {
        scroller: ".res-screen-02 .fp-overflow",
        scrollTrigger: ".block-scales",
      },
      left: barInnerW,
      duration: 1,
      delay: 1,
      ease: Power1.easeIn,
      snap: { textContent: 1 },
      stagger: 1,
    });
  });

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
        if (elem.classList.contains("block-locked")) {
          elem.querySelector(".inner").classList.add("visible");
        }
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
});
