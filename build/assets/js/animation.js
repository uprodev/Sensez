jQuery(document).ready(function ($) {
  gsap.to(".headline-initial", {
    opacity: 0,
    duration: 0.2,
    delay: 1,
    ease: "none",
  });
  gsap.to(".animation-header", {
    opacity: 1,
    duration: 0.2,
    delay: 1,
    ease: "none",

    onComplete: function () {
      gsap.to("#percent", {
        textContent: 100,
        duration: 14,
        ease: "none",
        snap: { textContent: 1 },
        stagger: {
          onUpdate: function () {
            document.getElementById("percent").textContent = this.targets()[0].textContent;
          },
        },
      });

      box1();
    },
  });

  var d1 = 2.5;

  function box1() {
    gsap.to(".box-preload-01", {
      opacity: 1,
      duration: 0.1,
      ease: "none",
    });

    gsap.to(".box-preload-01 .preloader", {
      keyframes: {
        scale: [1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6],
        rotate: [0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360],
        borderRadius: [0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%"],
      },
      ease: "none",
      duration: d1,
    });
    var tl1 = gsap
      .timeline({
        delay: d1,
        onComplete: function () {
          box2();
        },
      })
      .to(".box-preload-01", {
        opacity: 0,
        duration: 0.2,
        ease: "none",
      })
      .to(
        ".box-01",
        {
          opacity: 1,
          duration: 0.2,
          ease: "none",
        },
        "-=0.2"
      )
      .to(".box-01 .text", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-01 .image .image-inner", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-01 .els", {
        opacity: 1,
        duration: 0.01,
        ease: "none",
      });
  }

  function box2() {
    gsap.to(".box-preload-02", {
      opacity: 1,
      duration: 0.1,
      ease: "none",
    });

    gsap.to(".box-preload-02 .preloader", {
      keyframes: {
        scale: [1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6],
        rotate: [0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360],
        borderRadius: [0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%"],
      },
      ease: "none",
      duration: d1,
    });
    var tl2 = gsap
      .timeline({
        delay: d1,
        onComplete: function () {
          box3();
        },
      })
      .to(".box-preload-02", {
        opacity: 0,
        duration: 0.2,
        ease: "none",
      })
      .to(
        ".box-02",
        {
          opacity: 1,
          duration: 0.2,
          ease: "none",
        },
        "-=0.2"
      )
      .to(".box-02 .text", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-02 .image .image-inner", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-02 .sticker, .box-02 .els", {
        opacity: 1,
        duration: 0.01,
        ease: "none",
      });
  }

  function box3() {
    gsap.to(".box-preload-03", {
      opacity: 1,
      duration: 0.1,
      ease: "none",
    });

    gsap.to(".box-preload-03 .preloader", {
      keyframes: {
        scale: [1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6],
        rotate: [0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360],
        borderRadius: [0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%"],
      },
      ease: "none",
      duration: d1,
    });
    var tl3 = gsap
      .timeline({
        delay: d1,
        onComplete: function () {
          box4();
        },
      })
      .to(".box-preload-03", {
        opacity: 0,
        duration: 0.2,
        ease: "none",
      })
      .to(
        ".box-03",
        {
          opacity: 1,
          duration: 0.2,
          ease: "none",
        },
        "-=0.2"
      )
      .to(".box-03 .text", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-03 .image .image-inner", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-03 .els", {
        opacity: 1,
        duration: 0.01,
        ease: "none",
      });
  }

  function box4() {
    gsap.to(".box-preload-04", {
      opacity: 1,
      duration: 0.1,
      ease: "none",
    });

    gsap.to(".box-preload-04 .preloader", {
      keyframes: {
        scale: [1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6, 4, 3.3, 2, 1, 2, 3.3, 4, 6],
        rotate: [0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360, 270, 180, 90, 0, 90, 180, 270, 360],
        borderRadius: [0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%", "20%", "16%", "16%", 0, "16%", "16%", "20%", "50%"],
      },
      ease: "none",
      duration: d1,
    });
    var tl4 = gsap
      .timeline({
        delay: d1,
        onComplete: function () {
          $(".animation-header h2").fadeIn(100);
          var tl5 = gsap
            .timeline({ delay: 0.5 })
            .to(".animation-wrapper .box .button", {
              opacity: 1,
              duration: 0.1,
              ease: "none",
            })
            .to(
              ".animation-wrapper .box .btn",
              {
                scale: 1,
                duration: 0.2,
                ease: "none",
              },
              "-=0.1"
            )
            .to(".animation-wrapper .button .btn", {
              color: "#ffffff",
              duration: 0.1,
              ease: "none",
              onComplete: function () {
                $(".animation-header .percent").fadeOut(300);
              },
            })
            .to(".animation-header h2", {
              scale: 1,
              marginBottom: "0.8em",
              opacity: 1,
              duration: 0.5,
              delay: 1.2,
              ease: "none",
            });
        },
      })
      .to(".box-preload-04", {
        opacity: 0,
        duration: 0.2,
        ease: "none",
      })
      .to(
        ".box-04",
        {
          opacity: 1,
          duration: 0.2,
          ease: "none",
        },
        "-=0.2"
      )
      .to(".box-04 .text", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-04 .image .image-inner", {
        y: 0,
        opacity: 1,
        duration: 0.4,
        ease: "none",
      })
      .to(".box-04 .els", {
        opacity: 1,
        duration: 0.01,
        ease: "none",
      });
  }


  $("a.fancybox").on("click", function (e) {
    e.preventDefault();
    var id = $(this).attr("href");
    $.fancybox.open($(id), {
      touch: false,
      autoFocus: false,
    });
  });

  $(".popup-close").on("click", function () {
    var id = $(this).attr("data-popup");
    $.fancybox.close($(id));
  });
});
