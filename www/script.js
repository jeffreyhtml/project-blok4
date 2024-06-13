let slideIndex = 0;

function moveSlide(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  const slides = document.getElementsByClassName("slide");
  if (n >= slides.length) {
    slideIndex = 0;
  }
  if (n < 0) {
    slideIndex = slides.length - 1;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}

// Voeg de volgende regel toe om elke 3 seconden naar de volgende dia te gaan
setInterval(() => moveSlide(1), 3000);