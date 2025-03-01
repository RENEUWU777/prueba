// Animación de texto en el encabezado
document.addEventListener('DOMContentLoaded', () => {
    const animatedText = document.querySelector('.animated-text');
    let text = animatedText.textContent;
    animatedText.textContent = '';
    let i = 0;
  
    const interval = setInterval(() => {
      animatedText.textContent += text[i];
      i++;
      if (i === text.length) {
        clearInterval(interval);
      }
    }, 10);
  });
  
  // Carrusel de imágenes
  document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.carousel-img');
    let currentIndex = 0;
    
    function showNextImage() {
      images[currentIndex].classList.remove('visible');
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add('visible');
    }
  
    // Cambia de imagen cada 5 segundos
    setInterval(showNextImage, 5000);
  });
  