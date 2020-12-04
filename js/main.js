$(document).ready(function() {
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

  const menuButton = $('.menu-button')
  menuButton.on('click', function () {
    const navbarBottom = $('.navbar-bottom')
    navbarBottom.toggleClass('navbar-bottom_visible')
    
    navbarBottom.hasClass('navbar-bottom_visible')
      ? document.body.style.overflow = 'hidden'
      : document.body.style.overflow = ''
  })


  const modal = $('.modal')
  const modalButton = $('[data-toggle=modal]')
  modalButton.on('click', function(e) {
    e.preventDefault();
    modal.toggleClass('modal_visible');
  })

  $('body').keyup(function(e){
    if(e.key == 'Escape' && modal.hasClass('modal_visible')){
      modal.removeClass('modal_visible');
    }
});

})