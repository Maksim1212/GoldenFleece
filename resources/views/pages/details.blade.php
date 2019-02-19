<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Детали заказа</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="/css/Details/details.css">
</head>
<body>
    <div class="details-pop-up fixed d-none justify-content-center align-items-center" id="details_pop_up">
        <div class="details-pop-up__inner relative">
            <div class="details-pop-up__close absolute">
                <i class="fa fa-times" id="details_pop_up_close"></i>
            </div>
            <div class="details-pop-up__heading text-center">
                <h3>Ваш заказ принят</h3>
            </div>
            <div class="details-pop-up__text text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nuadqe21eawdadad!!!
            </div>
            <div class="details-pop-up__footer text-center">
                <a href="#" class="upper">Вернуться к каталогу</a>
            </div>
        </div>
    </div>
    <div class="delivery-search-mobile-pop-up fixed d-none justify-content-center align-items-center" id="delivery_search_mobile_pop_up">
        <div class="delivery-search-mobile-pop-up__inner">
            <form action="" id="details_search_mobile_form">
                <input type="text" placeholder="Что ищите?">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <header id="header" class="header fixed">
        <div class="container">
            <div class="header__wrapper d-flex justify-content-between align-items-center">
                <ul class="header__list d-flex justify-content-between align-items-center">
                    <li>
                        Служба доставки: (048) 42-22-42,
                    </li>
                    <li>
                        (068) 55-88-376,
                    </li>
                    <li>
                        (063) 35-13-420,
                    </li>
                    <li>
                        (048) 784-57-02
                    </li>
                </ul>
                <div>
                    Ресторан: (048) 718-38-80
                </div>
                <div>
                    Отель: (048) 712-74-90
                </div>
            </div>
        </div>
    </header>
    <section id="delivery_nav" class="delivery-nav">
        <div class="container">
            <div class="delivery-nav__wrapper">
                <ul class="delivery-nav__list d-flex justify-content-between align-items-center">
                    <li class="d-flex justify-content-between delivery-nav__list-item-wrap">
                        <div class="relative delivery-nav__list-item delivery-nav__list-catalog-block d-flex justify-content-between align-items-center">
                            <span class="upper">Каталог</span>
                            <div class="delivery-nav__list-catalog-arrow">
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="delivery-undernav-mobile__wrapper-catalog-drop absolute d-none">
                                <ul class="catalog__menu-list delivery-nav__catalog-list delivery-undernav__catalog-list">
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="all" class="catalog-search-prop go_to catalog__menu-item-link upper">Все</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" class="catalog__menu-item-link upper go_to catalog-search-prop" data-search-param="breakfast">Завтраки</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item relative">
                                        <input type="checkbox" class="catalog__menu-item-check absolute">
                                        <div class="catalog__menu-item-inner">
                                            <a href="#delivery_catalog" class="catalog__menu-item-link upper go_to catalog-search-prop" data-search-param="snacks">Закуски</a>
                                            <span class="catalog__menu-item-symbol absolute">
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <div class="catalog__drop">
                                                <ul class="catalog__drop-list">
                                                    <li>
                                                        <a href="#delivery_catalog" class="go_to catalog-search-prop" data-search-param="cold_snacks">Холодные</a>
                                                    </li>
                                                    <li>
                                                        <a href="#delivery_catalog" class="go_to catalog-search-prop" data-search-param="hot_snacks">Горячие</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="hot_fish_dishes" class="go_to catalog-search-prop catalog__menu-item-link upper">Горячие рыбные блюда</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="hot_meat_dishes" class="go_to catalog-search-prop catalog__menu-item-link upper">Горячие мясные блюда</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item relative">
                                        <input type="checkbox" class="catalog__menu-item-check absolute">
                                        <div class="catalog__menu-item-inner">
                                            <a href="#delivery_catalog" data-search-param="salads" class="go_to catalog-search-prop catalog__menu-item-link upper">Салаты</a>
                                            <span class="catalog__menu-item-symbol absolute">
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <div class="catalog__drop">
                                                <ul class="catalog__drop-list">
                                                    <li>
                                                        <a href="#delivery_catalog" data-search-param="sea_salads" class="catalog-search-prop go_to">С морепродуктами</a>
                                                    </li>
                                                    <li>
                                                        <a href="#delivery_catalog" data-search-param="fish_salads" class="catalog-search-prop go_to">Рыбные</a>
                                                    </li>
                                                    <li>
                                                        <a href="#delivery_catalog" data-search-param="meat_salads" class="catalog-search-prop go_to">Мясные</a>
                                                    </li>
                                                    <li>
                                                        <a href="#delivery_catalog" data-search-param="veg_salads" class="catalog-search-prop go_to">Овощные</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="grill" class="catalog-search-prop go_to catalog__menu-item-link upper">Мангал</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="side_dishes" class="catalog-search-prop go_to catalog__menu-item-link upper">Гарниры</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="italian_food" class="catalog-search-prop go_to catalog__menu-item-link upper">Итальянская кухня</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="japanese_food" class="catalog-search-prop go_to catalog__menu-item-link upper">Японская кухня</a>
                                        </div>
                                    </li>
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="desserts" class="catalog-search-prop go_to catalog__menu-item-link upper">Десерты</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative delivery-nav__list-item delivery-nav__list-special-block d-flex justify-content-between align-items-center">
                            <span class="upper">Специальные предложения</span>
                            <div class="delivery-nav__list-special-arrow">
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="delivery-nav__catalog-drop absolute">
                                <ul class="catalog__menu-list delivery-nav__special-list d-none">
                                    <li class="catalog__menu-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#delivery_catalog" data-search-param="new_years_discount" class="catalog-search-prop go_to catalog__menu-item-link upper">Новогодняя скидка 50%!</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/storage/{{$topLogo->logo}}" style="width:64px; height: 60px;" alt="Золотое Руно" title="Золотое Руно">
                        </a>
                    </li>
                    <li class="d-flex align-items-center delivery-nav__list-item-wrap justify-content-end">
                        <div class="delivery-nav__list-search-and-cart d-flex align-items-center">
                            <div class="delivery-nav__list-search relative">
                                <div class="delivery-nav__search-block">
                                    <form action="" method="POST" id="details_search_form">
                                        <input type="text" name="delivery_search" class="absolute d-none" placeholder="Что ищите?">
                                        <i class="fa fa-search absolute" id="delivery_nav_search_icon"></i>
                                    </form>
                                </div>
                            </div>
                            <div class="delivery-nav__list-cart">
                                <div>
                                    <i class="fa fa-shopping-cart d-block"></i>
                                    <span class="delivery-nav__list-cart-counter">10</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="upper">Перейти на сайт ресторана</a>
                    </li>
                </ul>
                <div class="delivery-nav__menu-mobile d-none relative">
                    <div class="delivery-nav__menu-mobile-inner d-flex justify-content-center align-items-center">
                        <div class="delivery-nav__menu-mobile-burger absolute" id="burger_menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="delivery-nav__menu-logo">
                            <img src="/storage/{{$topLogo->logo}}" style="width:64px; height: 60px;" alt="Золотое Руно" title="Золотое Руно" class="img-responsive">
                        </div>
                    </div>
                    <div class="delivery-nav__menu-mobile-wrap">
                        <ul class="delivery-nav__menu-mobile-menu text-center" id="menu_mobile">
                            <li>
                                <a href="#" class="upper">Ресторан</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Отель</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Меню</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Служба доставки</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Новости</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Отзывы</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Галерея</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Контакты</a>
                            </li>
                            <li>
                                <a href="#" class="upper">Перейти на сайт ресторана</a>
                            </li>
                        </ul>
                    </div>
                    <div class="delivery-nav__search-and-cart-mobile absolute d-none">
                        <div class="delivery-nav__search-and-cart-mobile-wrap d-flex">
                            <div class="delivery-nav__search-mobile">
                                <span id="delivery_search_mobile"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="delivery-nav__cart-mobile">
                                <a href="#" id="delivery_cart_mobile"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="delivery_undernav_mobile" class="delivery-undernav-mobile d-none relative">
        <div class="container">
            <div class="delivery-undernav-mobile__wrapper">
                <div class="delivery-undernav-mobile__catalog-title d-flex justify-content-center align-items-center">
                    <div class="delivery-undernav-mobile__open" id="delivery_undernav_mobile__open">
                        <span>Каталог</span>
                        <span><i class="fa fa-chevron-down"></i></span>
                    </div>
                    <div class="delivery-undernav-mobile__wrapper-catalog-drop absolute d-none">
                        <ul class="catalog__menu-list delivery-nav__catalog-list">
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="all" class="catalog-search-prop go_to catalog__menu-item-link upper">Все</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" class="catalog__menu-item-link upper go_to catalog-search-prop" data-search-param="breakfast">Завтраки</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item relative">
                                <input type="checkbox" class="catalog__menu-item-check absolute">
                                <div class="catalog__menu-item-inner">
                                    <a href="#delivery_catalog" class="catalog__menu-item-link upper go_to catalog-search-prop" data-search-param="snacks">Закуски</a>
                                    <span class="catalog__menu-item-symbol absolute">
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <div class="catalog__drop">
                                        <ul class="catalog__drop-list">
                                            <li>
                                                <a href="#delivery_catalog" class="go_to catalog-search-prop" data-search-param="cold_snacks">Холодные</a>
                                            </li>
                                            <li>
                                                <a href="#delivery_catalog" class="go_to catalog-search-prop" data-search-param="hot_snacks">Горячие</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="hot_fish_dishes" class="go_to catalog-search-prop catalog__menu-item-link upper">Горячие рыбные блюда</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="hot_meat_dishes" class="go_to catalog-search-prop catalog__menu-item-link upper">Горячие мясные блюда</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item relative">
                                <input type="checkbox" class="catalog__menu-item-check absolute">
                                <div class="catalog__menu-item-inner">
                                    <a href="#delivery_catalog" data-search-param="salads" class="go_to catalog-search-prop catalog__menu-item-link upper">Салаты</a>
                                    <span class="catalog__menu-item-symbol absolute">
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <div class="catalog__drop">
                                        <ul class="catalog__drop-list">
                                            <li>
                                                <a href="#delivery_catalog" data-search-param="sea_salads" class="catalog-search-prop go_to">С морепродуктами</a>
                                            </li>
                                            <li>
                                                <a href="#delivery_catalog" data-search-param="fish_salads" class="catalog-search-prop go_to">Рыбные</a>
                                            </li>
                                            <li>
                                                <a href="#delivery_catalog" data-search-param="meat_salads" class="catalog-search-prop go_to">Мясные</a>
                                            </li>
                                            <li>
                                                <a href="#delivery_catalog" data-search-param="veg_salads" class="catalog-search-prop go_to">Овощные</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="grill" class="catalog-search-prop go_to catalog__menu-item-link upper">Мангал</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="side_dishes" class="catalog-search-prop go_to catalog__menu-item-link upper">Гарниры</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="italian_food" class="catalog-search-prop go_to catalog__menu-item-link upper">Итальянская кухня</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="japanese_food" class="catalog-search-prop go_to catalog__menu-item-link upper">Японская кухня</a>
                                </div>
                            </li>
                            <li class="catalog__menu-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#delivery_catalog" data-search-param="desserts" class="catalog-search-prop go_to catalog__menu-item-link upper">Десерты</a>
                                </div>
                            </li>
                        </ul>
                        <div class="delivery-undernav-mobile__finded text-center">
                            <a href="#delivery_catalog" class="go_to upper">Показать <span id="undernav_mobile_finded">(0)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="details-desc">
        <div class="container">
            <div class="details-desc__wrapper" id="order">
                <div class="block-heading text-center">
                    <h2>Детали заказа</h2>
                    <div class="block-heading__decor d-flex justify-content-center">
                        <img src="img/Main/decor.png" class="img-responsive">
                    </div>
                </div>
                <div class="details-desc__details">
                    <form action="{{route('checkout')}}" method="POST">
                        <div class="details-desc__inputset">
                            <div class="details-desc__inputset-row details-desc__input-row">
                                <div class="details-desc-inputset-row-inner">
                                    <input required type="text" name="user_name" placeholder="Ваше имя*" class="details-desc__input w-100">
                                </div>
                            </div>
                            <div class="details-desc__inputset-row details-desc__input-row">
                                <div class="details-desc-inputset-row-inner d-flex justify-content-between align-items-center">
                                    <input required type="phone" name="user_phone" placeholder="Ваш номер телефона*" class="details-desc__input">
                                    <input type="email" name="user_email" placeholder="Ваш Email" class="details-desc__input">
                                </div>
                            </div>
                            <div class="details-desc__inputset-row details-desc__input-row">
                                <div class="details-desc-inputset-row-inner d-flex justify-content-between align-items-center">
                                    <input required type="text" name="user_street" placeholder="Улица*" class="details-desc__input">
                                    <input required type="text" name="user_house" placeholder="№ дома*" class="details-desc__input">
                                    <input required type="text" name="user_apartment" placeholder="Квартира*" class="details-desc__input">
                                </div>
                            </div>
                            <div class="details-desc__inputset-row details-desc__input-row">
                                <div class="details-desc-inputset-row-inner">
                                    <input required type="text" name="user_comment" placeholder="Коментарий к заказу" class="details-desc__input w-100">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="details-desc__inputset-row">
                            <div class="details-desc__footer d-flex justify-content-between">
                                <div class="details-desc__footer-painment text-center">
                                    <span class="d-block details-desc__footer-painment-label">Оплата:</span>
                                    <select name="user_painment">
                                        <option value="cash">Наличными</option>
                                    </select>
                                </div>
                                <div class="details-desc__footer-buttonset d-flex align-items-end">
                                    <button type="submit" name="checkout" class="upper">Оформить заказ</button>
                                </div>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                   <div class="details-desc__hint text-center d-none">
                        *-обязательные для заполнения поля
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer__wrapper d-flex justify-content-between flex-wrap">
                <div class="footer__item">
                    <ul class="footer__item-list">
                        <li class="footer__item-list-title">
                            Наши партнеры:
                        </li>
                        <li class="footer__item-list-links">
                            <a href="#" target="_blank">leogaming.net,</a>
                            <a href="#" target="_blank">Салон красоты Юлии Никулиной</a>
                        </li>
                    </ul>
                    <ul class="footer__item-list">
                        <li class="footer__item-list-title">
                            Следи за нами в соц. сетях:
                        </li>
                        <li class="footer__item-list-links footer__socials">
                            <a href="https://www.facebook.com/zolotoruno" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/zolotoe.runo.od/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCKGW6NWU_4enwck0Cm-fDqQ" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.tripadvisor.ru/Hotel_Review-g295368-d3876917-Reviews-Zolotoye_Runo-Odessa_Odessa_Oblast.html" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer__item text-center footer__logo-item">
                    <div class="footer__item-logo">
                        <img src="/storage/{{$bottomLogo->logo}}" style="width:64px; height: 60px;" alt="Золотое Руно">
                    </div>
                    <div class="footer__item-address">
                        <p>г. Одесса,ул. Ак. Королёва, 16</p>
                    </div>
                    <div class="footer__item-show-on-map">
                        <a href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%90%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D1%96%D0%BA%D0%B0+%D0%9A%D0%BE%D1%80%D0%BE%D0%BB%D1%8C%D0%BE%D0%B2%D0%B0,+16,+%D0%9E%D0%B4%D0%B5%D1%81%D0%B0,+%D0%9E%D0%B4%D0%B5%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+65000/@46.4125269,30.7166459,17z/data=!3m1!4b1!4m5!3m4!1s0x40c6336ec4085405:0x5a201c1cae9ca8d2!8m2!3d46.4125232!4d30.7188346" target="_blank" class="upper">Показать на карте</a>
                    </div>
                </div>
                <div class="footer__item text-right">
                    <ul>
                        <li class="footer__item-phones">
                            <span class="footer__item-list-title">Ресторан: </span>
                            <span class="footer__adresses-numbers">(048) 718-38-80</span>
                        </li>
                        <li class="footer__item-phones">
                            <span class="footer__item-list-title">Отель: </span>
                            <span class="footer__adresses-numbers">(048) 712-74-90</span>
                        </li>
                        <li class="footer__item-phones">
                            <span class="footer__item-list-title">Служба доставки: </span>
                            <ul>
                                <li class="footer__adresses-numbers">(048) 42-22-42</li>
                                <li class="footer__adresses-numbers">(068) 55-88-376</li>
                                <li class="footer__adresses-numbers">(063) 35-13-420</li>
                                <li class="footer__adresses-numbers">(048) 784-57-02</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!-- Scripts -->
<script src="/libs/jquery/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/libs/slick/slick.min.js"></script>
<script src="/js/Delivery/delivery.js"></script>
<script src="/js/Details/details.js"></script>
<script src="/js/delivery-navbar.js"></script>
<script src="/js/navbar.js"></script>
<script src="/js/catalog-range.js"></script>
</body>
</html>

