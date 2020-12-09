<?php include('./header.html') ?>

<section class="hotel">
  <div class="container">
    <div class="hotel-info">
      <div class="hotel-info__text">
        <div class="hotel-wrapper">
          <div class="stars hotel__stars">
            <svg class="star">
              <use xlink:href="./img/svg/sprite.svg#star"></use>
            </svg>
            <svg class="star">
              <use xlink:href="./img/svg/sprite.svg#star"></use>
            </svg>
            <svg class="star">
              <use xlink:href="./img/svg/sprite.svg#star"></use>
            </svg>
            <svg class="star">
              <use xlink:href="./img/svg/sprite.svg#star"></use>
            </svg>
            <svg class="star">
              <use xlink:href="./img/svg/sprite.svg#star"></use>
            </svg>
          </div>
          <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <!-- /.hotel-wrapper -->
        <p class="hotel-description hotel-info__description">
          Half-Board/ All Inclusive + Complimentary Activities + Child Stays
          Free
        </p>
      </div>
      <!-- /.hotel-info__text -->
      <div class="rating hotel-info__rating">
        <span class="rating__text">User Ratings</span>
        <span class="rating__counter">
          4.5/<span class="rating__counter-total">5</span>
        </span>
      </div>
      <!-- /.hotel-info__rating -->
    </div>
    <!-- /.hotel-info -->
    <div class="hotel-grid">
      <div class="swiper-container hotel-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide hotel-slider__item">
            <img class="hotel-slider__item-img" src="./img/hotel-slider/slide-1.jpg" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="hotel-slider__item-img" src="./img/hotel-slider/slide-2.jpg" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="hotel-slider__item-img" src="./img/hotel-slider/slide-3.jpg" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="hotel-slider__item-img" src="./img/hotel-slider/slide-4.jpg" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="hotel-slider__item-img" src="./img/hotel-slider/slide-5.jpg" alt="slide" />
          </div>
          <div class="swiper-slide hotel-slider__item">
            <img class="hotel-slider__item-img" src="./img/hotel-slider/slide-6.jpg" alt="slide" />
          </div>
        </div>
        <!-- /.swiper-wrapper -->

        <button class="hotel-slider__button hotel-slider__button-prev"></button>
        <button class="hotel-slider__button hotel-slider__button-next"></button>
      </div>
      <!-- /.swiper-container -->
      <div class="hotel-right">
        <div class="booking">
          <div class="booking__info">
            <div class="booking__price">
              <span class="booking__start">price starts at</span>
              <strong class="booking__pricetag">$ 8,500</strong>
              <span class="booking__per-room">per room / night</span>
            </div>
            <!-- /.booking-price -->
            <div class="booking__room">
              <div class="booking__text">
                <svg class="booking__icon">
                  <use xlink:href="./img/svg/sprite.svg#user"></use>
                </svg>
                <span class="booking__description">2 x Guests</span>
              </div>
              <div class="booking__text">
                <svg class="booking__icon">
                  <use xlink:href="./img/svg/sprite.svg#home"></use>
                </svg>
                <span class="booking__description">1 x Room</span>
              </div>
            </div>
            <!-- /.booking__room -->
          </div>
          <!-- /.booking__info -->
          <div class="booking__call-center">
            <span class="booking__heading">Quick Booking</span>
            <a class="booking__number" href="tel:12100">
              <svg class="booking__icon">
                  <use xlink:href="./img/svg/sprite.svg#phone-call"></use>
                </svg>
              <span class="booking__num">12100</span>
            </a>
          </div>
          <!-- /.booking__call-center -->
          <button data-toggle="modal" class="button booking__button">
            View Other Options
          </button>
        </div>
        <!-- /.booking -->
        <div class="map">
          <iframe class="map__frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71614.91237402848!2d37.50552179828468!3d55.880604190937156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5481b0f9c9949%3A0x1aa05ec2e60a61bf!2sDoubleTree%20by%20Hilton%20Hotel%20Moscow%20-%20Marina!5e0!3m2!1sru!2sru!4v1606244292845!5m2!1sru!2sru" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- /.map -->
      </div>
      <!-- /.hotel-right -->
    </div>
  </div>
  <!-- /.container -->
</section>

<section class="packages">
  <div class="container">
    <h2 class="packages__title">Other Packages</h2>
    <div class="packages__grid">
      <div class="package" data-aos="zoom-in">
        <div class="package__view">
          <img src="./img/packages/package-1.jpg" alt="Image: package" class="package__image" />
        </div>
        <div class="package__info">
          <div class="package__top">
            <div class="stars package__stars">
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
            </div>
            <!-- /.stars package__stars -->
            <h3 class="package__title">Hotel Blue Haven</h3>
            <p class="package__description">
              Aute quis duis excepteur excepteur ipsum cat eiusmod
              consectetur enim laborum magna llit. Ipsum est fugiat velit ea
              llamco do esse ut in veniam sun in onsequat. Aute quis duis
              epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum
              magna mollit. Ipsum est fugiat velit ea ullamco do
            </p>
          </div>
          <!-- /.package__top -->
          <div class="package__bottom">
            <div class="package__properties">
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#map-pin"></use>
                </svg>
                <span class="property__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#user"></use>
                </svg>
                <span class="property__description">2 x Guests</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#home"></use>
                </svg>
                <span class="property__description">1 x Room</span>
              </div>
            </div>
            <!-- /.package__properties -->
            <div class="package__prices">
              <span class="package__pricetag-old">$ 10,500</span>
              <span class="package__pricetag-new">$ 8,500</span>
            </div>
            <!-- /.package__prices -->
            <button class="package__button">Book Now</button>
          </div>
          <!-- /.package__bottom -->
        </div>
        <!-- /.package__info -->
        <span class="package__offer">Flash Offer</span>
      </div>
      <!-- /.package -->
      <div class="package" data-aos="zoom-in">
        <div class="package__view package__view_small">
          <img src="./img/packages/package-2.jpg" alt="Image: package" class="package__image" />
        </div>
        <div class="package__info package__info_small">
          <div class="package__top">
            <div class="stars package__stars package__stars_small">
            <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
            </div>
            <!-- /.stars package__stars -->
            <h3 class="package__title package__title_small">
              LUX* Belle Mare
            </h3>
            <p class="package__description package__description_small">
              some example text
            </p>
          </div>
          <!-- /.package__top -->
          <div class="package__bottom">
            <div class="package__properties package__properties_small">
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#map-pin"></use>
                </svg>
                <span class="property__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#user"></use>
                </svg>
                <span class="property__description">2 x Guests</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#home"></use>
                </svg>
                <span class="property__description">1 x Room</span>
              </div>
            </div>
            <!-- /.package__properties -->
            <div class="package__prices">
              <span class="package__pricetag-old">$ 8,500</span>
              <span class="package__pricetag-new">$ 3,000</span>
            </div>
            <!-- /.package__prices -->
            <button class="package__button">Book Now</button>
          </div>
          <!-- /.package__bottom -->
        </div>
        <!-- /.package__info -->
        <span class="package__offer package__offer_small">Flash Offer</span>
      </div>
      <!-- /.package -->
      <div class="package" data-aos="zoom-in">
        <div class="package__view package__view_small">
          <img src="./img/packages/package-3.jpg" alt="Image: package" class="package__image" />
        </div>
        <div class="package__info package__info_small">
          <div class="package__top">
            <div class="stars package__stars package__stars_small">
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
            </div>
            <!-- /.stars package__stars -->
            <h3 class="package__title package__title_small">
              White Palace
            </h3>
            <p class="package__description package__description_small">
              some example text
            </p>
          </div>
          <!-- /.package__top -->
          <div class="package__bottom">
            <div class="package__properties package__properties_small">
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#map-pin"></use>
                </svg>
                <span class="property__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#user"></use>
                </svg>
                <span class="property__description">2 x Guests</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#home"></use>
                </svg>
                <span class="property__description">1 x Room</span>
              </div>
            </div>
            <!-- /.package__properties -->
            <div class="package__prices">
              <span class="package__pricetag-old">$ 10,500</span>
              <span class="package__pricetag-new">$ 9,500</span>
            </div>
            <!-- /.package__prices -->
            <button class="package__button">Book Now</button>
          </div>
          <!-- /.package__bottom -->
        </div>
        <!-- /.package__info -->
        <span class="package__offer package__offer_small">Flash Offer</span>
      </div>
      <!-- /.package -->
      <div class="package" data-aos="zoom-in">
        <div class="package__view package__view_small">
          <img src="./img/packages/package-4.jpg" alt="Image: package" class="package__image" />
        </div>
        <div class="package__info package__info_small">
          <div class="package__top">
            <div class="stars package__stars package__stars_small">
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
            </div>
            <!-- /.stars package__stars -->
            <h3 class="package__title package__title_small">
              Luxury Place
            </h3>
            <p class="package__description package__description_small">
              some example text
            </p>
          </div>
          <!-- /.package__top -->
          <div class="package__bottom">
            <div class="package__properties package__properties_small">
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#map-pin"></use>
                </svg>
                <span class="property__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#user"></use>
                </svg>
                <span class="property__description">2 x Guests</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#home"></use>
                </svg>
                <span class="property__description">1 x Room</span>
              </div>
            </div>
            <!-- /.package__properties -->
            <div class="package__prices">
              <span class="package__pricetag-old">$ 4,500</span>
              <span class="package__pricetag-new">$ 2,500</span>
            </div>
            <!-- /.package__prices -->
            <button class="package__button">Book Now</button>
          </div>
          <!-- /.package__bottom -->
        </div>
        <!-- /.package__info -->
        <span class="package__offer package__offer_small">Flash Offer</span>
      </div>
      <!-- /.package -->
      <div class="package" data-aos="zoom-in">
        <div class="package__view package__view_small">
          <img src="./img/packages/package-5.jpg" alt="Image: package" class="package__image" />
        </div>
        <div class="package__info package__info_small">
          <div class="package__top">
            <div class="stars package__stars package__stars_small">
            <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
              <svg class="star">
                <use xlink:href="./img/svg/sprite.svg#star"></use>
              </svg>
            </div>
            <!-- /.stars package__stars -->
            <h3 class="package__title package__title_small">
              Hotel Five Star
            </h3>
            <p class="package__description package__description_small">
              some example text
            </p>
          </div>
          <!-- /.package__top -->
          <div class="package__bottom">
            <div class="package__properties package__properties_small">
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#map-pin"></use>
                </svg>
                <span class="property__description">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#user"></use>
                </svg>
                <span class="property__description">2 x Guests</span>
              </div>
              <div class="property">
                <svg class="property__icon">
                  <use xlink:href="./img/svg/sprite.svg#home"></use>
                </svg>
                <span class="property__description">1 x Room</span>
              </div>
            </div>
            <!-- /.package__properties -->
            <div class="package__prices">
              <span class="package__pricetag-old">$ 6,500</span>
              <span class="package__pricetag-new">$ 3,500</span>
            </div>
            <!-- /.package__prices -->
            <button class="package__button">Book Now</button>
          </div>
          <!-- /.package__bottom -->
        </div>
        <!-- /.package__info -->
        <span class="package__offer package__offer_small">Flash Offer</span>
      </div>
      <!-- /.package -->
    </div>
    <!-- /.packages-grid -->
  </div>
  <!-- /.container -->
</section>

<section class="newsletter" data-parallax="scroll" data-image-src="./img/newsletter-bg.jpg">
  <div class="newsletter-wrapper">
    <h2 class="newsletter-title">
      subscribe to our
      <span class="newsletter-title__strong">Newsletter</span>
    </h2>

    <div class="newsletter__form-wrapper">
      <form action="./php/send.php" method="POST" class="subscribe__form subscribe newsletter__subscribe">
        <input type="email" class="subscribe__input" placeholder="Your email address" name="email" required />
        <input type="hidden" name="form_type" value="newsletter" />
        <button type="submit" class="subscribe__button">Send</button>
      </form>
      <span id="subscribe-error"></span>
    </div>
  </div>
  <!-- /.newsletter-wrapper -->
</section>

<section class="reviews">
  <div class="container">
    <h2 class="reviews__title">What people think about us</h2>
    <div class="swiper-container reviews-slider" data-aos="fade">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img src="./img/reviews-avatars/review-avatar-1.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar" />
              <h3 class="reviews-slider__username">Megan Fox</h3>
              <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
              <div class="reviews-slider__rating">
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
              </div>
              <!-- /.reviews-slider__rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              It was very nice hotel with cleanliness. Staff behavior was
              good and polite. They welcome us very well. Issue was only
              that Lift was not in working and we were allotted to 3rd floor
              and amenities articles were in corner of gallery which were
              giving bad feeling. Breakfast was good and support of the
              staff was also very nice. Location is not good as per
              atmosphere, it is very nearby most of the popular places but
              self location in a narrow street is not good. Overall it was a
              good experience and could recommend.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img src="./img/reviews-avatars/review-avatar-2.jpg" alt="Photo: John Doe" class="reviews-slider__avatar" />
              <h3 class="reviews-slider__username">John Doe</h3>
              <span class="reviews-slider__date">Stayed 19 Jan, 1879</span>
              <div class="reviews-slider__rating">
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
              </div>
              <!-- /.reviews-slider__rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              consequuntur aliquam officia? Aperiam nostrum illo ducimus
              placeat facere excepturi consequatur quidem, non omnis dolorum
              asperiores, libero fugit aut neque sit.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider__item">
            <div class="reviews-slider__profile">
              <img src="./img/reviews-avatars/review-avatar-3.jpg" alt="Photo: Jane Doe" class="reviews-slider__avatar" />
              <h3 class="reviews-slider__username">Jane Doe</h3>
              <span class="reviews-slider__date">Stayed 01 Apr, 2017</span>
              <div class="reviews-slider__rating">
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
                <svg class="star">
                  <use xlink:href="./img/svg/sprite.svg#star"></use>
                </svg>
              </div>
              <!-- /.reviews-slider__rating -->
            </div>
            <!-- /.reviews-slider__profile -->
            <p class="reviews-slider__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab,
              non numquam illum ex optio facere nulla expedita error laborum
              dolor eligendi adipisci eius, quidem, cumque amet. Fugit quos,
              nihil totam fuga, rerum, exercitationem necessitatibus sequi
              et blanditiis itaque asperiores facilis. Fuga, fugiat! Et
              consectetur doloribus voluptate reprehenderit. Hic, ipsum.
              Velit modi quas aperiam debitis natus, doloremque dolore
              facilis repellendus aspernatur libero accusamus corporis
              ducimus alias? Velit reprehenderit sapiente quod soluta minus
              rem explicabo ducimus provident incidunt similique quidem
              perspiciatis laborum maiores aspernatur, ad accusamus officia
              libero beatae distinctio, iusto assumenda voluptatibus? Vel
              illo autem cum error corrupti velit animi tempora.
            </p>
          </div>
          <!-- /.reviews-slider__item -->
        </div>
        <!-- /.swiper-slide -->
      </div>
      <!-- /.swiper-wrapper -->

      <button class="reviews-slider__button reviews-slider__button-prev"></button>
      <button class="reviews-slider__button reviews-slider__button-next"></button>
    </div>
    <!-- /.reviews-slider -->
  </div>
  <!-- /.container -->
</section>

<section class="activities">
  <div class="container">
    <h2 class="activities__title">Other Activities</h2>
    <div class="activities-wrapper">
      <div class="card activities__card" data-aos="fade-up">
        <img src="./img/activities/activity-1.jpg" alt="Activity" class="card__image" />
        <h3 class="card__title">The curious corner<br />of chamarel</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card activities__card" data-aos="fade-up">
        <img src="./img/activities/activity-2.jpg" alt="Activity" class="card__image" />
        <h3 class="card__title">Gymkhana club golf<br />course</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card activities__card" data-aos="fade-up">
        <img src="./img/activities/activity-3.jpg" alt="Activity" class="card__image" />
        <h3 class="card__title">
          Tamarind falls hiking<br />trip - full day
        </h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
      <div class="card activities__card" data-aos="fade-up">
        <img src="./img/activities/activity-4.jpg" alt="Activity" class="card__image" />
        <h3 class="card__title">The blue marine discovery<br />quest</h3>
        <button class="card__button">Book Now</button>
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.container -->
</section>


<div class="modal">
  <div class="modal__overlay"></div>
  <!-- /.modal__overlay -->
  <div class="modal__dialog">
    <a href="#" data-toggle="modal" class="modal__close">
      <svg class="modal__close-icon">
        <use xlink:href="./img/svg/sprite.svg#close"></use>
      </svg>
    </a>
    <h3 class="modal__title">Booking</h3>
    <form action="#" class="form modal__form">
      <div class="modal__form-group">
        <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name" required minlength="2" />
      </div>
      <div class="modal__form-group">
        <input type="tel" class="input modal__input" placeholder="Phone Number*" name="phone" required />
      </div>
      <div class="modal__form-group">
        <input type="email" class="input modal__input" placeholder="Email*" name="email" required />
      </div>
      <textarea class="message modal__message" placeholder="Message" name="message"></textarea>
      <input type="hidden" name="form_type" value="booking" />
      <button class="button modal__button">Send</button>
      <span class="modal__info">* Required Fields</span>
    </form>
  </div>
  <!-- /.modal__dialog -->
</div>
<!-- /.modal -->

<?php include('./footer.html') ?>