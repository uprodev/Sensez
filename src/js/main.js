jQuery(document).ready(function ($) {
  if ($(".reviews-swiper").length) {
    const swiper = new Swiper(".reviews-swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
});
