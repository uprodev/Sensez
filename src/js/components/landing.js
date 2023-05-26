jQuery(document).ready(function ($) {
  var tooltip = $('<div class="tooltip" />');
  $(".screen-02").append(tooltip);
  $(".screen-02 .text")
    .on("mouseenter", function (e) {
      var container = $(".screen-02");
      var txt = $(this).attr("data-tooltip");
      var pos = getMousePos(e, container);
      $(".tooltip").css("top", pos.y);
      $(".tooltip").css("left", pos.x);
      $(".tooltip").text(txt).show();
    })
    .on("mousemove", function (e) {
      var container = $(".screen-02");
      var pos = getMousePos(e, container);
      $(".tooltip").css("top", pos.y);
      $(".tooltip").css("left", pos.x);
    });

  $(".text-wrapper").on("mouseleave", function (e) {
    $(".tooltip").fadeOut(100);
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

  function screen4Desktop() {
    const timeline = gsap
      .timeline()
      .to(".text-01", {
        opacity: 1,
        scaleX: 1,
        scaleY: 1,
        duration: 0.4,
      })
      .to(".line-01 path", {
        strokeDashoffset: 0,
        duration: 0.4,
      })
      .to(".text-02", {
        opacity: 1,
        scaleX: 1,
        scaleY: 1,
        duration: 0.4,
      })
      .to(".line-02 path", {
        strokeDashoffset: 0,
        duration: 0.4,
      })
      .to(".text-03", {
        opacity: 1,
        scaleX: 1,
        scaleY: 1,
        duration: 0.4,
      })
      .to(".line-03 path", {
        strokeDashoffset: 0,
        duration: 0.4,
      })
      .to(".text-04", {
        opacity: 1,
        scaleX: 1,
        scaleY: 1,
        duration: 0.4,
      })
      .to(".line-04 path", {
        strokeDashoffset: 0,
        duration: 0.4,
      })
      .to(".text-05", {
        opacity: 1,
        scaleX: 1,
        scaleY: 1,
        duration: 0.4,
      });
  }
  function screen4mobile() {
    gsap.utils.toArray(".screen-04-animation .box").forEach((box, i) => {
      gsap.to(box, {
        keyframes: {
          rotate: [30, -10, 30, 0],
        },
        transformOrigin: "center",
        ease: "none",
        duration: 0.4,
      });
    });
    gsap.utils.toArray(".screen-04-animation .text").forEach((txt, i) => {
      gsap.to(txt, {
        scaleX: 1,
        scaleY: 1,
        opacity: 1,
        duration: 0.4,
        transformOrigin: "center",
        ease: "none",
      });
    });
    gsap.utils.toArray(".screen-04-animation .line").forEach((line, i) => {
      gsap.to(line.querySelectorAll("path"), {
        strokeDashoffset: 0,
        ease: "none",
        duration: 0.4,
      });
    });
  }

  new fullpage("#fullpage", {
    scrollOverflow: true,
    scrollingSpeed: 500,
    normalScrollElements: ".screen-03 .container",
    fitToSectionDelay: false,
    verticalCentered: false,
    onLeave: function (origin, destination, direction, trigger) {
      if (direction === "down") {
        $(".header").addClass("headroom--not-top").removeClass("active");
        gsap.fromTo(
          "body",
          { backgroundColor: destination.item.dataset.start },
          {
            backgroundColor: destination.item.dataset.end,
            duration: 1,
          }
        );
      } else {
        console.log(destination.index);
        $(".header").addClass("active");
        if (destination.index !== 0) {
          setTimeout(() => {
            $(".header").removeClass("active");
          }, 2000);
        }
        gsap.fromTo(
          "body",
          { backgroundColor: origin.item.dataset.end },
          {
            backgroundColor: origin.item.dataset.start,
            duration: 1,
          }
        );
      }

      // screen 02
      if (destination.index === 1 && direction === "down") {
        gsap.to(".screen-02 .bg", {
          duration: 1,
          backgroundImage: "radial-gradient(81.17% 81.17% at 50% 0%, rgba(68, 32, 158, 0.4) 0%, rgba(0, 0, 0, 0) 100%)",
          width: "102vw",
          height: "102vh",
          borderRadius: 0,
          delay: 0.5,
        });
      }
      if (origin.index === 1 && direction === "up") {
        gsap.to(".screen-02 .bg", {
          duration: 0.4,
          backgroundImage: "radial-gradient(81.17% 81.17% at 50% 0%, rgba(68, 32, 158, 0.4) 0%, rgba(0, 0, 0, 0) 100%)",
          width: "100%",
          height: "100%",
          borderRadius: 40,
        });
      }

      if ($(window).width() >= 1024) {
        // screen 04
        if (destination.index === 3 && direction === "down") {
          screen4Desktop();
        }
        // screen 08
        if (destination.index === 8 && direction === "down") {
          gsap.to(".screen-08 .el-01, .screen-08 .el-02, .screen-08 .bg-gradient, .screen-08 .h1", {
            duration: 1.5,
            delay: 0.5,
            x: 0,
            y: 0,
          });
          gsap.to(".screen-08 .image", {
            duration: 1.5,
            delay: 1,
            x: 0,
            y: 0,
            onComplete: function () {
              document.querySelector(".screen-08 .image .inner").classList.add("rotating");
            },
          });
          gsap.to(".screen-08 .h1 div", {
            duration: 1.5,
            delay: 0.5,
            left: 0,
            x: 0,
            y: 0,
          });
          gsap.to(".screen-08 .btn", {
            opacity: 1,
            duration: 0.5,
            delay: 1.5,
          });
        }
      } else {
        // screen 04
        if (destination.index === 2 && direction === "down") {
          setTimeout(() => {
            screen4mobile();
          }, 500);
        }

        // screen 05
        if (destination.index === 3 && direction === "down") {
          setTimeout(() => {
            document.querySelectorAll(".screen-05 .col").forEach((col, i) => {
              gsap.to(col, {
                y: 0,
                opacity: 1,
                duration: 1,
              });
            });
          }, 500);
        }

        // screen 08
        if (destination.index === 7 && direction === "down") {
          gsap.to(".screen-08 .el-01, .screen-08 .el-02, .screen-08 .bg-gradient, .screen-08 .h1", {
            duration: 0.8,
            delay: 0.5,
            x: 0,
            y: 0,
          });
          gsap.to(".screen-08 .image", {
            duration: 0.8,
            delay: 1,
            x: 0,
            y: 0,
            onComplete: function () {
              document.querySelector(".screen-08 .image .inner").classList.add("rotating");
            },
          });
          gsap.to(".screen-08 .h1 div", {
            duration: 0.8,
            delay: 0.5,
            left: 0,
            x: 0,
            y: 0,
          });
          gsap.to(".screen-08 .btn", {
            opacity: 1,
            delay: 1.5,
          });
        }
      }
    },
  });

  $(".btn-scroll").on("click", function () {
    fullpage_api.moveSectionDown();
  });
  $(".screen-01 .btn").on("click", function (e) {
    e.preventDefault();
    fullpage_api.moveSectionDown();
  });

  document.querySelector(".screen-03 .container").addEventListener("scroll", (event) => {
    const { scrollHeight, scrollTop, clientHeight } = event.target;
    if (Math.abs(scrollHeight - clientHeight - scrollTop) < 1) {
      fullpage_api.moveSectionDown();
    }
    if (scrollTop === 0) {
      fullpage_api.moveSectionUp();
    }
  });

  function accPos() {
    var container = $(".accordion");
    if (container.outerHeight() < $(window).height()) {
      container.css("padding-top", ($(window).height() - container.outerHeight()) / 2);
    }
  }
  accPos();

  $(window).on("resize", function () {
    accPos();
  });

  $(".accordion .item-header button").on("click", function () {
    if (!$(this).closest(".item").hasClass("active")) {
      $(this)
        .closest(".item")
        .addClass("active")
        .find(".item-body")
        .slideDown(300, function () {
          setTimeout(() => {
            fullpage_api.reBuild();
          }, 100);
        });
    } else {
      $(this)
        .closest(".item")
        .removeClass("active")
        .find(".item-body")
        .slideUp(300, function () {
          setTimeout(() => {
            fullpage_api.reBuild();
          }, 100);
        });
    }
  });

  imagesLoaded("body", function () {
    ScrollTrigger.refresh();
  });

  function getMousePos(e, container) {
    var doc = document.documentElement || document.body;
    if (e.type == "touchstart" || e.type == "touchmove" || e.type == "touchend" || e.type == "touchcancel") {
      var touch = e.touches[0] || e.changedTouches[0];
      var pos = {
        x: touch.clientX,
        y: touch.clientY - container.offset().top,
      };
    } else if (e.type == "mousedown" || e.type == "mouseup" || e.type == "mousemove" || e.type == "mouseover" || e.type == "mouseout" || e.type == "mouseenter" || e.type == "mouseleave") {
      var pos = {
        x: e ? e.pageX : window.event.clientX + doc.scrollLeft - doc.clientLeft,
        y: e ? e.pageY - container.offset().top : window.event.clientY + doc.scrollTop - doc.clientTop - container.offset().top,
      };
    }

    return pos;
  }

  // cursor
  if (document.querySelector(".cursor-container")) {
    $(".cursor-container").each(function () {
      var container = $(this);
      var cursor = container.find(".cursor");

      container.on("mousemove", function (e) {
        var pos = getMousePos(e, container);
        cursor.css("top", pos.y);
        cursor.css("left", pos.x);
      });
    });
  }
});
