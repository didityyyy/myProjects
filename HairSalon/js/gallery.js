function OpenColoring() {
    hairstyles.style.display = "none";
    coloring.style.display = "block";
}

function OpenHairstyles() {
    coloring.style.display = "none";
    hairstyles.style.display = "block";
}

var slideIndexColor = 1;
var slideIndexHairstyle = 23;
showSlides(slideIndexColor);
slowSlides(slideIndexHairstyle);

function plusSlides(n) {
  showSlides(slideIndexColor += n);
  showSlides(slideIndexHairstyle += n);
}

function currentSlide(n) {
  showSlides(slideIndexColor = n);
  showSlides(slideIndexHairstyle = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("main");
  var dots = document.getElementsByClassName("demo");

  if (n > slides.length) {
      slideIndexColor = 1;
      slideIndexHairstyle = 1;  
    }
  if (n < 1) {
      slideIndexColor = slides.length;
      slideIndexHairstyle = slides.length;
    }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexColor-1].style.display = "block";
  dots[slideIndexColor-1].className += " active";
  slides[slideIndexHairstyle-1].style.display = "block";
  dots[slideIndexHairstyle-1].className += " active";
}

