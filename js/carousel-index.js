var indexImagenCarousel = 1;
mostrarImagenCarousel(indexImagenCarousel);

// Controles de anterior y siguiente
function cambioImagenCarousel(n) {
  mostrarImagenCarousel(indexImagenCarousel += n);
}

// Thumbnail image controls
function imagenActualCarousel(n) {
  mostrarImagenCarousel(indexImagenCarousel = n);
}

function mostrarImagenCarousel(n) {
  var i;
  var slides = document.getElementsByClassName("ocultas");
  var dots = document.getElementsByClassName("carousel-punto");
  if (n > slides.length) {indexImagenCarousel = 1}
  if (n < 1) {indexImagenCarousel = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[indexImagenCarousel-1].style.display = "block";
  dots[indexImagenCarousel-1].className += " active";
}