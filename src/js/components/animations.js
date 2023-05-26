jQuery(document).ready(function ($) {
  imagesLoaded("body", function () {
    ScrollTrigger.refresh();
  });

  function progressInit() {
    var currentStepContainer = $("[data-step]");
    var currentStep = parseInt(currentStepContainer.data("step"));
    $(".test-progress .steps .step").each(function () {
      var index = $(".test-progress .steps .step").index($(this)) + 1;
      if (index < currentStep) {
        $(this).addClass("active");
      }
    });
    var progressWidth;
    if (currentStep === 2) {
      progressWidth = "5%";
    } else {
      progressWidth = (currentStep - 2) * 9.5 + 5 + "%";
    }
    $(".test-progress .steps .steps-progress .inner").css("width", progressWidth);
  }
  progressInit();

  function progress() {
    var progressStep = 0.95;
    if ($(".four-steps-wrapper").length) {
      progressStep = 1.25;
    }
    if ($(".test-step--type2").length) {
      progressStep = 4.75;
    }
    var progressCurrent = document.querySelector(".steps-progress .inner").style.width ? parseFloat(document.querySelector(".steps-progress .inner").style.width) : 0,
      progressNext = progressCurrent + progressStep + "%";
    $(".test-progress .steps .steps-progress .inner").css("width", progressNext);
  }

  function relationsAge() {
    var degrees = [9.73, -3.95, 3.75, -3.74, 2.67, 4.67, -5.94],
      degreeText = -5.94;
    gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .text").forEach((box, i) => {
      gsap.to(box, {
        rotate: degrees[i],
        transformOrigin: "center",
        ease: "none",
        duration: 0.3,
        onComplete: function () {
          gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el, .four-steps-relations .text").forEach((box, i) => {
            gsap.to(box, {
              y: "100vh",
              transformOrigin: "center",
              ease: "none",
              duration: 0.7,
              onComplete: function () {
                $(".btn-previous").css("opacity", 1);
                $(".four-steps-relations").css("opacity", 0).removeClass("step-current");
                gsap.to(".four-steps-age", {
                  y: 0,
                  ease: "none",
                  duration: 0.5,
                  onComplete: function () {
                    if ($(window).width() < 1024) {
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
                    }
                  },
                });
                $(".four-steps-age").addClass("step-current");
              },
            });
          });
        },
      });
    });
  }

  function animations() {
    // four-steps
    if (document.querySelector(".four-steps-wrapper")) {
      // relations
      $(".four-steps-relations label").on("mouseup", function () {
        progress();
        relationsAge();
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

      $(".four-steps-age label").on("mouseup", function () {
        progress();
        var currentLabel = $(this);
        $(".four-steps-age .container").css("overflow", "hidden");
        const timelineAge = gsap
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
            duration: 0.5,
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
              $(".four-steps-age").removeClass("step-current");
              $(".four-steps-gender").addClass("step-current");
            },
          });
      });

      // gender
      $(".four-steps-gender label").on("mouseup", function () {
        progress();
        gsap.to(".four-steps-gender", {
          y: "-100vh",
          ease: "none",
          duration: 1,
        });
        gsap.to(
          ".four-steps-orientation",
          {
            y: 0,
            ease: "none",
            duration: 1,
            onComplete: function () {
              $(".four-steps-gender").css("opacity, 0");
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
              $(".four-steps-gender").removeClass("step-current");
              $(".four-steps-orientation").addClass("step-current");
            },
          },
          "-=1"
        );
      });

      // orientation
      $(".four-steps-orientation label").on("mouseup", function () {
        progress();
        $(".test-progress .steps .step:nth-child(1)").addClass("active");
        gsap.to(".four-steps-orientation", {
          y: "-100vh",
          opacity: 0,
          ease: "none",
          duration: 1,
        });
        gsap.to(".four-steps-wrapper", {
          backgroundColor: "#FF9072",
          duration: 1,
          onComplete: function () {
            $(".btn-next").get(0).click();
          },
        });
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

    if (document.querySelector(".test-step")) {
      var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };
      function preventDefault(e) {
        e.preventDefault();
      }
      function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
          preventDefault(e);
          return false;
        }
      }
      var supportsPassive = false;
      try {
        window.addEventListener(
          "test",
          null,
          Object.defineProperty({}, "passive", {
            get: function () {
              supportsPassive = true;
            },
          })
        );
      } catch (e) {}
      var wheelOpt = supportsPassive ? { passive: false } : false;
      var wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";

      function disableScroll() {
        window.addEventListener("DOMMouseScroll", preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener("touchmove", preventDefault, wheelOpt); // mobile
        window.addEventListener("keydown", preventDefaultForScrollKeys, false);
      }
      disableScroll();

      $(".test-options ul li label")
        .on("mouseenter", function () {
          $(this).addClass("hover");
        })
        .on("mouseleave", function () {
          $(this).removeClass("hover");
        });

      gsap.to(".test-step", {
        y: 0,
        opacity: 1,
        duration: 0.5,
        ease: "none",
        onComplete: function () {
          gsap.to(".test-options", {
            opacity: 1,
            duration: 0.5,
            ease: "none",
          });
        },
      });

      var scrollers = document.querySelectorAll(".test-scroller li");
      scrollers.forEach((li, i) => {
        gsap.to(li, {
          scrollTrigger: {
            scroller: ".test-step-inner",
            trigger: li,
            start: "top 40%",
            end: "top top-=50",
            toggleClass: "active",
            onEnter: function () {
              $(".test-options").removeClass("selected");
              if ($("#testChoices").length) {
                $("#testChoices").get(0).reset();
              }
            },
          },
        });
      });

      $(".test-scroller input").each(function () {
        if ($(this).val() !== "") {
          $(this).addClass("filled");
        }
      });
    }

    if (document.querySelector(".test-step--type1")) {
      var animating = false;
      $(".test-step--type1 .test-options label").on("click", function (e) {
        if (e.target.tagName === "INPUT" && !animating) {
          animating = true;
          progress();
          $(this).removeClass("hover");
          var activeQ = $(".test-scroller li.active"),
            activeVal = $("[name=test]:checked").val(),
            totalQ = $(".test-scroller li").length;
          if (activeQ.length) {
            var input = activeQ.find("input");
            input.addClass("filled").val(activeVal);
          }
          if ($(".test-scroller .filled").length === totalQ) {
            $(".test-progress .steps .step.active").next().addClass("active");
            $("#testChoices").addClass("disabled");
            gsap.to(".test-progress", {
              opacity: 0,
              duration: 0.5,
            });
            if ($("#testChoices").length) {
              $("#testChoices").get(0).reset();
            }
            if ($(window).width() >= 1024) {
              $(".test-step-inner").animate({ scrollTop: $(".test-scroller").height() }, 1000, function () {
                const timeline = gsap
                  .timeline()
                  .to(".test-options li span", {
                    color: "transparent",
                    duration: 0.5,
                  })
                  .to(
                    ".test-options li path",
                    {
                      fill: "#F9F3E9",
                      duration: 0.5,
                    },
                    "-=0.5"
                  )
                  .to(
                    ".test-options li:nth-child(1)",
                    {
                      y: 160,
                      duration: 0.5,
                    },
                    "-=1"
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
                  .to(".step-main-wrapper", {
                    opacity: 0,
                    duration: 0.5,
                  })
                  .to(
                    "body",
                    {
                      backgroundColor: "#F9F3E9",
                      duration: 0.5,
                      onComplete: function () {
                        $(".btn-next").get(0).click();
                      },
                    },
                    "-=0.5"
                  );
              });
            } else {
              const timeline = gsap
                .timeline()
                .to(".test-options li path", {
                  fill: "#F9F3E9",
                  duration: 0.5,
                })
                .to(".test-options li:nth-child(3) figure svg", {
                  scale: 25,
                  y: "35%",
                  transformOrigin: "center bottom",
                  duration: 2,
                })
                .to(
                  ".step-main-wrapper",
                  {
                    opacity: 0,
                    duration: 0.5,
                  },
                  "-=0.5"
                )
                .to(
                  "body",
                  {
                    backgroundColor: "#F9F3E9",
                    duration: 0.5,
                    onComplete: function () {
                      $(".btn-next").get(0).click();
                    },
                  },
                  "-=0.5"
                );
            }
          } else {
            setTimeout(() => {
              $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() + activeQ.outerHeight() }, 500, function () {
                animating = false;
              });
            }, 200);
          }
        }
      });

      $(document).on("click", ".btn-previous", function (e) {
        if (!$(".test-scroller li:first-child").hasClass("active")) {
          e.preventDefault();
          var prevQ = $(".test-scroller li.active").prev("li");
          $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() - prevQ.outerHeight() }, 500, function () {
            var activeQ = $(".test-scroller li.active"),
              activeValue = parseInt(activeQ.find("input").val());
            // console.log(activeValue);
            $(".test-options").addClass("selected");
            $(".test-options input").each(function () {
              if (parseInt($(this).val()) === activeValue) {
                $(this).prop("checked", true);
              }
            });
          });
        }
      });
    }

    if (document.querySelector(".test-step--type2")) {
      $(".test-step--type2 .test-options label").on("click", function (e) {
        if (e.target.tagName === "INPUT") {
          progress();
          $(".test-options").addClass("selected");
          var activeLabel = $(this);
          var nextColor = $(".test-step").attr("data-nextcolor");
          activeLabel.removeClass("hover");
          var activeQ = $(".test-scroller li.active"),
            activeVal = $("[name=test]:checked").val(),
            totalQ = $(".test-scroller li").length;
          if (activeQ.length) {
            var input = activeQ.find("input");
            input.addClass("filled").val(activeVal);
          }
          if ($(".test-scroller .filled").length === totalQ) {
            $("#testChoices").addClass("disabled");
            $(".test-progress .steps .step.active").next().addClass("active");

            gsap.to(".test-progress", {
              opacity: 0,
              duration: 0.5,
            });

            const timeline = gsap
              .timeline()
              .to(".test-scroller", {
                opacity: 0,
                duration: 0.5,
              })
              .to(
                activeLabel.find("path"),
                {
                  fill: "#454FDB",
                  duration: 0.5,
                },
                "-=0.5"
              )
              .to(activeLabel.find("svg"), {
                fill: nextColor,
                scale: 30,
                y: "-20vh",
                transformOrigin: "center",
                duration: 2,
              })
              .to(
                ".step-main-wrapper",
                {
                  opacity: 0,
                  duration: 0.5,
                },
                "-=0.5"
              )
              .to(
                "body",
                {
                  backgroundColor: nextColor,
                  duration: 0.5,
                  onComplete: function () {
                    $(".btn-next").get(0).click();
                  },
                },
                "-=0.5"
              );
          } else {
            if ($(window).width() >= 1024) {
              const timeline = gsap.timeline().to(activeLabel.find("figure"), {
                scale: 2,
                transformOrigin: "center bottom",
                duration: 0.25,
                onComplete: function () {
                  gsap.to(activeLabel.find("figure"), {
                    scale: 3,
                    y: "-120vh",
                    duration: 0.25,
                  });
                  $("#testChoices").get(0).reset();
                  $(".images-scroller").animate({ scrollTop: $(".images-scroller").scrollTop() + $(window).height() }, 300);
                  $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() + activeQ.outerHeight() }, 300, function () {
                    gsap.to($(".test-scroller li.active").prev(), {
                      top: 0,
                      duration: 0,
                    });
                    gsap.to($(".test-options figure[style]"), {
                      scale: 1,
                      y: 0,
                      duration: 0,
                    });
                  });
                },
              });
            } else {
              setTimeout(() => {
                $("#testChoices").get(0).reset();
                $(".test-options").removeClass("selected");
                $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() + activeQ.outerHeight() }, 500, function () {
                  gsap.to($(".test-scroller li.active").prev(), {
                    top: 0,
                    duration: 0,
                  });
                });
              }, 700);
            }
          }
        }
      });

      $(document).on("click", ".btn-previous", function (e) {
        if (!$(".test-scroller li:first-child").hasClass("active")) {
          e.preventDefault();
          var prevQ = $(".test-scroller li.active").prev("li");
          $(".images-scroller").animate({ scrollTop: $(".images-scroller").scrollTop() - $(window).height() }, 500);
          $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() - prevQ.outerHeight() }, 500, function () {
            var activeQ = $(".test-scroller li.active"),
              activeValue = parseInt(activeQ.find("input").val());
            $(".test-options").addClass("selected");
            $(".test-options input").each(function () {
              if (parseInt($(this).val()) === activeValue) {
                $(this).prop("checked", true);
              }
            });
          });
        }
      });
    }
  }

  animations();
});
