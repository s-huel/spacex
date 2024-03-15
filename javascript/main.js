document.addEventListener("DOMContentLoaded", function() {
    var animatedElements = document.querySelectorAll('.reveal');
    var windowHeight = window.innerHeight;
  
    function revealElements() {
      animatedElements.forEach(function(element) {
        var elementTop = element.getBoundingClientRect().top;
  
        if (elementTop < windowHeight) {
          element.classList.add('visible');
        }
      });
    }
    revealElements();

    window.addEventListener('scroll', function() {
      revealElements();
    });
  });
  