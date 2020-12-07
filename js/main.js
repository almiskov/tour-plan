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

  // валидация форм
  $('.form').each(function() {
    $(this).validate({
      debug: true,
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true,
          tel: true
        }
      },
      messages: {
        name: {
          required: "Please, enter your name",
          minlength: "Name should contain at least 2 characters"
        },
        email: {
          required: "Please, enter your email",
        },
        phone: {
          required: "Please, enter your phone",
        },
      },
    })
  })

  $('.subscribe__form').each(function() {
    $(this).validate({
      errorPlacement: function(error, element) {
        // TODO выровнять нормально
        error.insertAfter(element.parent('form'));
      },
      debug: true,
      rules: {
        search: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
      },
      messages: {
        search: {
          required: "Please, enter your name",
          minlength: "Name should contain at least 2 characters"
        },
        email: {
          required: "Please, enter your email",
        },
      },
    })
  })

  $('input[type=tel]').mask('+7 (000) 000-00-00');

})