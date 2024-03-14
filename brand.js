const brandSlider = document.querySelector('.brand-slider');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentPosition = 0;

prevButton.addEventListener('click', () => {
  currentPosition += 220; // Adjust the value based on the image width and margin-right
  if (currentPosition > 0) {
    currentPosition = 0;
  }
  brandSlider.style.transform = `translateX(${currentPosition}px)`;
});

nextButton.addEventListener('click', () => {
  const containerWidth = document.querySelector('.brand-slider-container').offsetWidth;
  const sliderWidth = brandSlider.offsetWidth;
  currentPosition -= 220; // Adjust the value based on the image width and margin-right
  if (containerWidth - sliderWidth > currentPosition) {
    currentPosition = containerWidth - sliderWidth;
  }
  brandSlider.style.transform = `translateX(${currentPosition}px)`;
});
