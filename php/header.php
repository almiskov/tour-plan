<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Best Tour Plan - Hotel Booking</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/style.min.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
  <header class="navbar navbar_mobile_fixed">
    <div class="container">
      <div class="navbar-top">
        <a href="/tour-plan/" class="logo">
          <img src="./img/horizontal-logo.svg" alt="Logo: Best tour plan" class="logo__img" />
        </a>
        <form action="#" class="search navbar__search navbar__search_mobile_hidden">
          <input type="text" class="search__input" placeholder="Search Location" name="search" />
          <button class="search__button">
            <img src="./img/search.svg" alt="Icon: search" />
          </button>
        </form>

        <a href="#" class="user navbar__user navbar__user_mobile_hidden">
          <img src="./img/user-avatar.jpg" alt="avatar: Nathan" class="user__avatar" />
          <span class="user__name">Nathan</span>
        </a>
        <!-- /.user -->

        <button class="menu-button navbar-top__menu-button">
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
        </button>
      </div>
      <!-- /.navbar-top -->
    </div>
    <!-- /.container -->

    <div class="navbar-bottom">
      <div class="container">
        <ul class="navbar-menu">
          <li class="navbar-menu__item navbar-menu__item_mobile_visible">
            <a href="#" class="user navbar__user navbar__user_mobile_visible">
              <img src="./img/user-avatar.jpg" alt="avatar: Nathan" class="user__avatar" />
              <span class="user__name">Nathan</span>
            </a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_mobile_visible">
            <form action="#" class="search navbar__search navbar__search_mobile_visible">
              <input type="text" class="search__input" placeholder="Search Location" />
              <button class="search__button">
                <img src="./img/search.svg" alt="Icon: search" />
              </button>
            </form>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">All Deals</a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">Hotels</a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">Activities</a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">Restaurants</a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">Events</a>
          </li>
          <li class="navbar-menu__item navbar-menu__item_hoverable">
            <a href="#" class="navbar-menu__link">Rodrigues</a>
          </li>
        </ul>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar-bottom -->
  </header>

  <nav class="breadcrumb">
    <div class="container">
      <ul class="breadcrumb-list">
        <li class="breadcrumb-list__item">
          <a href="#" class="breadcrumb-list__link">Home</a>
        </li>
        <li class="breadcrumb-list__item">
          <a href="#" class="breadcrumb-list__link">Flash Offers</a>
        </li>
        <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
      </ul>
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.breadcrumb -->