jQuery(document).ready((function(t){var e,s,o;function r(){var e=.95;t(".four-steps-wrapper").length&&(e=1.25),t(".test-step--type2").length&&(e=4.75);var s=(document.querySelector(".steps-progress .inner").style.width?parseFloat(document.querySelector(".steps-progress .inner").style.width):0)+e+"%";t(".test-progress .steps .steps-progress .inner").css("width",s)}imagesLoaded("body",(function(){ScrollTrigger.refresh()})),s=t("[data-step]"),o=parseInt(s.data("step")),t(".test-progress .steps .step").each((function(){t(".test-progress .steps .step").index(t(this))+1<o&&t(this).addClass("active")})),e=2===o?"5%":9.5*(o-2)+5+"%",t(".test-progress .steps .steps-progress .inner").css("width",e),function(){if(document.querySelector(".four-steps-wrapper")){t(".four-steps-relations label").on("mouseup",(function(){var e;r(),e=[9.73,-3.95,3.75,-3.74,2.67,4.67,-5.94],gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .text").forEach((s,o)=>{gsap.to(s,{rotate:e[o],transformOrigin:"center",ease:"none",duration:.3,onComplete:function(){gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el, .four-steps-relations .text").forEach((e,s)=>{gsap.to(e,{y:"100vh",transformOrigin:"center",ease:"none",duration:.7,onComplete:function(){t(".btn-previous").css("opacity",1),t(".four-steps-relations").css("opacity",0).removeClass("step-current"),gsap.to(".four-steps-age",{y:0,ease:"none",duration:.5,onComplete:function(){if(t(window).width()<1024){var e=0;gsap.utils.toArray(".four-steps-age .col-text, .four-steps-age ul li").forEach((t,s)=>{gsap.to(t,{x:0,ease:"none",duration:.5,delay:e}),e+=.2})}}}),t(".four-steps-age").addClass("step-current")}})})}})})}));var e=document.querySelectorAll(".four-steps-age ul li");gsap.utils.toArray(e).forEach((t,e)=>{gsap.to(t.querySelector("label"),{keyframes:{scale:[.5,1,.5],opacity:[0,1,0]},ease:"none",scrollTrigger:{scroller:".four-steps-age .container",trigger:t,start:"top bottom",end:"bottom top",scrub:1,snap:{snapTo:t,duration:1,delay:0}}}),ScrollTrigger.create({scroller:".four-steps-age .container",trigger:t,start:"top 50%",end:"bottom 50%",toggleActions:"play reverse none reverse",toggleClass:{targets:t,className:"active"}})}),t(".four-steps-age label").on("mouseup",(function(){r();var e=t(this);t(".four-steps-age .container").css("overflow","hidden");gsap.timeline().to(e,{scale:10,opacity:1,duration:1,ease:"none"}).to(".four-steps-age",{opacity:0,duration:.5},"-=0.5").to(".four-steps-gender",{y:0,duration:.5,onComplete:function(){var e=0;gsap.utils.toArray(".four-steps-gender .text, .four-steps-gender ul li").forEach((t,s)=>{gsap.to(t,{x:0,ease:"none",duration:.5,delay:e}),e+=.2}),t(".four-steps-age").removeClass("step-current"),t(".four-steps-gender").addClass("step-current")}})})),t(".four-steps-gender label").on("mouseup",(function(){r(),gsap.to(".four-steps-gender",{y:"-100vh",ease:"none",duration:1}),gsap.to(".four-steps-orientation",{y:0,ease:"none",duration:1,onComplete:function(){t(".four-steps-gender").css("opacity, 0");var e=0;gsap.utils.toArray(".four-steps-orientation .text, .four-steps-orientation ul li").forEach((t,s)=>{gsap.to(t,{x:0,ease:"none",duration:.5,delay:e}),e+=.2}),t(".four-steps-gender").removeClass("step-current"),t(".four-steps-orientation").addClass("step-current")}},"-=1")})),t(".four-steps-orientation label").on("mouseup",(function(){r(),t(".test-progress .steps .step:nth-child(1)").addClass("active"),gsap.to(".four-steps-orientation",{y:"-100vh",opacity:0,ease:"none",duration:1}),gsap.to(".four-steps-wrapper",{backgroundColor:"#FF9072",duration:1,onComplete:function(){t(".btn-next").get(0).click()}})})),t(".btn-previous").on("click",(function(){var e=t(".step-current");e.parent().hasClass("four-steps-wrapper")&&(e.hasClass("four-steps-age")?(t(".four-steps-relations").css("opacity",1),gsap.to(".four-steps-age",{y:"100vh",ease:"none",duration:.5}),gsap.utils.toArray(".four-steps-relations ul li, .four-steps-relations .el, .four-steps-relations .text").forEach((t,e)=>{gsap.to(t,{y:0,transformOrigin:"center",ease:"none",duration:.5}),gsap.to(".four-steps-relations ul li, .four-steps-relations .text",{rotate:0,transformOrigin:"center",ease:"none",duration:.5})}),t(".four-steps-age").removeClass("step-current"),t(".four-steps-relations").addClass("step-current"),t(".btn-previous").css("opacity",0)):e.hasClass("four-steps-gender")?(gsap.to(".four-steps-gender",{y:"100vh",ease:"none",duration:0}),gsap.to(".four-steps-age ul li.active label",{scale:1,ease:"none",duration:1}),t(".four-steps-gender").removeClass("step-current"),t(".four-steps-age .container").css("overflow","auto"),t(".four-steps-age").css("opacity",1).addClass("step-current")):(t(".four-steps-gender").css("opacity, 1"),gsap.to(".four-steps-gender",{y:0,ease:"none",duration:.5}),gsap.to(".four-steps-orientation",{y:"100vh",ease:"none",duration:.5}),t(".four-steps-orientation").removeClass("step-current"),t(".four-steps-gender").addClass("step-current")))}))}if(document.querySelector(".test-step")){var s={37:1,38:1,39:1,40:1};function o(t){t.preventDefault()}function n(t){if(s[t.keyCode])return o(t),!1}var i=!1;try{window.addEventListener("test",null,Object.defineProperty({},"passive",{get:function(){i=!0}}))}catch(t){}var a=!!i&&{passive:!1},l="onwheel"in document.createElement("div")?"wheel":"mousewheel";window.addEventListener("DOMMouseScroll",o,!1),window.addEventListener(l,o,a),window.addEventListener("touchmove",o,a),window.addEventListener("keydown",n,!1),t(".test-options ul li label").on("mouseenter",(function(){t(this).addClass("hover")})).on("mouseleave",(function(){t(this).removeClass("hover")})),gsap.to(".test-step",{y:0,opacity:1,duration:.5,ease:"none",onComplete:function(){gsap.to(".test-options",{opacity:1,duration:.5,ease:"none"})}}),document.querySelectorAll(".test-scroller li").forEach((e,s)=>{gsap.to(e,{scrollTrigger:{scroller:".test-step-inner",trigger:e,start:"top 40%",end:"top top-=50",toggleClass:"active",onEnter:function(){t(".test-options").removeClass("selected"),t("#testChoices").length&&t("#testChoices").get(0).reset()}}})}),t(".test-scroller input").each((function(){""!==t(this).val()&&t(this).addClass("filled")}))}if(document.querySelector(".test-step--type1")){var p=!1;t(".test-step--type1 .test-options label").on("click",(function(e){if("INPUT"===e.target.tagName&&!p){p=!0,r(),t(this).removeClass("hover");var s=t(".test-scroller li.active"),o=t("[name=test]:checked").val(),n=t(".test-scroller li").length;if(s.length)s.find("input").addClass("filled").val(o);if(t(".test-scroller .filled").length===n)if(t(".test-progress .steps .step.active").next().addClass("active"),t("#testChoices").addClass("disabled"),gsap.to(".test-progress",{opacity:0,duration:.5}),t("#testChoices").length&&t("#testChoices").get(0).reset(),t(window).width()>=1024)t(".test-step-inner").animate({scrollTop:t(".test-scroller").height()},1e3,(function(){gsap.timeline().to(".test-options li span",{color:"transparent",duration:.5}).to(".test-options li path",{fill:"#F9F3E9",duration:.5},"-=0.5").to(".test-options li:nth-child(1)",{y:160,duration:.5},"-=1").to(".test-options li:nth-child(2)",{y:80,duration:.5},"-=0.5").to(".test-options li:nth-child(4)",{y:-80,duration:.4},"-=0.5").to(".test-options li:nth-child(5)",{y:-160,duration:.4},"-=0.5").to(".test-options li:nth-child(1),.test-options li:nth-child(2),.test-options li:nth-child(3),.test-options li:nth-child(4)",{opacity:0,duration:.1},"-=0.1").to(".test-options li:nth-child(5) figure",{scale:330,duration:2}).to(".step-main-wrapper",{opacity:0,duration:.5}).to("body",{backgroundColor:"#F9F3E9",duration:.5,onComplete:function(){t(".btn-next").get(0).click()}},"-=0.5")}));else{gsap.timeline().to(".test-options li path",{fill:"#F9F3E9",duration:.5}).to(".test-options li:nth-child(3) figure svg",{scale:25,y:"35%",transformOrigin:"center bottom",duration:2}).to(".step-main-wrapper",{opacity:0,duration:.5},"-=0.5").to("body",{backgroundColor:"#F9F3E9",duration:.5,onComplete:function(){t(".btn-next").get(0).click()}},"-=0.5")}else setTimeout(()=>{t(".test-step-inner").animate({scrollTop:t(".test-step-inner").scrollTop()+s.outerHeight()},500,(function(){p=!1}))},200)}})),t(document).on("click",".btn-previous",(function(e){if(!t(".test-scroller li:first-child").hasClass("active")){e.preventDefault();var s=t(".test-scroller li.active").prev("li");t(".test-step-inner").animate({scrollTop:t(".test-step-inner").scrollTop()-s.outerHeight()},500,(function(){var e=t(".test-scroller li.active"),s=parseInt(e.find("input").val());t(".test-options").addClass("selected"),t(".test-options input").each((function(){parseInt(t(this).val())===s&&t(this).prop("checked",!0)}))}))}}))}document.querySelector(".test-step--type2")&&(t(".test-step--type2 .test-options label").on("click",(function(e){if("INPUT"===e.target.tagName){r(),t(".test-options").addClass("selected");var s=t(this),o=t(".test-step").attr("data-nextcolor");s.removeClass("hover");var n=t(".test-scroller li.active"),i=t("[name=test]:checked").val(),a=t(".test-scroller li").length;if(n.length)n.find("input").addClass("filled").val(i);if(t(".test-scroller .filled").length===a){t("#testChoices").addClass("disabled"),t(".test-progress .steps .step.active").next().addClass("active"),gsap.to(".test-progress",{opacity:0,duration:.5});gsap.timeline().to(".test-scroller",{opacity:0,duration:.5}).to(s.find("path"),{fill:"#454FDB",duration:.5},"-=0.5").to(s.find("svg"),{fill:o,scale:30,y:"-20vh",transformOrigin:"center",duration:2}).to(".step-main-wrapper",{opacity:0,duration:.5},"-=0.5").to("body",{backgroundColor:o,duration:.5,onComplete:function(){t(".btn-next").get(0).click()}},"-=0.5")}else if(t(window).width()>=1024){gsap.timeline().to(s.find("figure"),{scale:2,transformOrigin:"center bottom",duration:.25,onComplete:function(){gsap.to(s.find("figure"),{scale:3,y:"-120vh",duration:.25}),t("#testChoices").get(0).reset(),t(".images-scroller").animate({scrollTop:t(".images-scroller").scrollTop()+t(window).height()},300),t(".test-step-inner").animate({scrollTop:t(".test-step-inner").scrollTop()+n.outerHeight()},300,(function(){gsap.to(t(".test-scroller li.active").prev(),{top:0,duration:0}),gsap.to(t(".test-options figure[style]"),{scale:1,y:0,duration:0})}))}})}else setTimeout(()=>{t("#testChoices").get(0).reset(),t(".test-options").removeClass("selected"),t(".test-step-inner").animate({scrollTop:t(".test-step-inner").scrollTop()+n.outerHeight()},500,(function(){gsap.to(t(".test-scroller li.active").prev(),{top:0,duration:0})}))},700)}})),t(document).on("click",".btn-previous",(function(e){if(!t(".test-scroller li:first-child").hasClass("active")){e.preventDefault();var s=t(".test-scroller li.active").prev("li");t(".images-scroller").animate({scrollTop:t(".images-scroller").scrollTop()-t(window).height()},500),t(".test-step-inner").animate({scrollTop:t(".test-step-inner").scrollTop()-s.outerHeight()},500,(function(){var e=t(".test-scroller li.active"),s=parseInt(e.find("input").val());t(".test-options").addClass("selected"),t(".test-options input").each((function(){parseInt(t(this).val())===s&&t(this).prop("checked",!0)}))}))}})))}()}));