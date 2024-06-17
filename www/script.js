let slideIndex = 0;

// Volgende slide
function moveSlide(n) {
  showSlides(slideIndex += n);
}

// Huidige slide
function showSlides(n) {
  // Elementen met class slide
  const slides = document.getElementsByClassName("slide");
  
  if (n >= slides.length) {
    slideIndex = 0;
  }
  if (n < 0) {
    slideIndex = slides.length - 1;
  }
  
  // Verbergt de slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  // de huidige slide
  slides[slideIndex].style.display = "block";
}
// De tijd tussen bewegingen
setInterval(() => moveSlide(1), 3000);
