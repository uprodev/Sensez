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

  function recommendImgHeight() {
    $(".res-screen-10 .recommendation .block-main").each(function () {
      var textHt = $(this).find(".text").outerHeight();
      $(this).find(".image").css("height", textHt);
    });
  }
  recommendImgHeight();
  $(window).on("resize", function () {
    recommendImgHeight();
  });

  var bgBody;
  // fullpage
  new fullpage("#fullpage", {
    scrollOverflow: true,
    scrollingSpeed: 500,
    fitToSectionDelay: false,
    verticalCentered: true,
    responsiveWidth: 768,
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
        gsap.to(".res-screen-08 .wrapper", {
          y: 0,
          duration: 0.5,
          delay: 0.5,
        });
        gsap.to(".res-screen-08 h2", {
          opacity: 1,
          duration: 0.5,
          delay: 1,
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
      if (destination.item.querySelector(".block-scales")) {
        setTimeout(() => {
          scales();
        }, 300);
      }
    },
  });

  $(".btn-scroll").on("click", function () {
    fullpage_api.moveSectionDown();
  });

  $(".res-screen-06 .wrapper .text .share a").on("click", function (e) {
    e.preventDefault();
    fullpage_api.moveSectionDown();
  });

  $(".res-screen-01 .buttons .btn.btn-outlined").on("click", function () {
    $(this).parent().find(".box-share-hidden").toggleClass("active");
  });

  $(".box-share .btn-share").on("click", function () {
    $(".box-share").toggleClass("active");
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
      scroller: ".res-screen-scroll-container .fp-overflow",
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

  gsap.utils.toArray(".recommendation").forEach(function (elem) {
    ScrollTrigger.create({
      scroller: ".res-screen-10 .fp-overflow",
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
      },
    });
  });

  $(".res-screen-06 .image")
    .on("mouseenter", function () {
      $(".res-screen-06").addClass("hover");
    })
    .on("mouseleave", function () {
      $(".res-screen-06").removeClass("hover");
    });

  function fallbackCopyTextToClipboard(text) {
    var textArea = document.createElement("textarea");
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = "0";
    textArea.style.left = "0";
    textArea.style.position = "fixed";

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
      var successful = document.execCommand("copy");
      var msg = successful ? "successful" : "unsuccessful";
      console.log("Fallback: Copying text command was " + msg);
    } catch (err) {
      console.error("Fallback: Oops, unable to copy", err);
    }

    document.body.removeChild(textArea);
  }
  function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
      fallbackCopyTextToClipboard(text);
      return;
    }
    navigator.clipboard.writeText(text).then(
      function () {
        console.log("Async: Copying to clipboard was successful!");
      },
      function (err) {
        console.error("Async: Could not copy text: ", err);
      }
    );
  }

  var copyBtn = document.querySelector(".res-screen-09 .code");

  copyBtn.addEventListener("click", function (event) {
    copyTextToClipboard(this.textContent);
  });

  $(".contact-us-close").on("click", function () {
    $(".contact-us").hide(200);
  });
});
