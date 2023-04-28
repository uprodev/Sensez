jQuery(document).ready(function ($) {
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

  ScrollTrigger.matchMedia({
    "(min-width: 1024px)": function () {
      const sections = document.querySelectorAll(".screen");
      if (sections.length > 0) {
        const scrolling = {
          enabled: true,
          events: "scroll,wheel,touchmove,pointermove".split(","),
          prevent: (e) => e.preventDefault(),
          disable() {
            if (scrolling.enabled) {
              scrolling.enabled = false;
              window.addEventListener("scroll", gsap.ticker.tick, { passive: true });
              scrolling.events.forEach((e, i) => (i ? document : window).addEventListener(e, scrolling.prevent, { passive: false }));
            }
          },
          enable() {
            if (!scrolling.enabled) {
              scrolling.enabled = true;
              window.removeEventListener("scroll", gsap.ticker.tick);
              scrolling.events.forEach((e, i) => (i ? document : window).removeEventListener(e, scrolling.prevent));
            }
          },
        };

        function goToSection(section, i) {
          if (scrolling.enabled) {
            scrolling.disable();

            gsap.to(window, {
              scrollTo: { y: section, autoKill: false },
              onComplete: scrolling.enable,
              duration: 0.5,
            });
          }
        }
        function goToSection3(section, i) {
          if (scrolling.enabled) {
            scrolling.disable();
            var top = $(".screen-03").offset().top + section.clientHeight - $(window).height();

            gsap.to(window, {
              scrollTo: { y: top, autoKill: false },
              onComplete: scrolling.enable,
              duration: 0.5,
            });
          }
        }

        sections.forEach((section, i) => {
          ScrollTrigger.create({
            // markers: true,
            trigger: section,
            start: "top bottom-=1",
            end: "bottom top+=1",
            onEnter: () => goToSection(section),
            onEnterBack: () => {
              if (section.classList.contains("screen-03")) {
                goToSection3(section);
              } else {
                goToSection(section);
              }
            },
          });
        });
      }
    },
  });

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

  // screens bg
  if (document.querySelector(".screen")) {
    ScrollTrigger.matchMedia({
      "(min-width: 1024px)": function () {
        document.querySelectorAll(".screen").forEach((screen, i) => {
          gsap.fromTo(
            "body",
            { backgroundColor: screen.dataset.start },
            {
              backgroundColor: screen.dataset.end,
              duration: 1,
              scrollTrigger: {
                trigger: screen,
                scrub: true,
                start: "top 50%",
                end: "top top",
              },
            }
          );
        });
      },

      "(max-width: 1023px)": function () {
        document.querySelectorAll(".screen:not(.screen-03)").forEach((screen, i) => {
          gsap.fromTo(
            "body",
            { backgroundColor: screen.dataset.start },
            {
              backgroundColor: screen.dataset.end,
              scrollTrigger: {
                trigger: screen,
                scrub: true,
                start: "top 50%",
                end: "top top",
              },
            }
          );
        });
      },
    });
  }

  if (document.querySelector(".screen-02")) {
    gsap.to(".screen-02 .bg", {
      scrollTrigger: {
        trigger: ".screen-02",
        start: "top 50%",
        toggleActions: "play reverse play reverse",
      },
      duration: 0.7,
      backgroundImage: "radial-gradient(81.17% 81.17% at 50% 0%, rgba(68, 32, 158, 0.7) 0%, rgba(0, 0, 0, 0) 100%)",
      width: "102vw",
      height: "102vh",
      borderRadius: 0,
    });

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
  }

  if (document.querySelector(".screen-03")) {
    ScrollTrigger.matchMedia({
      "(min-width: 1024px)": function () {
        ScrollTrigger.create({
          trigger: ".screen-03",
          start: "top top",
          end: "bottom bottom",
          toggleActions: "play resume resume resume",
          pin: ".lock-wrapper",
        });

        var scrollers = document.querySelectorAll(".screen-headlines li");
        scrollers.forEach((li, i) => {
          gsap.to(li.querySelector("h2"), {
            scrollTrigger: {
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
              trigger: li,
              start: "center bottom",
              end: "bottom -100vh",
              toggleActions: "play resume resume resume",
              scrub: true,
            },
            y: "-100%",
            opacity: 1,
          });
        });
      },
    });
  }

  if (document.querySelector(".screen-04")) {
    ScrollTrigger.matchMedia({
      "(min-width: 1024px)": function () {
        const timeline = gsap
          .timeline({
            scrollTrigger: {
              trigger: ".screen-04",
              start: "top 50%",
              end: "top top",
              ease: "none",
              toggleActions: "play resume resume resume",
            },
          })
          .to(".text-01", {
            opacity: 1,
            scaleX: 1,
            scaleY: 1,
            duration: 0.7,
          })
          .to(".line-01 path", {
            strokeDashoffset: 0,
            duration: 0.7,
          })
          .to(".text-02", {
            opacity: 1,
            scaleX: 1,
            scaleY: 1,
            duration: 0.7,
          })
          .to(".line-02 path", {
            strokeDashoffset: 0,
            duration: 0.7,
          })
          .to(".text-03", {
            opacity: 1,
            scaleX: 1,
            scaleY: 1,
            duration: 0.7,
          })
          .to(".line-03 path", {
            strokeDashoffset: 0,
            duration: 0.7,
          })
          .to(".text-04", {
            opacity: 1,
            scaleX: 1,
            scaleY: 1,
            duration: 0.7,
          })
          .to(".line-04 path", {
            strokeDashoffset: 0,
            duration: 0.7,
          })
          .to(".text-05", {
            opacity: 1,
            scaleX: 1,
            scaleY: 1,
            duration: 0.7,
          });
      },

      "(max-width: 1023px)": function () {
        gsap.utils.toArray(".screen-04-animation .box").forEach((box, i) => {
          gsap.to(box, {
            keyframes: {
              rotate: [30, -10, 30, 0],
            },
            transformOrigin: "center",
            ease: "none",
            duration: 0.7,
            scrollTrigger: {
              trigger: box,
              start: "top 70%",
              ease: "none",
            },
          });
        });
        gsap.utils.toArray(".screen-04-animation .text").forEach((txt, i) => {
          gsap.to(txt, {
            scaleX: 1,
            scaleY: 1,
            opacity: 1,
            duration: 0.7,
            transformOrigin: "center",
            ease: "none",
            scrollTrigger: {
              trigger: txt,
              start: "top 70%",
              ease: "none",
            },
          });
        });
        gsap.utils.toArray(".screen-04-animation .line").forEach((line, i) => {
          gsap.to(line.querySelectorAll("path"), {
            strokeDashoffset: 0,
            ease: "none",
            duration: 0.7,
            scrollTrigger: {
              trigger: line,
              start: "top 70%",
              ease: "none",
            },
          });
        });
      },
    });
  }

  if (document.querySelector(".screen-05")) {
    ScrollTrigger.matchMedia({
      "(max-width: 1023px)": function () {
        document.querySelectorAll(".screen-05 .col").forEach((col, i) => {
          gsap.to(col, {
            y: 0,
            opacity: 1,
            duration: 1,

            scrollTrigger: {
              trigger: col,
              start: "top 70%",
              toggleActions: "play resume resume resume",
            },
          });
        });
      },
    });
  }

  if (document.querySelector(".screen-08")) {
    gsap.to(".screen-08 .el-01, .screen-08 .el-02, .screen-08 .bg-gradient, .screen-08 .h1, .screen-08 .image", {
      scrollTrigger: {
        trigger: ".screen-08",
        start: "top 80%",
        // end: "top top",
        toggleActions: "play resume resume resume",
        // scrub: true,
      },
      duration: 0.7,
      x: 0,
      y: 0,
    });

    gsap.to(".screen-08 .h1 div", {
      scrollTrigger: {
        trigger: ".screen-08",
        start: "top 80%",
        // end: "top top",
        toggleActions: "play resume resume resume",
        // scrub: true,
      },
      duration: 0.7,
      left: 0,
      x: 0,
      y: 0,
    });
    gsap.to(".screen-08 .btn", {
      scrollTrigger: {
        trigger: ".screen-08",
        start: "top 20%",
        toggleActions: "play resume resume resume",
      },
      opacity: 1,
    });
    ScrollTrigger.create({
      trigger: ".screen-08",
      start: "top 10%",
      toggleActions: "play reverse none reverse",
      toggleClass: { targets: ".screen-08 .image", className: "rotating" },
    });
  }

  // four-steps
  if (document.querySelector(".four-steps-wrapper")) {
    ScrollTrigger.matchMedia({
      "(min-width: 1024px)": function () {
        // relations
        $(".four-steps-relations label").on("click", function () {
          var degrees = [9.73, -3.95, 3.75, -3.74, 2.67, 4.67],
            degreeText = -5.94;
          var duration = 0.7;
          gsap.utils.toArray(".four-steps-relations ul li").forEach((box, i) => {
            // var duration = Math.floor(Math.random() * (2 - 1 + 1) + 1);
            gsap.to(box, {
              rotate: degrees[i],
              transformOrigin: "center",
              ease: "none",
              duration: 0.3,
            });
          });
          gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el").forEach((box, i) => {
            gsap.to(box, {
              y: "100vh",
              transformOrigin: "center",
              ease: "none",
              duration: duration,
            });
          });
          gsap.to(".four-steps-relations .text", {
            rotate: degreeText,
            y: "100vh",
            transformOrigin: "center",
            ease: "none",
            duration: 1,
            onComplete: function () {
              $(".btn-previous").css("opacity", 1);
              $(".four-steps-relations").css("opacity", 0).removeClass("step-current");
              gsap.to(".four-steps-age", {
                y: 0,
                ease: "none",
                duration: 0.5,
              });
              $(".four-steps-age").addClass("step-current");
            },
          });
        });

        // age
        var listItems = document.querySelectorAll(".four-steps-age ul li");
        gsap.utils.toArray(listItems).forEach((li, i) => {
          gsap.to(li.querySelector("label"), {
            keyframes: {
              scale: [0.5, 1, 0.5],
              opacity: [0, 1, 0],
            },
            ease: "none",
            scrollTrigger: {
              scroller: ".four-steps-age .container",
              trigger: li,
              start: "top bottom",
              end: "bottom top",
              scrub: 1,

              snap: {
                snapTo: li,
                duration: 1,
                delay: 0,
              },
            },
          });

          ScrollTrigger.create({
            scroller: ".four-steps-age .container",
            trigger: li,
            start: "top 50%",
            end: "bottom 50%",
            toggleActions: "play reverse none reverse",
            toggleClass: { targets: li, className: "active" },
          });
        });

        var timelineAge;
        $(".four-steps-age label").on("click", function () {
          var currentLabel = $(this);
          $(".four-steps-age .container").css("overflow", "hidden");
          timelineAge = gsap
            .timeline()
            .to(currentLabel, {
              scale: 10,
              opacity: 1,
              duration: 1,
              ease: "none",
            })
            .to(
              ".four-steps-age",
              {
                opacity: 0,
                duration: 0.5,
              },
              "-=0.5"
            )
            .to(
              ".four-steps-gender",
              {
                y: 0,
                duration: 0.5,
              },
              "-=0.5"
            );
          $(".four-steps-age").removeClass("step-current");
          $(".four-steps-gender").addClass("step-current");
        });

        // gender
        $(".four-steps-gender label").on("click", function () {
          gsap.to(".four-steps-gender", {
            y: "-100vh",
            ease: "none",
            duration: 1,
            onComplete: function () {
              $(".four-steps-gender").css("opacity, 0");
              gsap.to(".four-steps-orientation", {
                y: 0,
                ease: "none",
                duration: 0.5,
              });
            },
          });
          $(".four-steps-gender").removeClass("step-current");
          $(".four-steps-orientation").addClass("step-current");
        });

        // orientation
        $(".four-steps-orientation label").on("click", function () {
          $(".btn-next")[0].click();
        });
      },

      "(max-width: 1023px)": function () {
        // relations
        $(".four-steps-relations label").on("click", function () {
          var degrees = [9.73, -3.95, 3.75, -3.74, 2.67, 4.67],
            degreeText = -5.94;
          var duration = 0.7;
          gsap.utils.toArray(".four-steps-relations ul li").forEach((box, i) => {
            // var duration = Math.floor(Math.random() * (2 - 1 + 1) + 1);
            gsap.to(box, {
              rotate: degrees[i],
              transformOrigin: "center",
              ease: "none",
              duration: 0.3,
            });
          });
          gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el").forEach((box, i) => {
            gsap.to(box, {
              y: "100vh",
              transformOrigin: "center",
              ease: "none",
              duration: duration,
            });
          });
          gsap.to(".four-steps-relations .text", {
            rotate: degreeText,
            y: "100vh",
            transformOrigin: "center",
            ease: "none",
            duration: 1,
            onComplete: function () {
              $(".btn-previous").css("opacity", 1);
              $(".four-steps-relations").css("opacity", 0).removeClass("step-current");
              gsap.to(".four-steps-age", {
                y: 0,
                ease: "none",
                duration: 0,
              });
              var d = 0;
              gsap.utils.toArray(".four-steps-age .col-text, .four-steps-age ul li").forEach((box, i) => {
                gsap.to(box, {
                  x: 0,
                  ease: "none",
                  duration: 0.5,
                  delay: d,
                });
                d += 0.2;
              });
              $(".four-steps-age").addClass("step-current");
            },
          });
        });

        // age
        var listItems = document.querySelectorAll(".four-steps-age ul li");
        gsap.utils.toArray(listItems).forEach((li, i) => {
          gsap.to(li.querySelector("label"), {
            keyframes: {
              scale: [0.5, 1, 0.5],
              opacity: [0, 1, 0],
            },
            ease: "none",
            scrollTrigger: {
              scroller: ".four-steps-age .container",
              trigger: li,
              start: "top bottom",
              end: "bottom top",
              scrub: 1,

              snap: {
                snapTo: li,
                duration: 1,
                delay: 0,
              },
            },
          });

          ScrollTrigger.create({
            scroller: ".four-steps-age .container",
            trigger: li,
            start: "top 50%",
            end: "bottom 50%",
            toggleActions: "play reverse none reverse",
            toggleClass: { targets: li, className: "active" },
          });
        });

        var timelineAge;
        $(".four-steps-age label").on("click", function () {
          var currentLabel = $(this);
          $(".four-steps-age .container").css("overflow", "hidden");
          timelineAge = gsap
            .timeline()
            .to(currentLabel, {
              scale: 10,
              opacity: 1,
              duration: 1,
              ease: "none",
            })
            .to(
              ".four-steps-age",
              {
                opacity: 0,
                duration: 0.5,
              },
              "-=0.5"
            )
            .to(".four-steps-gender", {
              y: 0,
              duration: 0,
              onComplete: function () {
                var d = 0;
                gsap.utils.toArray(".four-steps-gender .text, .four-steps-gender ul li").forEach((box, i) => {
                  gsap.to(box, {
                    x: 0,
                    ease: "none",
                    duration: 0.5,
                    delay: d,
                  });
                  d += 0.2;
                });
              },
            });

          $(".four-steps-age").removeClass("step-current");
          $(".four-steps-gender").addClass("step-current");
        });

        // gender
        $(".four-steps-gender label").on("click", function () {
          gsap.to(".four-steps-gender", {
            y: "-100vh",
            ease: "none",
            duration: 1,
            onComplete: function () {
              $(".four-steps-gender").css("opacity, 0");
              gsap.to(".four-steps-orientation", {
                y: 0,
                ease: "none",
                duration: 0.5,
                onComplete: function () {
                  var d = 0;
                  gsap.utils.toArray(".four-steps-orientation .text, .four-steps-orientation ul li").forEach((box, i) => {
                    gsap.to(box, {
                      x: 0,
                      ease: "none",
                      duration: 0.5,
                      delay: d,
                    });
                    d += 0.2;
                  });
                },
              });
            },
          });
          $(".four-steps-gender").removeClass("step-current");
          $(".four-steps-orientation").addClass("step-current");
        });
      },
    });

    $(".btn-previous").on("click", function () {
      var stepCurrent = $(".step-current");
      if (stepCurrent.parent().hasClass("four-steps-wrapper")) {
        if (stepCurrent.hasClass("four-steps-age")) {
          $(".four-steps-relations").css("opacity", 1);
          gsap.to(".four-steps-age", {
            y: "100vh",
            ease: "none",
            duration: 0.5,
          });
          gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el, .four-steps-relations .text").forEach((el, i) => {
            gsap.to(el, {
              y: 0,
              transformOrigin: "center",
              ease: "none",
              duration: 0.5,
            });
            gsap.to(".four-steps-relations ul li, .four-steps-relations .text", {
              rotate: 0,
              transformOrigin: "center",
              ease: "none",
              duration: 0.5,
            });
          });
          $(".four-steps-age").removeClass("step-current");
          $(".four-steps-relations").addClass("step-current");
          $(".btn-previous").css("opacity", 0);
        } else if (stepCurrent.hasClass("four-steps-gender")) {
          gsap.to(".four-steps-gender", {
            y: "100vh",
            ease: "none",
            duration: 0,
          });
          gsap.to(".four-steps-age ul li.active label", {
            scale: 1,
            ease: "none",
            duration: 1,
          });
          $(".four-steps-gender").removeClass("step-current");
          $(".four-steps-age .container").css("overflow", "auto");
          $(".four-steps-age").css("opacity", 1).addClass("step-current");
        } else {
          $(".four-steps-gender").css("opacity, 1");
          gsap.to(".four-steps-gender", {
            y: 0,
            ease: "none",
            duration: 0.5,
          });
          gsap.to(".four-steps-orientation", {
            y: "100vh",
            ease: "none",
            duration: 0.5,
          });
          $(".four-steps-orientation").removeClass("step-current");
          $(".four-steps-gender").addClass("step-current");
        }
      }
    });
  }

  function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
      setTimeout(() => {
        done();
      }, n);
    });
  }

  barba.init({
    debug: true,
    transitions: [
      {
        // sync: true,
        async leave(data) {
          const done = this.async();
          gsap.to(data.current.container, {
            opacity: 0,
            duration: 1,
          });
          await delay(100);
          done();
        },

        async enter(data) {
          gsap.to(data.next.container, {
            opacity: 1,
            duration: 2,
          });
        },

        async once(data) {
          gsap.to(data.next.container, {
            opacity: 1,
            duration: 2,
          });
        },
      },
    ],
    // transitions: [
    //   {
    //     leave: (data) => {
    //       return new Promise((resolve) => {
    //         gsap.to(data.current.container, {
    //           opacity: 0,
    //           duration: 1,
    //         });
    //       });
    //     },
    //     enter: (data) => {
    //       gsap.fromTo(
    //         data.next.container,
    //         { opacity: 0 },
    //         {
    //           opacity: 1,
    //           duration: 50,
    //         }
    //       );
    //     },
    //   },
    // ],
  });

  // barba.hooks.afterEnter((data) => {
  //   console.log(data.next.container);

  //   gsap.to(data.next.container.querySelector(".test-screen"), { y: 0, duration: 0.5 });
  //   setTimeout(() => {
  //     window.dispatchEvent(new Event("resize"));
  //   }, 100);
  //   // var pageWrap = document.querySelector(".page-wrapper"),
  //   //   test = document.querySelector(".test-screen"),
  //   //   colorStart = data.next.container.dataset.start,
  //   //   colorEnd = data.next.container.dataset.start;
  //   // console.log(test, colorStart, colorEnd);
  //   // gsap.fromTo(
  //   //   ".page-wrapper",
  //   //   { backgroundColor: colorStart },
  //   //   {
  //   //     backgroundColor: colorEnd,
  //   //     duration: 1,
  //   //   }
  //   // );
  // });
});
