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

  // more text
  $('.text-overflow').each(function () {
    var $text = $(this);
    var emHeight = parseInt($text.css('font-size')) * 22.5;
    var fullHeight = $text.height();
    if (fullHeight > emHeight) {
      $text.height(emHeight).next('.more-link').css('display', 'inline-block');
    }
    $text.next('.more-link').on('click', function (e) {
      e.preventDefault();
      if ($(this).hasClass('active')) {
        $(this).removeClass('active').text('Докладніше >').prev('.text-overflow').animate({ height: emHeight }, 200)
      } else {
        $(this).addClass('active').text('Звернути >').prev('.text-overflow').animate({ height: fullHeight }, 200)
      }
    })
  })

  // article navigation menu
  function buildSectionAnchorElement(index, heading) {
    var a = $("<a>");
    var name = $(heading).attr("data-nav");
    var id = $(heading).attr("id");
    a.attr("href", "#" + id);
    a.text(name);
    return a;
  }
  var blocks = $(".res-block-main [data-nav]");
  var sections = blocks.map(function (i, e) {
    var a = buildSectionAnchorElement(i, e);
    var li = $("<li>");
    li.append(a);
    $(".content-nav ul").append(li);
    return li;
  });

  $(".res-block-main [data-nav]").waypoint(
    function (direction) {
      if (direction === "down") {
        $(".content-nav .active").removeClass("active");
        var selector = ".content-nav a[href='#" + this.element.id + "']";
        $(selector).parent().addClass("active");
      }
    },
    {
      offset: '50%',
    }
  );

  $(".res-block-main [data-nav]").waypoint(
    function (direction) {
      if (direction === "up") {
        $(".content-nav .active").removeClass("active");
        var selector = ".content-nav a[href='#" + this.element.id + "']";
        $(selector).parent().prev().addClass("active");
      }
    },
    {
      offset: '50%',
    }
  );

  $(".content-nav a").on("click", function (e) {
    e.preventDefault();
    var dest = $($(this).attr("href"));
    $("html, body").animate({ scrollTop: dest.offset().top }, 1000);
  });

  var contentNav = document.querySelector(".res-block-main .content-nav");
  var headroom = new Headroom(contentNav, { offset: contentNav.getBoundingClientRect().top });
  headroom.init();



});
