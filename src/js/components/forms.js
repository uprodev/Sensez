jQuery(document).ready(function ($) {
  if (window.visualViewport.height < 800) {
    $(".page-wrapper").addClass("less-height");
  }
  $(window).on("resize", function () {
    if (window.visualViewport.height < 800) {
      $(".page-wrapper").addClass("less-height");
    } else {
      $(".page-wrapper").removeClass("less-height");
    }
  });

  var barInner = $(".bar-inner"),
    barIcon = $(".bar-icon");

  gsap.to(barInner, {
    width: "100%",
    duration: 1.5,
    delay: 1,
    ease: Power1.easeIn,
  });
  gsap.to(barIcon, {
    left: "100%",
    duration: 1.5,
    delay: 1,
    ease: Power1.easeIn,
  });

  $(".code-copy").on("click", function () {
    copyTextToClipboard($(".code-value").text());
    $(".code-copy").text("Copied!");
  });
  $(".code-value").on("click", function () {
    copyTextToClipboard($(this).text());
    $(".code-copy").text("Copied!");
  });

  $("#inputCode").mask("999999");

  $(".contact-us-close").on("click", function () {
    $(".contact-us").hide(200);
  });

  $("#regForm input").on("blur", function () {
    var err = false;
    $("#regForm input").each(function () {
      if ($(this).val() === "") {
        err = true;
      }
    });
    $("#regForm .check-field input").each(function () {
      if (!$(this).prop("checked")) {
        err = true;
      }
    });
    if (!$("#regForm input.error").length && !err) {
      $("#regForm [type=submit]").removeAttr("disabled");
    }
  });
  $("#regForm .check-field input").each(function () {
    $(this).on("change", function () {
      if (!$(this).prop("checked")) {
        $("#regForm [type=submit]").attr("disabled", "disabled");
      } else {
        if (!$("#regForm input.error").length) {
          $("#regForm [type=submit]").removeAttr("disabled");
        }
      }
    });
  });

  $("#formGift .field:not(.field-optional) input").on("blur", function () {
    var err = false;
    $("#formGift .field:not(.field-optional) input").each(function () {
      if ($(this).val() === "") {
        err = true;
      }
    });
    $("#formGift .check-field input").each(function () {
      if (!$(this).prop("checked")) {
        err = true;
      }
    });
    if (!$("#formGift input.error").length && !err) {
      $("#formGift [type=submit]").removeAttr("disabled");
    }
  });
  $("#formGift .check-field input").each(function () {
    $(this).on("change", function () {
      if (!$(this).prop("checked")) {
        $("#formGift [type=submit]").attr("disabled", "disabled");
      } else {
        if (!$("#formGift input.error").length) {
          $("#formGift [type=submit]").removeAttr("disabled");
        }
      }
    });
  });

  $("#giftSubmit input").on("keyup", function () {
    if ($(this).val().length === 4 && $(this).val().indexOf("_") === -1) {
      $("#giftSubmit [type=submit]").removeAttr("disabled");
    }
  });
});

if (document.getElementById("textarea")) {
  var observe;
  if (window.attachEvent) {
    observe = function (element, event, handler) {
      element.attachEvent("on" + event, handler);
    };
  } else {
    observe = function (element, event, handler) {
      element.addEventListener(event, handler, false);
    };
  }
  function initTextarea() {
    var text = document.getElementById("textarea");
    function resize() {
      if (text.value !== "") {
        text.style.height = "auto";
        text.style.height = text.scrollHeight + "px";
      } else {
        text.removeAttribute("style");
      }
    }
    function delayedResize() {
      window.setTimeout(resize, 0);
    }
    observe(text, "change", resize);
    observe(text, "cut", delayedResize);
    observe(text, "paste", delayedResize);
    observe(text, "drop", delayedResize);
    observe(text, "keydown", delayedResize);
    resize();
  }
  initTextarea();
}

function fallbackCopyTextToClipboard(text) {
  var textArea = document.createElement("textarea");
  textArea.value = text;

  // Avoid scrolling to bottom
  textArea.style.top = "0";
  textArea.style.left = "0";
  textArea.style.position = "fixed";

  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    var successful = document.execCommand("copy");
    var msg = successful ? "successful" : "unsuccessful";
    console.log("Fallback: Copying text command was " + msg);
  } catch (err) {
    console.error("Fallback: Oops, unable to copy", err);
  }

  document.body.removeChild(textArea);
}
function copyTextToClipboard(text) {
  if (!navigator.clipboard) {
    fallbackCopyTextToClipboard(text);
    return;
  }
  navigator.clipboard.writeText(text).then(
    function () {
      console.log("Async: Copying to clipboard was successful!");
    },
    function (err) {
      console.error("Async: Could not copy text: ", err);
    }
  );
}
