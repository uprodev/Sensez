jQuery(document).ready((function(e){new fullpage("#fullpage",{scrollOverflow:!0,scrollingSpeed:500,fitToSectionDelay:!1,verticalCentered:!0,afterRender:function(){var o=e(".res-screen-01");gsap.to("body",{backgroundColor:o.data("bg"),duration:.1}),o.data("bg")},onLeave:function(e,o,r,t){console.log(o.index),o.item.dataset.bg&&gsap.to("body",{backgroundColor:o.item.dataset.bg,duration:1}),4===o.index&&gsap.to(".res-screen-05  .image figure",{x:0,duration:1,delay:.5}),1===o.index?gsap.to(".contact-us",{opacity:1,duration:.3}):0===o.index&&gsap.to(".contact-us",{opacity:0,duration:.3})}}),e(".block-locked .btn").on("click",(function(e){e.preventDefault(),fullpage_api.moveSectionDown()})),e(".btn-scroll").on("click",(function(){fullpage_api.moveSectionDown()})),e(".btn-top").on("click",(function(){fullpage_api.silentMoveTo(1)}));var o=document.querySelectorAll(".counter");gsap.utils.toArray(o).forEach((function(e){gsap.from(e,{scrollTrigger:{scroller:".res-screen-02 .fp-overflow",scrollTrigger:".block-scales"},textContent:0,duration:1,delay:1,ease:Power1.easeIn,snap:{textContent:1},stagger:1})}));var r=document.querySelectorAll(".bar");if(gsap.utils.toArray(r).forEach((function(e){var o=e.querySelector(".bar-inner"),r=o.dataset.width+"%",t=e.previousElementSibling;gsap.to(o,{scrollTrigger:{scroller:".res-screen-02 .fp-overflow",scrollTrigger:".block-scales"},width:r,duration:1,delay:1,ease:Power1.easeIn,snap:{textContent:1},stagger:1}),gsap.to(t,{scrollTrigger:{scroller:".res-screen-02 .fp-overflow",scrollTrigger:".block-scales"},left:r,duration:1,delay:1,ease:Power1.easeIn,snap:{textContent:1},stagger:1})})),gsap.utils.toArray(".block-scroll").forEach((function(e){ScrollTrigger.create({scroller:".res-screen-02 .fp-overflow",trigger:e,start:"top 90%",toggleActions:"play none none none",onEnter:function(){gsap.to(e,{duration:.5,y:0,autoAlpha:1,ease:"none",overwrite:"auto"}),e.classList.contains("block-locked")&&e.querySelector(".inner").classList.add("visible")}})})),ScrollTrigger.create({scroller:".res-screen-05 .fp-overflow",trigger:".cite .inner",start:"top 90%",toggleActions:"play none none none",onEnter:function(){gsap.to(".cite .inner",{duration:.5,y:0,autoAlpha:1,ease:"none",overwrite:"auto"})}}),e(".reviews-swiper").length){new Swiper(".reviews-swiper",{loop:!0,slidesPerView:1,spaceBetween:0,observer:!0,observeParents:!0,effect:"fade",fadeEffect:{crossFade:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}})}e(".res-screen-06 .image").on("mouseenter",(function(){e(".res-screen-06").addClass("hover")})).on("mouseleave",(function(){e(".res-screen-06").removeClass("hover")}))}));