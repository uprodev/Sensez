jQuery(document).ready((function(e){function o(e,o=0){var t=e.getBoundingClientRect();return t.top>=0&&t.left>=0&&t.bottom<=(window.innerHeight||document.documentElement.clientHeight)+o&&t.right<=(window.innerWidth||document.documentElement.clientWidth)}window.visualViewport.height<800&&e(".page-wrapper").addClass("less-height"),e(window).on("resize",(function(){window.visualViewport.height<800?e(".page-wrapper").addClass("less-height"):e(".page-wrapper").removeClass("less-height")})),new fullpage("#fullpage",{scrollOverflow:!0,scrollingSpeed:500,fitToSectionDelay:!1,verticalCentered:!0,afterRender:function(){var o=e(".res-screen-01");gsap.to("body",{backgroundColor:o.data("bg"),duration:.1}),o.data("bg")},onLeave:function(e,o,t,n){console.log(o.index),o.item.dataset.bg&&gsap.to("body",{backgroundColor:o.item.dataset.bg,duration:1}),4===o.index&&(gsap.to(".res-screen-08 .wrapper",{y:0,duration:.5,delay:.5}),gsap.to(".res-screen-08 h2",{opacity:1,duration:.5,delay:1})),1===o.index?gsap.to(".contact-us",{opacity:1,duration:.3}):0===o.index&&gsap.to(".contact-us",{opacity:0,duration:.3})}}),e(".btn-scroll").on("click",(function(){fullpage_api.moveSectionDown()})),document.querySelector(".res-screen-02 .fp-overflow").addEventListener("scroll",(function(){console.log(o(document.querySelector(".block-scales"))),!o(document.querySelector(".block-scales"))||t||n||function(){n=!0;var e=document.querySelectorAll(".counter");gsap.utils.toArray(e).forEach((function(e){gsap.to(e,{textContent:e.dataset.text,duration:1,ease:Power1.easeIn,snap:{textContent:1},stagger:1,onComplete:function(){t=!0}})}));var o=document.querySelectorAll(".bar");gsap.utils.toArray(o).forEach((function(e){var o=e.querySelector(".bar-inner"),t=o.dataset.width+"%",n=e.previousElementSibling;gsap.to(o,{width:t,duration:1,ease:Power1.easeIn,snap:{textContent:1},stagger:1}),gsap.to(n,{left:t,duration:1,ease:Power1.easeIn,snap:{textContent:1},stagger:1})}))}()}));var t=!1,n=!1;function r(e){navigator.clipboard?navigator.clipboard.writeText(e).then((function(){console.log("Async: Copying to clipboard was successful!")}),(function(e){console.error("Async: Could not copy text: ",e)})):function(e){var o=document.createElement("textarea");o.value=e,o.style.top="0",o.style.left="0",o.style.position="fixed",document.body.appendChild(o),o.focus(),o.select();try{var t=document.execCommand("copy")?"successful":"unsuccessful";console.log("Fallback: Copying text command was "+t)}catch(e){console.error("Fallback: Oops, unable to copy",e)}document.body.removeChild(o)}(e)}gsap.utils.toArray(".block-scroll").forEach((function(e){ScrollTrigger.create({scroller:".res-screen-scroll-container .fp-overflow",trigger:e,start:"top 90%",toggleActions:"play none none none",onEnter:function(){gsap.to(e,{duration:.5,y:0,autoAlpha:1,ease:"none",overwrite:"auto"}),e.classList.contains("block-locked")&&e.querySelector(".inner").classList.add("visible")}})})),gsap.utils.toArray(".recommendation").forEach((function(e){ScrollTrigger.create({scroller:".res-screen-10 .fp-overflow",trigger:e,start:"top 90%",toggleActions:"play none none none",onEnter:function(){gsap.to(e,{duration:.5,y:0,autoAlpha:1,ease:"none",overwrite:"auto"})}})})),e(".res-screen-06 .image").on("mouseenter",(function(){e(".res-screen-06").addClass("hover")})).on("mouseleave",(function(){e(".res-screen-06").removeClass("hover")})),document.querySelector(".res-screen-09 .code").addEventListener("click",(function(e){r(this.textContent)})),e(".contact-us-close").on("click",(function(){e(".contact-us").hide(200)}))}));