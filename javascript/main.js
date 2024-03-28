document.addEventListener("DOMContentLoaded", function () {
  var animatedElements = document.querySelectorAll('.reveal');
  var windowHeight = window.innerHeight;

  function revealElements() {
    animatedElements.forEach(function (element) {
      var elementTop = element.getBoundingClientRect().top;

      if (elementTop < windowHeight) {
        element.classList.add('visible');
      }
    });
  }
  revealElements();

  window.addEventListener('scroll', function () {
    revealElements();
  });

  window.addEventListener('resize', function () {
    var sidenav = document.querySelector('.sidenav');
    var content = document.querySelector('.content');
    if (window.innerWidth < 900) {
      sidenav.style.display = 'none';
      content.style.marginLeft = '0';
    } else {
      sidenav.style.display = 'block';
      content.style.marginLeft = '15%';
    }
  });
});
