jQuery(document).ready((function(e){window.visualViewport.height<800&&e(".page-wrapper").addClass("less-height"),e(window).on("resize",(function(){window.visualViewport.height<800?e(".page-wrapper").addClass("less-height"):e(".page-wrapper").removeClass("less-height")}));var t=e('<div class="tooltip" />');function o(){var t=e(".accordion");t.outerHeight()<e(window).height()&&t.css("padding-top",(e(window).height()-t.outerHeight())/2)}function a(e,t){var o=document.documentElement||document.body;if("touchstart"==e.type||"touchmove"==e.type||"touchend"==e.type||"touchcancel"==e.type)var a=e.touches[0]||e.changedTouches[0],n={x:a.clientX,y:a.clientY-t.offset().top};else if("mousedown"==e.type||"mouseup"==e.type||"mousemove"==e.type||"mouseover"==e.type||"mouseout"==e.type||"mouseenter"==e.type||"mouseleave"==e.type)n={x:e?e.pageX:window.event.clientX+o.scrollLeft-o.clientLeft,y:e?e.pageY-t.offset().top:window.event.clientY+o.scrollTop-o.clientTop-t.offset().top};return n}e(".screen-02").append(t),e(".screen-02 .text").on("mouseenter",(function(t){var o=e(".screen-02"),n=e(this).attr("data-tooltip"),r=a(t,o);e(".tooltip").css("top",r.y),e(".tooltip").css("left",r.x),e(".tooltip").text(n).show()})).on("mousemove",(function(t){var o=a(t,e(".screen-02"));e(".tooltip").css("top",o.y),e(".tooltip").css("left",o.x)})),e(".text-wrapper").on("mouseleave",(function(t){e(".tooltip").fadeOut(100)})),ScrollTrigger.matchMedia({"(min-width: 1024px)":function(){document.querySelectorAll(".screen-headlines li").forEach((e,t)=>{gsap.to(e.querySelector("h2"),{scrollTrigger:{scroller:".screen-03 .container",trigger:e,start:"center bottom",end:"center 50%",toggleActions:"play resume resume resume",scrub:!0},opacity:1});var o=e.dataset.image;gsap.to(document.getElementById(o),{scrollTrigger:{scroller:".screen-03 .container",trigger:e,start:"center bottom",end:"bottom -150vh",toggleActions:"play resume resume resume",scrub:!0},y:"-100%",opacity:1})})}}),new fullpage("#fullpage",{scrollOverflow:!0,scrollingSpeed:500,normalScrollElements:".screen-03 .container",fitToSectionDelay:!1,verticalCentered:!0,onLeave:function(t,o,a,n){"down"===a?(e(".header").addClass("headroom--not-top").removeClass("active"),gsap.fromTo("body",{backgroundColor:o.item.dataset.start},{backgroundColor:o.item.dataset.end,duration:1})):(console.log(o.index),e(".header").addClass("active"),0!==o.index&&setTimeout(()=>{e(".header").removeClass("active")},2e3),gsap.fromTo("body",{backgroundColor:t.item.dataset.end},{backgroundColor:t.item.dataset.start,duration:1})),1===o.index&&"down"===a&&gsap.to(".screen-02 .bg",{duration:1,backgroundImage:"radial-gradient(81.17% 81.17% at 50% 0%, rgba(68, 32, 158, 0.4) 0%, rgba(0, 0, 0, 0) 100%)",width:"110vw",height:"110vh",borderRadius:0,delay:.5}),1===t.index&&"up"===a&&gsap.to(".screen-02 .bg",{duration:.4,backgroundImage:"radial-gradient(81.17% 81.17% at 50% 0%, rgba(68, 32, 158, 0.4) 0%, rgba(0, 0, 0, 0) 100%)",width:"100%",height:"100%",borderRadius:40}),e(window).width()>=1024?(3===o.index&&"down"===a&&gsap.timeline().to(".text-01",{opacity:1,scaleX:1,scaleY:1,duration:.4}).to(".line-01 path",{strokeDashoffset:0,duration:.4}).to(".text-02",{opacity:1,scaleX:1,scaleY:1,duration:.4}).to(".line-02 path",{strokeDashoffset:0,duration:.4}).to(".text-03",{opacity:1,scaleX:1,scaleY:1,duration:.4}).to(".line-03 path",{strokeDashoffset:0,duration:.4}).to(".text-04",{opacity:1,scaleX:1,scaleY:1,duration:.4}).to(".line-04 path",{strokeDashoffset:0,duration:.4}).to(".text-05",{opacity:1,scaleX:1,scaleY:1,duration:.4}),8===o.index&&"down"===a&&(gsap.to(".screen-08 .el-01, .screen-08 .el-02, .screen-08 .bg-gradient, .screen-08 .h1",{duration:1.5,delay:.5,x:0,y:0}),gsap.to(".screen-08 .image",{duration:1.5,delay:1,x:0,y:0,onComplete:function(){document.querySelector(".screen-08 .image .inner").classList.add("rotating")}}),gsap.to(".screen-08 .h1 div",{duration:1.5,delay:.5,left:0,x:0,y:0}),gsap.to(".screen-08 .btn",{opacity:1,duration:.5,delay:1.5}))):(e(window).width()<768&&1===o.index&&gsap.to(".screen-02 h2, .screen-02 .text-wrapper span, .screen-02 p",{y:0,opacity:1,duration:1,delay:.5,stagger:.15}),2===o.index&&"down"===a&&setTimeout(()=>{var e,t,o;e=0,t=0,o=.5,gsap.utils.toArray(".screen-04-animation .box").forEach((t,o)=>{gsap.to(t,{keyframes:{rotate:[30,-10,30,0]},transformOrigin:"center",ease:"none",duration:.4,delay:e}),e+=.7}),gsap.utils.toArray(".screen-04-animation .text").forEach((e,o)=>{gsap.to(e,{scaleX:1,scaleY:1,opacity:1,duration:.4,transformOrigin:"center",ease:"none",delay:t}),t+=.7}),gsap.utils.toArray(".screen-04-animation .line").forEach((e,t)=>{gsap.to(e.querySelectorAll("path"),{strokeDashoffset:0,ease:"none",duration:.3,delay:o}),o+=.8})},500),3===o.index&&"down"===a&&setTimeout(()=>{document.querySelectorAll(".screen-05 .col").forEach((e,t)=>{gsap.to(e,{y:0,opacity:1,duration:1})})},500),7===o.index&&"down"===a&&(gsap.to(".screen-08 .bg-gradient",{y:0,duration:.8,delay:.5}),gsap.to(".screen-08 .el-01",{x:0,duration:.8,delay:.5}),gsap.to(".screen-08 .el-01",{rotate:360,duration:5,delay:.5}),gsap.to(".screen-08 .h1",{duration:.8,delay:.5,x:0,y:0}),gsap.to(".screen-08 .image",{duration:.8,delay:.5,x:"5vw",y:0,onComplete:function(){document.querySelector(".screen-08 .image .inner").classList.add("rotating")}}),gsap.to(".screen-08 .btn-wrapper",{y:0,delay:.5})))}}),e(".btn-scroll").on("click",(function(){fullpage_api.moveSectionDown()})),e(".screen-01 .btn").on("click",(function(e){e.preventDefault(),fullpage_api.moveSectionDown()})),document.querySelector(".screen-03 .container").addEventListener("scroll",e=>{const{scrollHeight:t,scrollTop:o,clientHeight:a}=e.target;Math.abs(t-a-o)<1&&fullpage_api.moveSectionDown(),0===o&&fullpage_api.moveSectionUp()}),o(),e(window).on("resize",(function(){o()})),e(".accordion .item-header button").on("click",(function(){e(this).closest(".item").hasClass("active")?e(this).closest(".item").removeClass("active").find(".item-body").slideUp(300,(function(){setTimeout(()=>{fullpage_api.reBuild()},100)})):(e(".accordion .item.active").removeClass("active").find(".item-body").slideUp(300,(function(){setTimeout(()=>{fullpage_api.reBuild()},100)})),e(this).closest(".item").addClass("active").find(".item-body").slideDown(300,(function(){setTimeout(()=>{fullpage_api.reBuild()},100)})))})),imagesLoaded("body",(function(){ScrollTrigger.refresh()})),document.querySelector(".cursor-container")&&e(".cursor-container").each((function(){var t=e(this),o=t.find(".cursor");t.on("mousemove",(function(e){var n=a(e,t);o.css("top",n.y),o.css("left",n.x)}))}))}));