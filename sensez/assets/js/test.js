jQuery(document).ready((function (e) {
  function t() {
    var t = 1.583;
    e(".four-steps-wrapper").length && (t = 1.25);
    var s = (document.querySelector(".steps-progress .inner").style.width ? parseFloat(document.querySelector(".steps-progress .inner").style.width) : 0) + t + "%";
    e(".test-progress .steps .steps-progress .inner").css("width", s)
  }

  imagesLoaded("body", (function () {
    ScrollTrigger.refresh()
  })), function () {
    var t = e("[data-step]"), s = parseInt(t.data("step"));
    e(".test-progress .steps .step").each((function () {
      e(".test-progress .steps .step").index(e(this)) + 1 < s && e(this).addClass("active")
    }));
    var o = 0;
    1 !== s && (document.querySelector(".test-step--type2") ? o = 19 * (s - 2) + 20.83 + "%" : document.querySelector(".test-step--type1") && (o = 19 * (s - 2) + 5 + "%")), e(".test-progress .steps .steps-progress .inner").css("width", o)
  }(), function () {
    if (document.querySelector(".four-steps-wrapper")) {
      e(".four-steps-relations label").on("mouseup", (function () {
        var s;
        t(), s = [9.73, -3.95, 3.75, -3.74, 2.67, 4.67, -5.94], gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .text").forEach((t, o) => {
          gsap.to(t, {
            rotate: s[o], transformOrigin: "center", ease: "none", duration: .3, onComplete: function () {
              gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el, .four-steps-relations .text").forEach((t, s) => {
                gsap.to(t, {
                  y: "100vh", transformOrigin: "center", ease: "none", duration: .7, onComplete: function () {
                    e(".btn-previous").css("opacity", 1), e(".four-steps-relations").css("opacity", 0).removeClass("step-current"), gsap.to(".four-steps-age", {
                      y: 0,
                      ease: "none",
                      duration: .5,
                      onComplete: function () {
                        if (e(window).width() < 1024) {
                          var t = 0;
                          gsap.utils.toArray(".four-steps-age .col-text, .four-steps-age ul li").forEach((e, s) => {
                            gsap.to(e, {x: 0, ease: "none", duration: .5, delay: t}), t += .2
                          })
                        }
                      }
                    }), e(".four-steps-age").addClass("step-current")
                  }
                })
              })
            }
          })
        })
      }));
      var s = document.querySelectorAll(".four-steps-age ul li");
      gsap.utils.toArray(s).forEach((e, t) => {
        gsap.to(e.querySelector("label"), {
          keyframes: {scale: [.5, 1, .5], opacity: [0, 1, 0]},
          ease: "none",
          scrollTrigger: {
            scroller: ".four-steps-age .container",
            trigger: e,
            start: "top bottom",
            end: "bottom top",
            scrub: 1,
            snap: {snapTo: e, duration: 1, delay: 0}
          }
        }), ScrollTrigger.create({
          scroller: ".four-steps-age .container",
          trigger: e,
          start: "top 50%",
          end: "bottom 50%",
          toggleActions: "play reverse none reverse",
          toggleClass: {targets: e, className: "active"}
        })
      }), e(".four-steps-age label").on("mouseup", (function () {
        t();
        var s = e(this);
        e(".four-steps-age .container").css("overflow", "hidden");
        gsap.timeline().to(s, {scale: 10, opacity: 1, duration: 1, ease: "none"}).to(".four-steps-age", {
          opacity: 0,
          duration: .5
        }, "-=0.5").to(".four-steps-gender", {
          y: 0, duration: .5, onComplete: function () {
            var t = 0;
            gsap.utils.toArray(".four-steps-gender .text, .four-steps-gender ul li").forEach((e, s) => {
              gsap.to(e, {x: 0, ease: "none", duration: .5, delay: t}), t += .2
            }), e(".four-steps-age").removeClass("step-current"), e(".four-steps-gender").addClass("step-current")
          }
        })
      })), e(".four-steps-gender label").on("mouseup", (function () {
        t(), gsap.to(".four-steps-gender", {
          y: "-100vh",
          ease: "none",
          duration: 1
        }), gsap.to(".four-steps-orientation", {
          y: 0, ease: "none", duration: 1, onComplete: function () {
            e(".four-steps-gender").css("opacity, 0");
            var t = 0;
            gsap.utils.toArray(".four-steps-orientation .text, .four-steps-orientation ul li").forEach((e, s) => {
              gsap.to(e, {x: 0, ease: "none", duration: .5, delay: t}), t += .2
            }), e(".four-steps-gender").removeClass("step-current"), e(".four-steps-orientation").addClass("step-current")
          }
        }, "-=1")
      })), e(".four-steps-orientation label").on("mouseup", (function () {
        t(), e(".test-progress .steps .step:nth-child(1)").addClass("active"), gsap.to(".four-steps-orientation", {
          y: "-100vh",
          opacity: 0,
          ease: "none",
          duration: 1
        }), gsap.to(".four-steps-wrapper", {
          backgroundColor: "#FF9072", duration: 1, onComplete: function () {
          }
        })
      })), e(".btn-previous").on("click", (function () {
        var t = e(".step-current");
        t.parent().hasClass("four-steps-wrapper") && (t.hasClass("four-steps-age") ? (e(".four-steps-relations").css("opacity", 1), gsap.to(".four-steps-age", {
          y: "100vh",
          ease: "none",
          duration: .5
        }), gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el, .four-steps-relations .text").forEach((e, t) => {
          gsap.to(e, {
            y: 0,
            transformOrigin: "center",
            ease: "none",
            duration: .5
          }), gsap.to(".four-steps-relations ul li, .four-steps-relations .text", {
            rotate: 0,
            transformOrigin: "center",
            ease: "none",
            duration: .5
          })
        }), e(".four-steps-age").removeClass("step-current"), e(".four-steps-relations").addClass("step-current"), e(".btn-previous").css("opacity", 0)) : t.hasClass("four-steps-gender") ? (gsap.to(".four-steps-gender", {
          y: "100vh",
          ease: "none",
          duration: 0
        }), gsap.to(".four-steps-age ul li.active label", {
          scale: 1,
          ease: "none",
          duration: 1
        }), e(".four-steps-gender").removeClass("step-current"), e(".four-steps-age .container").css("overflow", "auto"), e(".four-steps-age").css("opacity", 1).addClass("step-current")) : (e(".four-steps-gender").css("opacity, 1"), gsap.to(".four-steps-gender", {
          y: 0,
          ease: "none",
          duration: .5
        }), gsap.to(".four-steps-orientation", {
          y: "100vh",
          ease: "none",
          duration: .5
        }), e(".four-steps-orientation").removeClass("step-current"), e(".four-steps-gender").addClass("step-current")))
      }))
    }
    if (document.querySelector(".test-step")) {
      var o = {37: 1, 38: 1, 39: 1, 40: 1};

      function r(e) {
        e.preventDefault()
      }

      function n(e) {
        if (o[e.keyCode]) return r(e), !1
      }

      var i = !1;
      try {
        window.addEventListener("test", null, Object.defineProperty({}, "passive", {
          get: function () {
            i = !0
          }
        }))
      } catch (e) {
      }
      var a = !!i && {passive: !1}, l = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";
      window.addEventListener("DOMMouseScroll", r, !1), window.addEventListener(l, r, a), window.addEventListener("touchmove", r, a), window.addEventListener("keydown", n, !1), gsap.to(".test-step", {
        y: 0,
        opacity: 1,
        duration: .5,
        ease: "none",
        onComplete: function () {
          gsap.to(".test-options", {opacity: 1, duration: .5, ease: "none"})
        }
      }), document.querySelectorAll(".test-scroller li").forEach((t, s) => {
        gsap.to(t, {
          scrollTrigger: {
            scroller: ".test-step-inner",
            trigger: t,
            start: "top 40%",
            end: "top top-=50",
            toggleClass: "active",
            onEnter: function () {
              e(".test-options").removeClass("selected"), e("#testChoices").length && e("#testChoices").get(0).reset()
            }
          }
        })
      }), e(".test-scroller input").each((function () {
        "" !== e(this).val() && e(this).addClass("filled")
      }))
    }
    if (document.querySelector(".test-step--type1")) {
      document.querySelectorAll(".test-options ul li label").forEach(e => {
        var t = e.querySelector(".hover"), s = e.querySelector(".click");
        e.addEventListener("mouseenter", (function () {
          t.play()
        })), e.addEventListener("mouseleave", (function () {
          t.stop()
        })), e.addEventListener("click", (function () {
          t.style.opacity = 0, s.play(), setTimeout(() => {
            s.stop(), s.removeAttribute("style")
          }, 500)
        }))
      });
      var p = !1;
      e(".test-step--type1 .test-options label").on("click", (function (s) {
        if ("INPUT" === s.target.tagName && !p) {
          p = !0, t();
          var o = e(".test-scroller li.active"), r = e("[name=test]:checked").val(), n = e(".test-scroller li").length;
          if (o.length) o.find("input").addClass("filled").val(r);
          if (e(".test-scroller .filled").length === n) if (e("#testChoices").addClass("disabled"), gsap.to(".test-progress", {
            opacity: 0,
            duration: .3
          }), e("#testChoices").length && e("#testChoices").get(0).reset(), e(window).width() >= 1024) {
            var i = 80;
            e(window).width() >= 1024 && e(window).width() < 1600 && (i = 59), e(".test-step-inner").animate({scrollTop: e(".test-scroller").height()}, 300);
            gsap.timeline().to(".test-options li span", {
              color: "transparent",
              duration: .3
            }).to(".test-options li path", {
              fill: "#F9F3E9",
              duration: .3
            }, "-=0.3").to(".test-options li:nth-child(1)", {
              y: 2 * i,
              duration: .3
            }, "-=0,6").to(".test-options li:nth-child(2)", {
              y: i,
              duration: .3
            }, "-=0.3").to(".test-options li:nth-child(4)", {
              y: -1 * i,
              duration: .3
            }, "-=0.3").to(".test-options li:nth-child(5)", {
              y: -2 * i,
              duration: .3
            }, "-=0.3").to(".test-options li:nth-child(1),.test-options li:nth-child(2),.test-options li:nth-child(3),.test-options li:nth-child(4), .test-options li:nth-child(5) lottie-player", {
              opacity: 0,
              duration: .1
            }, "-=0.3").to(".test-options li:nth-child(5) svg", {
              opacity: 1,
              duration: .1
            }, "-=0.3").to(".test-options li:nth-child(5) figure", {
              scale: 330,
              duration: 1
            }).to(".step-main-wrapper", {opacity: 0, duration: .3}).to("body", {
              backgroundColor: "#F9F3E9",
              duration: .3,
              onComplete: function () {
              }
            }, "-=0.3")
          } else {
            gsap.timeline().to(".test-final", {zIndex: 9999, duration: 0}).to(".test-final svg", {
              opacity: 1,
              duration: .3
            }).to(".test-final svg", {scale: 1, duration: 1}, "-=0.3").to(".step-main-wrapper", {
              opacity: 0,
              duration: .3
            }, "-=0.3").to("body", {
              backgroundColor: "#F9F3E9", duration: .3, onComplete: function () {
              }
            }, "-=0.3")
          } else setTimeout(() => {
            e(".test-step-inner").animate({scrollTop: e(".test-step-inner").scrollTop() + o.outerHeight()}, 500, (function () {
              p = !1
            }))
          }, 200)
        }
      })), e(document).on("click", ".btn-previous", (function (t) {
        if (!e(".test-scroller li:first-child").hasClass("active")) {
          t.preventDefault();
          var s = e(".test-scroller li.active").prev("li");
          e(".test-step-inner").animate({scrollTop: e(".test-step-inner").scrollTop() - s.outerHeight()}, 500, (function () {
            var t = e(".test-scroller li.active"), s = parseInt(t.find("input").val());
            e(".test-options").addClass("selected"), e(".test-options input").each((function () {
              parseInt(e(this).val()) === s && e(this).prop("checked", !0)
            }))
          }))
        }
      }))
    }
    document.querySelector(".test-step--type2") && (document.querySelectorAll(".test-options ul li label").forEach(t => {
      var s = t.querySelector(".flame-lightblue .hover"), o = t.querySelector(".flame-lightblue .click");
      e(window).width() < 768 && (s = t.querySelector(".flame-blue .hover"), o = t.querySelector(".flame-blue .click")), t.addEventListener("mouseenter", (function () {
        s.play()
      })), t.addEventListener("mouseleave", (function () {
        s.stop()
      })), t.addEventListener("click", (function () {
        s.style.opacity = 0, o.play(), setTimeout(() => {
          o.stop(), o.removeAttribute("style")
        }, 500)
      }))
    }), e(".test-step--type2 .test-options label").on("click", (function (s) {
      if ("INPUT" === s.target.tagName) {
        t();
        var o = e(this), r = e(".test-step").attr("data-nextcolor"), n = e(".test-scroller li.active"),
          i = e("[name=test]:checked").val(), a = e(".test-scroller li").length;
        if (n.length) n.find("input").addClass("filled").val(i);
        if (e(".test-scroller .filled").length === a) setTimeout(() => {
          e("#testChoices").addClass("disabled"), e(".test-progress .steps .step.active").next().addClass("active");
          gsap.timeline().to(".test-progress, .test-scroller, .test-options", {
            opacity: 0,
            duration: .3
          }).to(".test-final", {zIndex: 9999, duration: 0}, "-=0.3").to(".test-final svg", {
            opacity: 1,
            duration: .3
          }, "-=0.3").to(".test-final svg", {scale: 2, duration: 1}, "-=0.3").to(".test-final svg path", {
            fill: r,
            duration: 1
          }, "-=1").to("body", {backgroundColor: r, duration: .5}, "-=1").to(".step-main-wrapper", {
            opacity: 0,
            duration: .5,
            onComplete: function () {
            }
          }, "-=0.2")
        }, 600); else if (e(window).width() >= 1024) {
          gsap.timeline().to(o.find("figure svg"), {
            scale: 2,
            transformOrigin: "center bottom",
            duration: .25,
            delay: .7,
            onComplete: function () {
              gsap.to(o.find("figure svg"), {
                scale: 3,
                y: "-120vh",
                duration: .25
              }), e("#testChoices").get(0).reset(), e(".images-scroller").animate({scrollTop: e(".images-scroller").scrollTop() + e(window).height()}, 300), e(".test-step-inner").animate({scrollTop: e(".test-step-inner").scrollTop() + n.outerHeight()}, 300, (function () {
                gsap.to(e(".test-scroller li.active").prev(), {
                  top: 0,
                  duration: 0
                }), gsap.to(e(".test-options figure svg"), {scale: 1, y: "-50%", x: "-50%", duration: 0})
              }))
            }
          })
        } else setTimeout(() => {
          e("#testChoices").get(0).reset(), e(".test-options").removeClass("selected"), e(".test-step-inner").animate({scrollTop: e(".test-step-inner").scrollTop() + n.outerHeight()}, 500, (function () {
            gsap.to(e(".test-scroller li.active").prev(), {top: 0, duration: 0})
          }))
        }, 700)
      }
    })), e(document).on("click", ".btn-previous", (function (t) {
      if (!e(".test-scroller li:first-child").hasClass("active")) {
        t.preventDefault();
        var s = e(".test-scroller li.active").prev("li");
        e(".images-scroller").animate({scrollTop: e(".images-scroller").scrollTop() - e(window).height()}, 500), e(".test-step-inner").animate({scrollTop: e(".test-step-inner").scrollTop() - s.outerHeight()}, 500, (function () {
          var t = e(".test-scroller li.active"), s = parseInt(t.find("input").val());
          e(".test-options").addClass("selected"), e(".test-options input").each((function () {
            parseInt(e(this).val()) === s && e(this).prop("checked", !0)
          }))
        }))
      }
    })))
  }()
}));
