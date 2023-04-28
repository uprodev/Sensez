jQuery(document).ready(function ($) {
  $(".accordion .item-header button").on("click", function () {
    if (!$(this).closest(".item").hasClass("active")) {
      $(".accordion .item.active").find(".item-body").slideUp(300);
      $(".accordion .item.active").removeClass("active");
      $(this).closest(".item").addClass("active").find(".item-body").slideDown(300);
    } else {
      $(this).closest(".item").removeClass("active").find(".item-body").slideUp(300);
    }
  });

  $(".btn-scroll").on("click", function () {
    var dest = $(".screen-02");
    $("html, body").animate({ scrollTop: dest.offset().top }, 500);
  });

  var header = document.querySelector(".header");
  if (header) {
    var headroom = new Headroom(header);
    headroom.init();
  }

  //   var header = document.querySelector(".header");
  //   var headroom = new Headroom(header);
  //   headroom.init();

  //   $(".navbar-toggler").on("click", function () {
  //     if ($(this).hasClass("active")) {
  //       $(".header").removeClass("menu-opened");
  //       $(this).removeClass("active");
  //       $(".main-navigation").removeClass("active");
  //       headroom.unfreeze();
  //       const body = document.body;
  //       const scrollY = body.style.top;
  //       body.removeAttribute("style");
  //       window.scrollTo(0, parseInt(scrollY || "0") * -1);
  //     } else {
  //       const scrollY = $(window).scrollTop();
  //       $("body").css({ position: "fixed", top: -scrollY });
  //       $(".header").addClass("menu-opened");
  //       $(this).addClass("active");
  //       $(".main-navigation").addClass("active");
  //       headroom.freeze();
  //     }
  //   });

  //   $(".btn-read-more").on("click", function () {
  //     $(this).hide();
  //     var txt = $(this).parent().prev(".read-more-wrapper").find("p");
  //     txt.slideDown(200);
  //   });

  //   $(".block-logos .btn-more").on("click", function () {
  //     var $block = $(this).closest(".block-logos");
  //     var cols = $block.find(".row > div");
  //     $(this).hide();
  //     cols.slideDown(200);
  //   });

  //   $(".block-roadmap .btn-more").on("click", function () {
  //     var $block = $(this).closest(".block-roadmap");
  //     var stages = $block.find(".roadmap-stage");
  //     $(this).hide();
  //     stages.slideDown(300);
  //     $(".block-roadmap").addClass("opened");
  //   });

  //   $(".contact-form form").on("submit", function (e) {
  //     e.preventDefault();
  //     var err = false;
  //     $(this)
  //       .find("input, textarea")
  //       .each(function () {
  //         if ($(this).val() === "") {
  //           $(this).addClass("error");
  //           err = true;
  //         } else {
  //           $(this).removeClass("error");
  //         }
  //       });
  //     if (!err) {
  //       $(".contact-form").fadeOut(200);
  //       $(".contact-form-success").fadeIn(200);
  //     }
  //   });

  //   $(".blog-form form").on("submit", function (e) {
  //     e.preventDefault();
  //     var err = false;
  //     $(this)
  //       .find("input")
  //       .each(function () {
  //         if ($(this).val() === "") {
  //           $(this).parent(".field").addClass("error");
  //           err = true;
  //         } else {
  //           $(this).parent(".field").removeClass("error");
  //         }
  //       });
  //     if (!err) {
  //       $(".blog-form-success").addClass("active");
  //     }
  //   });

  //   $(".theme-switch a").on("click", function (e) {
  //     e.preventDefault();
  //     var $page = $(".page-wrapper");
  //     if (!$(this).hasClass("active")) {
  //       var theme = $(this).attr("data-theme");
  //       $page.removeClass("theme-dark").removeClass("theme-light").addClass(theme);
  //       $(".theme-switch a.active").removeClass("active");
  //       $(this).addClass("active");
  //     }
  //   });

  //   $(".btn-more-categories-accordion").on("click", function () {
  //     var txt1 = "More categories",
  //       txt2 = "Less categories";
  //     if ($(this).hasClass("active")) {
  //       $(this).removeClass("active").find("span").text(txt1);
  //       $(".cat-mobile-hidden").slideUp(300);
  //     } else {
  //       $(this).addClass("active").find("span").text(txt2);
  //       $(".cat-mobile-hidden").slideDown(300);
  //     }
  //   });

  //   $(".btn-more-categories-tabs").on("click", function () {
  //     var txt1 = "More categories",
  //       txt2 = "Less categories";
  //     if ($(this).hasClass("active")) {
  //       $(this).removeClass("active").find("span").text(txt1);
  //       $(".cat-list--hidden").slideUp(300);
  //     } else {
  //       $(this).addClass("active").find("span").text(txt2);
  //       $(".cat-list--hidden").slideDown(300);
  //     }
  //   });

  //   if ($(".tag-list .inner").height() <= $(".tag-list ").height()) {
  //     $(".btn-more-tags").hide();
  //   }
  //   $(window).on("resize", function () {
  //     if ($(".tag-list .inner").height() <= $(".tag-list ").height()) {
  //       $(".btn-more-tags").hide();
  //     } else {
  //       $(".btn-more-tags").css("display", "inline-flex");
  //     }
  //   });
  //   $(".btn-more-tags").on("click", function () {
  //     var txt1 = "See more",
  //       txt2 = "See less";
  //     if ($(this).hasClass("active")) {
  //       $(this).removeClass("active").find("span").text(txt1);
  //       $(".tag-list").removeClass("active");
  //     } else {
  //       $(this).addClass("active").find("span").text(txt2);
  //       $(".tag-list").addClass("active");
  //     }
  //   });

  //   function accordion() {
  //     if ($(window).width() < 1024) {
  //       var activeAccBtn = $(".accordion button.active");
  //       var activePanel = activeAccBtn.parent().next();
  //       activePanel.show();
  //     }

  //     $(".accordion .accordion-header button").on("click", function () {
  //       if (!$(this).hasClass("active")) {
  //         $(".accordion .accordion-header button.active").parent().next().slideUp(300);
  //         $(".accordion .accordion-header button.active").removeClass("active");
  //         var nextPanel = $(this).parent().next(),
  //           nextPanelId = $(this).parent().next().attr("id");
  //         nextPanel.slideDown(300);
  //         $(this).addClass("active");

  //         $(".tabs-nav .active").removeClass("active");
  //         $(".tabs-nav a").each(function () {
  //           if ($(this).attr("href") === "#" + nextPanelId) {
  //             $(this).addClass("active");
  //           }
  //         });
  //       }
  //     });
  //   }
  //   accordion();

  //   function tabs() {
  //     if ($(window).width() >= 1024) {
  //       var activeTabBtn = $(".tabs-nav .active");
  //       var activePanel = $(activeTabBtn.attr("href"));
  //       activePanel.show();
  //     }

  //     $(".tabs-nav a").on("click", function (e) {
  //       e.preventDefault();
  //       if (!$(this).hasClass("active")) {
  //         var activePanel = $($(".tabs-nav .active").attr("href"));
  //         activePanel.hide();
  //         $(".tabs-nav .active").removeClass("active");
  //         var nextPanel = $($(this).attr("href")),
  //           nextPanelId = nextPanel.attr("id");
  //         nextPanel.fadeIn(200);
  //         $(this).addClass("active");

  //         $(".accordion .accordion-header button.active").removeClass("active");
  //         $(".accordion .accordion-header button").each(function () {
  //           if ($(this).attr("data-tab") === nextPanelId) {
  //             $(this).addClass("active");
  //           }
  //         });
  //       }
  //     });
  //   }
  //   tabs();

  //   if (document.querySelector(".related-slider")) {
  //     var slider = document.querySelector(".related-slider");
  //     const swiper = new Swiper(slider, {
  //       speed: 500,
  //       loop: true,
  //       spaceBetween: 50,
  //       slidesPerView: 1,
  //       navigation: {
  //         nextEl: slider.querySelector(".swiper-button-next"),
  //         prevEl: slider.querySelector(".swiper-button-prev"),
  //       },
  //       breakpoints: {
  //         576: {
  //           slidesPerView: 2,
  //           spaceBetween: 25,
  //         },
  //         768: {
  //           slidesPerView: 3,
  //           spaceBetween: 40,
  //         },
  //         1440: {
  //           slidesPerView: 3,
  //           spaceBetween: 56,
  //         },
  //       },
  //     });
  //   }

  //   if (document.querySelector(".image-slider")) {
  //     var sliderImg = document.querySelector(".image-slider");
  //     const swiper1 = new Swiper(sliderImg, {
  //       speed: 500,
  //       loop: false,
  //       spaceBetween: 50,
  //       slidesPerView: 1,
  //       navigation: {
  //         nextEl: sliderImg.querySelector(".swiper-button-next"),
  //         prevEl: sliderImg.querySelector(".swiper-button-prev"),
  //       },
  //       breakpoints: {
  //         576: {
  //           slidesPerView: 2,
  //           spaceBetween: 27,
  //         },
  //         768: {
  //           slidesPerView: 3,
  //           spaceBetween: 27,
  //         },
  //       },
  //     });
  //   }

  //   $(".block-cookies .btn-close").on("click", function () {
  //     $(".block-cookies").fadeOut(200);
  //   });
});
