jQuery(document).ready(function ($) {
  var barInner = $(".bar-inner"),
    barIcon = $(".bar-icon");

  gsap.to(barInner, {
    width: "100%",
    duration: 3,
    delay: 1,
    ease: Power1.easeIn,
  });
  gsap.to(barIcon, {
    left: "100%",
    duration: 3,
    delay: 1,
    ease: Power1.easeIn,
  });
});
