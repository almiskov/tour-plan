var hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,
  parallax: true,
  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button-next',
    prevEl: '.hotel-slider__button-prev',
  },
  keyboard: {
    enabled: true,
  }
})

var reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,
  parallax: true,
  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button-next',
    prevEl: '.reviews-slider__button-prev',
  },
  keyboard: {
    enabled: true,
  }
})

const menuButton = document.querySelector('.menu-button')
menuButton.addEventListener('click', () => {
  const navbarBottom = document.querySelector('.navbar-bottom')
  navbarBottom.classList.toggle('navbar-bottom_visible')
  
  navbarBottom.classList.contains('navbar-bottom_visible')
    ? document.body.style.overflow = 'hidden'
    : document.body.style.overflow = ''
})