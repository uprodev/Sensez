jQuery(document).ready(function ($) {
  var tension = 1;
  var paths = document.querySelectorAll(".graph-main--desktop .path");
  var texts = document.querySelectorAll(".graph-main--desktop .path-title");

  var kHor = 65,
    kVer = 14,
    difTop = 50;

  if ($(window).width() < 768) {
    var paths = document.querySelectorAll(".graph-main--mobile .path");
    var texts = document.querySelectorAll(".graph-main--mobile .path-title");
    (kHor = 18.3), (kVer = 7.2), (difTop = 20);
  }

  console.log(paths);

  var startPoints = [
    [0, 25, 1, 25, 2, 25, 3, 25, 4, 25, 5, 25],
    [4, 25, 5, 25, 6, 25, 7, 25, 8, 25, 9, 25],
    [8, 25, 9, 25, 10, 25, 11, 25, 12, 25, 13, 25],
    [12, 25, 13, 25, 14, 25, 15, 25, 16, 25, 17, 25],
  ];

  var newPoints = [
    [0, 25, 1, 10, 2, 5, 3, 11, 4, 15, 5, 25],
    [4, 25, 5, 10, 6, 1, 7, 0, 8, 5, 9, 25],
    [8, 25, 9, 11, 10, 2, 11, 10, 12, 5, 13, 25],
    [12, 25, 13, 11, 14, 0, 15, 10, 16, 7, 17, 25],
  ];

  paths.forEach((path, i) => {
    points = startPoints[i];
    endPoints = newPoints[i];
    TweenMax.to(points, 2, {
      endArray: endPoints,
      ease: Power1.easeInOut,
      onUpdate: function () {
        drawPath(i);
      },
      onComplete: function () {
        setTexts(i);
        setDots(i);
      },
    });
  });

  setTimeout(() => {
    gsap.to(".path-title", {
      duration: 0.5,
      opacity: 1,
      stagger: 0.3,
    });
    if ($(window).width() >= 768) {
      gsap.to(".dots-box", {
        duration: 0.5,
        opacity: 1,
        stagger: 0.3,
      });
      gsap.to(".path-dot", {
        duration: 2,
        scale: 0.7,
        transformOrigin: "center",
        repeat: -1,
        yoyo: true,
      });
    }
  }, 2200);

  function setDots(i) {
    var dots = document.querySelector(".graph-main--desktop .dots-" + i);

    if ($(window).width() < 768) {
      dots = document.querySelector(".graph-main--mobile .dots-" + i);
    }

    var start = [];
    var data = startPoints[i];
    data = data.map(function (element, i) {
      if (i % 2) {
        return element * kVer + difTop;
      }
      return element * kHor;
    });
    for (var i = 2; i < data.length - 2; i++) {
      if (i % 2) {
        var x = data[i - 1],
          y = data[i];
        start.push({ x: x, y: y });
      }
    }
    var dotsInner = dots.querySelectorAll(".path-dot");
    dotsInner.forEach((dot, i) => {
      var x = parseFloat(start[i].x),
        y = parseFloat(start[i].y);

      var d = "M" + x + " " + y + "L" + (x + 2.127) + " " + (y + 5.87302) + "L" + (x + 8) + " " + (y + 8) + "L" + (x + 2.127) + " " + (y + 10.127) + "L" + x + " " + (y + 16) + "L" + (x - 2.127) + " " + (y + 10.127) + "L" + (x - 8) + " " + (y + 8) + "L" + (x - 2.127) + " " + (y + 5.87302) + "L" + x + " " + y + "Z";

      if ($(window).width() < 768) {
        var d = "M" + x + " " + y + "L" + (x + 1.06349) + " " + (y + 2.93651) + "L" + (x + 4) + " " + (y + 4) + "L" + (x + 1.06349) + " " + (y + 5.06349) + "L" + x + " " + (y + 8) + "L" + (x - 1.06349) + " " + (y + 5.06349) + "L" + (x - 4) + " " + (y + 4) + "L" + (x - 1.06349) + " " + (y + 2.93651) + "L" + x + " " + y + "Z";
      }

      dot.setAttribute("d", d);

      if ($(window).width() < 768) {
        dot.setAttribute("transform", "matrix(1, 0, 0, 1, 0, -4)");
      } else {
        dot.setAttribute("transform", "matrix(1, 0, 0, 1, 0, -8)");
      }
    });
  }

  function setTexts(i) {
    var data = startPoints[i];
    var x = 0,
      y = 25;
    data.map(function (element, i) {
      if (i % 2) {
        if (element < y) {
          y = element;
          x = data[i - 1];
        }
      }
    });
    texts[i].setAttribute("x", x * kHor);
    texts[i].setAttribute("y", y * kVer + 30);
  }

  function drawPath(i) {
    paths[i].setAttribute("d", cardinalSpline(startPoints[i], tension));
  }

  function cardinalSpline(data, k) {
    if (k == null) k = 1;

    data = data.map(function (element, i) {
      if (i % 2) {
        return element * kVer + difTop;
      }
      return element * kHor;
    });

    var size = data.length;
    var last = size - 4;

    var path = `M${data[0]} ${data[1]} C`;

    for (var i = 0; i < size - 2; i += 2) {
      var x0 = i ? data[i - 2] : data[0];
      var y0 = i ? data[i - 1] : data[1];

      var x1 = data[i + 0];
      var y1 = data[i + 1];

      var x2 = data[i + 2];
      var y2 = data[i + 3];

      var x3 = i !== last ? data[i + 4] : x2;
      var y3 = i !== last ? data[i + 5] : y2;

      var cp1x = x1 + ((x2 - x0) / 6) * k;
      var cp1y = y1 + ((y2 - y0) / 6) * k;

      var cp2x = x2 - ((x3 - x1) / 6) * k;
      var cp2y = y2 - ((y3 - y1) / 6) * k;

      path += ` ${cp1x} ${cp1y} ${cp2x} ${cp2y} ${x2} ${y2}`;
    }

    return path;
  }
});
