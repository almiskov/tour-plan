$(document).ready(function() {
  AOS.init();

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
    modal.hasClass('modal_visible')
      ? document.body.style.overflow = 'hidden'
      : document.body.style.overflow = ''
  })

  $('body').keyup(function(e){
    if(e.key == 'Escape' && modal.hasClass('modal_visible')){
      modal.removeClass('modal_visible');
      document.body.style.overflow = ''
    }
  });

  // валидация форм

  $.validator.addMethod('phone', function(value, element, params) {
    const regexp = params.regexp;
    if (!regexp)
      throw Error("Should specify phone regular expression")

    const reg = new RegExp(regexp)

    return this.optional(element) || reg.test( value );
  }, "Please, enter your number")


  $('input[type=tel]').mask('+7 (000) 000-00-00');

  $('.navbar__search').validate({
      errorLabelContainer: "#search-form-error",
      rules: {
        search: {
          required: true
        },
      },
      messages: {
        search: {
          required: "Please, enter location",
          minlength: "Name should contain at least 2 characters"
        }
      },
    })

  $('.navbar-menu__search').validate({
      errorLabelContainer: "#menu-search-form-error",
      rules: {
        search: {
          required: true
        },
      },
      messages: {
        search: {
          required: "Please, enter location",
          minlength: "Name should contain at least 2 characters"
        }
      },
    })

  $('.form').each(function() {
    $(this).validate({
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
          phone: {
            regexp: /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/
          }
        }
      },
      messages: {
        name: {
          required: "Please, enter your name",
          minlength: "Name must contain at least 2 characters"
        },
        email: {
          required: "Please, enter your email",
        },
        phone: {
          required: "Please, enter your number",
        },
      },
    })
  })

  $('.subscribe__form').validate({
    errorLabelContainer: "#subscribe-error",
    rules: {
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      email: {
        required: "Please, enter your email",
      },
    },
  })
})