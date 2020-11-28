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

ymaps.ready(init);

function init(){
    var myMap = new ymaps.Map("map", {
        center: [55.843450, 37.483939],
        zoom: 12,
        controls: [ 'zoomControl',
          'fullscreenControl',
        ]
    });

    var hilton = new ymaps.Placemark(
      [55.843450, 37.483939], 
      {
        balloonContentHeader: "GRAND HILTON HOTEL",
        balloonContentBody: "Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free",
        hintContent: "GRAND HILTON HOTEL"
      },
      {
        preset: 'islands#redHotelIcon',
      }
    )

    myMap.geoObjects.add(hilton)
}