function smoothScroll(target, duration) {
  var target = document.querySelector(target);
  var targetPosition = target.getBoundingClientRect().top;
  var startPosition = window.pageYOffset;
  var startTime = null;

  function animation(currentTime) {
    if (startTime === null) {
      startTime = currentTime;
    }
    var timeElapsed = currentTime - startTime;
    var run = ease(timeElapsed, startPosition, targetPosition, duration);
    window.scrollTo(0, run);

    if (timeElapsed < duration) {
      requestAnimationFrame(animation);
    }
  }

  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

const aboutSelect = document.querySelector("#about-select");
aboutSelect.addEventListener("click", function () {
  smoothScroll("#about-section", 1000);
});

const skillsSelect = document.querySelector("#what-we-do-select");
skillsSelect.addEventListener("click", function () {
  smoothScroll("#what-we-do-section", 1000);
});

const scrollSelect = document.querySelector("#scroll-select");
scrollSelect.addEventListener("click", function () {
  smoothScroll("#about-section", 1000);
});
