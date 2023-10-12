jQuery(document).ready(function ($) {
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

  ScrollTrigger.create({
    trigger: ".block-scales",
    start: "bottom bottom",
    onEnter: function () {
      scales();
    },
  });

  $(".accordion .item-header button").on("click", function () {
    if (!$(this).closest(".item").hasClass("active")) {
      $(".accordion .item.active").removeClass("active").find(".item-body").slideUp(300);
      $(this).closest(".item").addClass("active").find(".item-body").slideDown(300);
    } else {
      $(this).closest(".item").removeClass("active").find(".item-body").slideUp(300);
    }
  });

  $(".btn-top").on("click", function () {
    $("html,body").animate({ scrollTop: 0 }, 800);
  });
});
