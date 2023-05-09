jQuery(document).ready(function ($) {
  imagesLoaded("body", function () {
    ScrollTrigger.refresh();
  });

  // if (document.querySelector("[data-barba]")) {
  //   function delay(n) {
  //     n = n || 2000;
  //     return new Promise((done) => {
  //       setTimeout(() => {
  //         done();
  //       }, n);
  //     });
  //   }

  //   barba.init({
  //     debug: true,
  //     transitions: [
  //       {
  //         // sync: true,
  //         async leave(data) {
  //           console.log(data);
  //           const done = this.async();
  //           gsap.to(data.current.container, {
  //             opacity: 0,
  //             y: "-100%",
  //             duration: 1,
  //           });

  //           await delay(1000);
  //           done();
  //         },

  //         async enter(data) {
  //           gsap.to(data.next.container, {
  //             opacity: 1,
  //             duration: 1,
  //           });
  //           // gsap.fromTo(
  //           //   "body",
  //           //   { backgroundColor: data.next.container.dataset.start },
  //           //   {
  //           //     backgroundColor: data.next.container.dataset.end,
  //           //     duration: 1,
  //           //   }
  //           // );
  //           // gsap.to(".page-wrapper", {
  //           //   backgroundColor: "#652FEB",
  //           //   duration: 5,
  //           // });
  //         },

  //         async once(data) {
  //           gsap.to(data.next.container, {
  //             opacity: 1,
  //             duration: 1,
  //           });
  //         },
  //       },
  //     ],
  //   });

  //   barba.hooks.afterEnter((data) => {
  //     setTimeout(() => {
  //       window.dispatchEvent(new Event("resize"));
  //       animations();
  //     }, 500);
  //   });
  // }

  function animations() {
    // four-steps
    if (document.querySelector(".four-steps-wrapper")) {
      ScrollTrigger.matchMedia({
        "(min-width: 1024px)": function () {
          // relations
          $(".four-steps-relations label").on("click", function () {
            var degrees = [9.73, -3.95, 3.75, -3.74, 2.67, 4.67],
              degreeText = -5.94;
            var duration = 0.4;
            gsap.utils.toArray(".four-steps-relations ul li").forEach((box, i) => {
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
          $(".four-steps-orientation label").on("click", function () {});
        },

        "(max-width: 1023px)": function () {
          // relations
          $(".four-steps-relations label").on("click", function () {
            var degrees = [9.73, -3.95, 3.75, -3.74, 2.67, 4.67],
              degreeText = -5.94;
            var duration = 0.4;
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

    if (document.querySelector(".test-step--type1")) {
      ScrollTrigger.matchMedia({
        "(min-width: 1024px)": function () {
          var scrollers = document.querySelectorAll(".test-scroller li");
          scrollers.forEach((li, i) => {
            gsap.to(li, {
              scrollTrigger: {
                scroller: ".test-step-inner",
                trigger: li,
                start: "top 200",
                end: "top top-=50",
                toggleClass: "active",
                onEnter: function () {
                  if ($("#testChoices").length) {
                    $("#testChoices").get(0).reset();
                  }
                },
              },
            });
          });
        },
        "(max-width: 1023px)": function () {
          var scrollers = document.querySelectorAll(".test-scroller li");
          scrollers.forEach((li, i) => {
            gsap.to(li, {
              scrollTrigger: {
                scroller: ".test-step-inner",
                trigger: li,
                start: "top center",
                end: "top top-=50",
                toggleClass: "active",
                onEnter: function () {
                  if ($("#testChoices").length) {
                    $("#testChoices").get(0).reset();
                  }
                },
              },
            });
          });
        },
      });

      $(".test-step--type1 .test-options label").on("click", function () {
        var activeQ = $(".test-scroller li.active"),
          activeVal = $("[name=test]:checked").val(),
          totalQ = $(".test-scroller li").length;
        if (activeQ.length) {
          var input = activeQ.find("input");
          input.addClass("filled").val(activeVal);
        }
        console.log($(".test-scroller .filled").length);
        if ($(".test-scroller .filled").length === totalQ) {
          $("#testChoices").addClass("disabled");
          if ($("#testChoices").length) {
            $("#testChoices").get(0).reset();
          }
          $(".test-step-inner").animate({ scrollTop: $(".test-scroller").height() }, 1000, function () {
            let timeline = gsap
              .timeline()
              .to(".test-options li span", {
                color: "transparent",
                duration: 0.5,
              })
              .to(
                ".test-options li:nth-child(1)",
                {
                  y: 160,
                  duration: 0.5,
                },
                "-=0.5"
              )
              .to(
                ".test-options li:nth-child(2)",
                {
                  y: 80,
                  duration: 0.5,
                },
                "-=0.5"
              )
              .to(
                ".test-options li:nth-child(4)",
                {
                  y: -80,
                  duration: 0.4,
                },
                "-=0.5"
              )
              .to(
                ".test-options li:nth-child(5)",
                {
                  y: -160,
                  duration: 0.4,
                },
                "-=0.5"
              )
              .to(
                ".test-options li:nth-child(1),.test-options li:nth-child(2),.test-options li:nth-child(3),.test-options li:nth-child(4)",
                {
                  opacity: 0,
                  duration: 0.1,
                },
                "-=0.1"
              )
              .to(".test-options li:nth-child(5) figure", {
                scale: 330,
                duration: 2,
              })
              .to(
                ".test-step",
                {
                  opacity: 0,
                  duration: 0.5,
                },
                "-=0.5"
              );
          });
        } else {
          setTimeout(() => {
            $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() + activeQ.height() + 120 }, 500);
          }, 200);
        }
      });
    }
  }

  animations();
});
