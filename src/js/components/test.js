jQuery(document).ready(function ($) {
  imagesLoaded("body", function () {
    ScrollTrigger.refresh();
  });

  function goToStep3() {
    $(".btn-previous").css("opacity", 1).addClass("btn-previous-active");
    $(".four-steps-gender").removeClass("step-current");
    $(".four-steps-age").addClass("step-current");

    gsap.set(".four-steps-gender", {
      y: "100vh",
      opacity: 0,
    });
    gsap.set(".four-steps-age", {
      y: 0,
    });
    gsap.utils.toArray(".four-steps-age .col-text").forEach((box, i) => {
      gsap.set(box, {
        x: 0,
      });
    });
    gsap.to(".test-progress .steps .steps-progress .inner", {
      width: "3.333333%",
      duration: 0.1,
    });
  }

  function goToStep2() {
    $(".btn-previous").css("opacity", 1).addClass("btn-previous-active");
    $(".four-steps-gender").removeClass("step-current");
    $(".four-steps-orientation").addClass("step-current");

    gsap.set(".four-steps-gender", {
      y: "100vh",
      opacity: 0,
    });
    gsap.set(".four-steps-orientation", {
      y: 0,
      opacity: 1,
    });
    progress();
  }

  function progressInit() {
    var currentStepContainer = $("[data-step]");
    var currentStep = parseInt(currentStepContainer.data("step"));
    $(".test-progress .steps .step").each(function () {
      var index = $(".test-progress .steps .step").index($(this)) + 1;
      if (index < currentStep) {
        $(this).addClass("active");
      }
    });
    var progressWidth = 0;
    if (currentStep !== 1) {
      if (document.querySelector(".test-step--type2")) {
        var filled = $(".test-scroller input.filled").length;
        if (filled > 0) {
          progressWidth = (currentStep - 2) * 16 + 17.33 + 1.333 + "%";
        } else {
          progressWidth = (currentStep - 2) * 16 + 17.33 + "%";
        }
      } else if (document.querySelector(".test-step--type1")) {
        var filled = $(".test-scroller input.filled").length;
        if (filled > 0) {
          progressWidth = (currentStep - 2) * 16 + 4 + 1.333 * 9 + "%";
        } else {
          progressWidth = (currentStep - 2) * 16 + 4 + "%";
        }
      } else if (document.querySelector(".test-step--type3") || document.querySelector(".test-step--type4")) {
        progressWidth = (currentStep - 2) * 16 + 4 + "%";
      } else if (document.querySelector(".test-step--type5")) {
        var filled = $("input.filled").length;
        if (filled > 0) {
          progressWidth = (currentStep - 2) * 16 + 4 + 1.6 * 9 + "%";
        } else {
          progressWidth = (currentStep - 2) * 16 + 4 + "%";
        }
      }
    }
    $(".test-progress .steps .steps-progress .inner").css("width", progressWidth);
  }
  progressInit();

  function progress() {
    var progressStep = 1.3333;
    if ($(".test-step--type5").length) {
      progressStep = 1.6;
    }
    var progressCurrent = document.querySelector(".steps-progress .inner").style.width ? parseFloat(document.querySelector(".steps-progress .inner").style.width) : 0,
      progressNext = progressCurrent + progressStep + "%";
    gsap.to(".test-progress .steps .steps-progress .inner", {
      width: progressNext,
      duration: 0.1,
    });
  }
  function progressBack() {
    var progressStep = 1.333;
    if ($(".test-step--type5").length) {
      progressStep = 1.6;
    }
    var progressCurrent = document.querySelector(".steps-progress .inner").style.width ? parseFloat(document.querySelector(".steps-progress .inner").style.width) : 0,
      progressNext = progressCurrent - progressStep + "%";
    gsap.to(".test-progress .steps .steps-progress .inner", {
      width: progressNext,
      duration: 0.1,
    });
  }

  function animations() {
    // four-steps
    if (document.querySelector(".four-steps-wrapper")) {
      if (window.location.href.indexOf("prev=") !== -1) {
        goToStep3();
      } else {
        if (window.location.href.indexOf("q=") !== -1) {
          goToStep2();
        }
      }

      // gender
      $(".four-steps-gender label").on("mouseup", function () {
        progress();
        gsap.to(".four-steps-gender", {
          y: "-100vh",
          opacity: 0,
          ease: "none",
          duration: 0.5,
        });
        gsap.to(".four-steps-orientation", {
          y: 0,
          ease: "none",
          duration: 0.5,
          onComplete: function () {
            $(".btn-previous").css("opacity", 1).addClass("btn-previous-active");
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
        });
      });

      // orientation
      $(".four-steps-orientation label").on("mouseup", function () {
        progress();

        gsap.to(".four-steps-orientation", {
          y: "-100vh",
          opacity: 0,
          ease: "none",
          duration: 0.5,
          onComplete: function () {
            gsap.to(".four-steps-age", {
              y: 0,
              ease: "none",
              duration: 0.5,
              onComplete: function () {
                if ($(window).width() < 1024) {
                  var d = 0;
                  gsap.utils.toArray(".four-steps-age .col-text").forEach((box, i) => {
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
            $(".four-steps-orientation").removeClass("step-current");
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

      function test_4_steps() {
        let _this = $(this);

        let data = {
          action: "test_4_steps",
          //'relation': $('input[name="relations"]:checked').val(),
          age: $('input[name="age"]:checked').val(),
          gender: $('input[name="gender"]:checked').val(),
          orientation: $('input[name="orientation"]:checked').val(),
        };

        $.ajax({
          url: "/wp-admin/admin-ajax.php",
          data: data,
          type: "POST",
          success: function (data) {
            if (data) {
              console.log(data);
              let result = $.parseJSON(data);
              document.cookie = "result_id=" + result[0] + "; path=/";
              window.location.href = result[1];
            } else {
              console.log("Error!");
            }
          },
        });
      }

      function chooseAge(label) {
        progress();
        $(".test-progress .steps .step:nth-child(1)").addClass("active");
        $(".four-steps-age .btn-next-wrapper").css("z-index", 1);

        $(".four-steps-age .container").css("overflow", "hidden");
        const timelineAge = gsap
          .timeline()
          .to(label, {
            scale: 5,
            opacity: 1,
            duration: 1,
            ease: "none",
            onComplete: function () {
              var d = 0;
              test_4_steps();
              // $(".btn-next").get(0).click();
            },
          })
          .to(label, {
            scale: 10,
            duration: 1,
            ease: "none",
          });
      }

      $(".four-steps-age label").on("mouseup", function () {
        var currentLabel = $(this);
        chooseAge(currentLabel);
      });

      $(".four-steps-age .btn-next-wrapper .btn").on("click", function () {
        $(".four-steps-age ul li.active input").prop("checked", true);
        var currentLabel = $(".four-steps-age ul li.active label");
        chooseAge(currentLabel);
      });

      $(".btn-previous").on("click", function () {
        progressBack();
        var stepCurrent = $(".step-current");
        if (stepCurrent.parent().hasClass("four-steps-wrapper")) {
          if (stepCurrent.hasClass("four-steps-age")) {
            $(".four-steps-orientation").css("opacity", 1);
            gsap.to(".four-steps-age", {
              y: "100vh",
              ease: "none",
              duration: 0.5,
            });
            gsap.to(".four-steps-orientation", {
              y: "0",
              opacity: 1,
              ease: "none",
              duration: 0.5,
            });
            $(".four-steps-age").removeClass("step-current");
            $(".four-steps-orientation").addClass("step-current");
          } else if (stepCurrent.hasClass("four-steps-orientation")) {
            gsap.to(".four-steps-orientation", {
              y: "100vh",
              ease: "none",
              duration: 0.3,
            });
            gsap.to(".four-steps-gender", {
              opacity: 1,
              y: 0,
              ease: "none",
              duration: 0.3,
              delay: 0.3,
            });
            $(".btn-previous").css("opacity", 0).removeClass("btn-previous-active");
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
      } catch (e) { }
      var wheelOpt = supportsPassive ? { passive: false } : false;
      var wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";

      function disableScroll() {
        window.addEventListener("DOMMouseScroll", preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener("touchmove", preventDefault, wheelOpt); // mobile
        window.addEventListener("keydown", preventDefaultForScrollKeys, false);
      }
      disableScroll();

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

      $(".test-scroller li:last-child").addClass("last");
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

      $(".test-scroller input[readonly]").each(function () {
        if ($(this).val() !== "") {
          $(this).addClass("filled");
        }
      });
      progressInit();
    }

    if (document.querySelector(".test-step--type1")) {
      var totalQ = $(".test-scroller li").length;
      if ($(".test-scroller .filled").length === totalQ) {
        $(".test-step-inner").animate({ scrollTop: $(".test-scroller .last").outerHeight() * 9 }, 0);
        setTimeout(() => {
          var activeQ = $(".test-scroller li.last"),
            activeValue = parseInt(activeQ.find("input").val());
          $(".test-options").addClass("selected");
          $(".test-options input").each(function () {
            if (parseInt($(this).val()) === activeValue) {
              $(this).prop("checked", true);
            }
          });
        }, 200);
      }

      document.querySelectorAll(".test-options ul li label").forEach((label) => {
        var lottieHover = label.querySelector(".hover");
        var lottieClick = label.querySelector(".click");

        label.addEventListener("mouseenter", function () {
          lottieHover.play();
        });
        label.addEventListener("mouseleave", function () {
          lottieHover.stop();
        });
        label.addEventListener("click", function () {
          lottieHover.style.opacity = 0;
          lottieClick.play();
          setTimeout(() => {
            lottieClick.stop();
            lottieClick.removeAttribute("style");
          }, 500);
        });
      });

      var animating = false;
      $(".test-step--type1 .test-options label").on("click", function (e) {
        if (e.target.tagName === "INPUT" && !animating) {
          animating = true;
          progress();
          var activeQ = $(".test-scroller li.active"),
            activeVal = $("[name=test]:checked").val();

          if (activeQ.length) {
            var input = activeQ.find("input");
            input.addClass("filled").val(activeVal);
          }

          if (activeQ.hasClass("last")) {
            $(".test-options").removeClass("selected");
            $("#testChoices").addClass("disabled");
            gsap.to(".test-progress", {
              opacity: 0,
              duration: 0.3,
            });
            if ($("#testChoices").length) {
              $("#testChoices").get(0).reset();
            }
            if ($(window).width() >= 1024) {
              var spacer = 80;
              if ($(window).width() >= 1024 && $(window).width() < 1600) {
                spacer = 59;
              }
              $(".test-step-inner").animate({ scrollTop: $(".test-scroller").height() }, 300);
              const timeline = gsap
                .timeline()
                .to(".test-options li span", {
                  color: "transparent",
                  duration: 0.3,
                })
                .to(
                  ".test-options li path",
                  {
                    fill: "#F9F3E9",
                    duration: 0.3,
                  },
                  "-=0.3"
                )
                .to(
                  ".test-options li:nth-child(1)",
                  {
                    y: spacer * 2,
                    duration: 0.6,
                  },
                  "-=0,6"
                )
                .to(
                  ".test-options li:nth-child(2)",
                  {
                    y: spacer,
                    duration: 0.6,
                  },
                  "-=0.6"
                )
                .to(
                  ".test-options li:nth-child(4)",
                  {
                    y: spacer * -1,
                    duration: 0.6,
                  },
                  "-=0.6"
                )
                .to(
                  ".test-options li:nth-child(5)",
                  {
                    y: spacer * -2,
                    duration: 0.6,
                  },
                  "-=0.6"
                )
                .to(".test-options li:nth-child(1),.test-options li:nth-child(2),.test-options li:nth-child(3),.test-options li:nth-child(4), .test-options li:nth-child(5) lottie-player", {
                  opacity: 0,
                  duration: 0.1,
                })
                .to(".test-options li:nth-child(5) svg", {
                  opacity: 1,
                  duration: 0.1,
                })
                .to(".test-options li:nth-child(5) figure", {
                  scale: 330,
                  duration: 2,
                })
                .to(".step-main-wrapper", {
                  opacity: 0,
                  duration: 0.3,
                })
                .to(
                  "body",
                  {
                    backgroundColor: "#F9F3E9",
                    duration: 0.3,
                    onComplete: function () {
                      $(document).trigger("saveData");
                      $(document).trigger("saveData");
                      $(".btn-next").get(0).click();
                    },
                  },
                  "-=0.3"
                );
            } else {
              const timeline = gsap
                .timeline()
                .to(".test-final", {
                  zIndex: 9999,
                  duration: 0,
                })
                .to(".test-final svg", {
                  opacity: 1,
                  duration: 0,
                })
                .to(".test-final svg", {
                  scale: 0.3,
                  duration: 1,
                })
                .to(
                  ".test-final svg",
                  {
                    scale: 1,
                    duration: 1.5,
                  },
                  "-=0.5"
                )
                .to(".step-main-wrapper", {
                  opacity: 0,
                  duration: 0.3,
                })
                .to(
                  "body",
                  {
                    backgroundColor: "#F9F3E9",
                    duration: 0.3,
                    onComplete: function () {
                      $(document).trigger("saveData");
                      $(".btn-next").get(0).click();
                    },
                  },
                  "-=0.3"
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
        progressBack();
        if (!$(".test-scroller li:first-child").hasClass("active")) {
          e.preventDefault();
          var prevQ = $(".test-scroller li.active").prev("li");
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

    if (document.querySelector(".test-step--type2")) {
      var totalQ = $(".test-scroller li").length;
      if ($(".test-scroller .filled").length === totalQ) {
        $(".images-scroller").animate({ scrollTop: $(".images-scroller").scrollTop() + $(window).height() }, 300);
        $(".test-step-inner").animate({ scrollTop: $(".test-scroller .last").outerHeight() }, 0);
        setTimeout(() => {
          var activeQ = $(".test-scroller li.last"),
            activeValue = parseInt(activeQ.find("input").val());
          $(".test-options").addClass("selected");
          $(".test-options input").each(function () {
            if (parseInt($(this).val()) === activeValue) {
              $(this).prop("checked", true);
            }
          });
        }, 200);
      }

      document.querySelectorAll(".test-options ul li label").forEach((label) => {
        var lottieHover = label.querySelector(".flame-lightblue .hover");
        var lottieClick = label.querySelector(".flame-lightblue .click");

        if ($(window).width() < 768) {
          (lottieHover = label.querySelector(".flame-blue .hover")), (lottieClick = label.querySelector(".flame-blue .click"));
        }

        label.addEventListener("mouseenter", function () {
          lottieHover.play();
        });
        label.addEventListener("mouseleave", function () {
          lottieHover.stop();
        });
        label.addEventListener("click", function () {
          lottieHover.style.opacity = 0;
          lottieClick.play();
          setTimeout(() => {
            lottieClick.stop();
            lottieClick.removeAttribute("style");
          }, 500);
        });
      });

      $(".test-step--type2 .test-options label").on("click", function (e) {
        if (e.target.tagName === "INPUT") {
          progress();
          var activeLabel = $(this);
          var nextColor = $(".test-step").attr("data-nextcolor");
          var activeQ = $(".test-scroller li.active"),
            activeVal = $("[name=test]:checked").val();
          if (activeQ.length) {
            var input = activeQ.find("input");
            input.addClass("filled").val(activeVal);
          }
          if (activeQ.hasClass("last")) {
            setTimeout(() => {
              $(".test-options").removeClass("selected");
              $("#testChoices").addClass("disabled");
              $(".test-progress .steps .step.active").next().addClass("active");
              const timeline = gsap
                .timeline()
                .to(".test-progress, .test-scroller, .test-options", {
                  opacity: 0,
                  duration: 0.3,
                })
                .to(
                  ".test-final",
                  {
                    zIndex: 9999,
                    duration: 0,
                  },
                  "-=0.3"
                )
                .to(".test-final svg", {
                  opacity: 1,
                  duration: 0,
                })
                .to(".test-final svg", {
                  scale: 0.3,
                  duration: 1,
                })
                .to(
                  ".test-final svg",
                  {
                    scale: 1,
                    duration: 1.5,
                  },
                  "-=0.5"
                )
                .to(
                  ".test-final svg path",
                  {
                    fill: nextColor,
                    duration: 1,
                  },
                  "-=2"
                )
                .to(
                  "body",
                  {
                    backgroundColor: nextColor,
                    duration: 0.5,
                  },
                  "-=1"
                )
                .to(
                  ".step-main-wrapper",
                  {
                    opacity: 0,
                    duration: 0.5,
                    onComplete: function () {
                      $(document).trigger("saveData");
                      if (page === 10) {
                        $(document).trigger("submitQuiz");
                      } else {
                        $(".btn-next").get(0).click();
                      }
                    },
                  },
                  "-=0.2"
                );
            }, 600);
          } else {
            if ($(window).width() >= 1024) {
              const timeline = gsap.timeline().to(activeLabel.find("figure svg"), {
                scale: 2,
                transformOrigin: "center bottom",
                duration: 0.25,
                delay: 0.7,
                onComplete: function () {
                  gsap.to(activeLabel.find("figure svg"), {
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
                    gsap.to($(".test-options figure svg"), {
                      scale: 1,
                      y: "-50%",
                      x: "-50%",
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
        progressBack();
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

    if (document.querySelector(".test-step--type5")) {
      var totalQ = $(".test-scroller li").length;
      if ($(".test-scroller .filled").length === totalQ) {
        $(".test-step-inner").animate({ scrollTop: $(".test-scroller .last").outerHeight() * 9 }, 0);
        setTimeout(() => {
          var activeQ = $(".test-scroller li.last"),
            activeValue = activeQ.find("[type=radio]:checked").val();
          activeQ.find("input[type=radio]").each(function () {
            if (parseInt($(this).val()) === activeValue) {
              $(this).prop("checked", true);
            }
          });
        }, 200);
      }

      var animating = false;
      $(".test-step--type5 .options input[type=radio]").on("click", function (e) {
        var activeQ = $(".test-scroller li.active");
        if (activeQ.hasClass("last")) {
          gsap.to(".test-progress", {
            opacity: 0,
            duration: 0.3,
            onComplete: function () {
              $(document).trigger("saveData");
              $(".btn-next").get(0).click();
            }
          });

        } else {
          if (!animating) {
            animating = true;
            progress();
            if (activeQ.length) {
              var activeVal;
              var radios = activeQ.find("[type=radio]");
              radios.each(function () {
                if ($(this).prop("checked")) {
                  activeVal = $(this).val();
                }
              });
              var input = activeQ.find("input[readonly]");
              input.addClass("filled").val(activeVal);
            }

            setTimeout(() => {
              $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() + activeQ.outerHeight() }, 500, function () {
                animating = false;
              });
            }, 200);
          }
        }

      });

      $(document).on("click", ".test-step--type5 .btn-test-next .btn", function (e) {
        var activeQ = $(".test-scroller li.active");
        if (activeQ.hasClass("last")) {
          gsap.to(".test-progress", {
            opacity: 0,
            duration: 0.3,
            onComplete: function () {
              $(document).trigger("saveData");
              $(".btn-next").get(0).click();
            }
          });

        } else {
          if (!animating) {
            animating = true;
            progress();

            if (activeQ.length) {
              var activeVal;
              var radios = activeQ.find("[type=radio]");
              radios.each(function () {
                if ($(this).prop("checked")) {
                  activeVal = $(this).val();
                }
              });
              var input = activeQ.find("input[readonly]");
              input.addClass("filled").val(activeVal);
            }

            setTimeout(() => {
              $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() + activeQ.outerHeight() }, 500, function () {
                animating = false;
              });
            }, 200);
          }
        }
      });

      $(document).on("click", ".btn-previous", function (e) {
        progressBack();
        if (!$(".test-scroller li:first-child").hasClass("active")) {
          e.preventDefault();
          var prevQ = $(".test-scroller li.active").prev("li");
          $(".test-step-inner").animate({ scrollTop: $(".test-step-inner").scrollTop() - prevQ.outerHeight() }, 500, function () { });
        }
      });
    }
  }

  animations();
});
