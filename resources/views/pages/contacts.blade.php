<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Контакты</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Contacts/contacts.css">
</head>
<body>
@include('layouts.header')
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
                        <div class="delivery-nav__catalog-drop absolute">
                            <ul class="catalog__menu-list delivery-nav__catalog-list d-none">
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="all" class="catalog-search-prop catalog__menu-item-link upper">Все</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" class="catalog__menu-item-link upper catalog-search-prop" data-search-param="breakfast">Завтраки</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item relative">
                                    <input type="checkbox" class="catalog__menu-item-check absolute">
                                    <div class="catalog__menu-item-inner">
                                        <a href="#delivery_catalog" class="catalog__menu-item-link upper catalog-search-prop" data-search-param="snacks">Закуски</a>
                                        <span class="catalog__menu-item-symbol absolute">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        <div class="catalog__drop">
                                            <ul class="catalog__drop-list">
                                                <li>
                                                    <a href="#delivery_catalog" class="catalog-search-prop" data-search-param="cold_snacks">Холодные</a>
                                                </li>
                                                <li>
                                                    <a href="#delivery_catalog" class="catalog-search-prop" data-search-param="hot_snacks">Горячие</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="hot_fish_dishes" class="catalog-search-prop catalog__menu-item-link upper">Горячие рыбные блюда</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="hot_meat_dishes" class="catalog-search-prop catalog__menu-item-link upper">Горячие мясные блюда</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item relative">
                                    <input type="checkbox" class="catalog__menu-item-check absolute">
                                    <div class="catalog__menu-item-inner">
                                        <a href="#delivery_catalog" data-search-param="salads" class="catalog-search-prop catalog__menu-item-link upper">Салаты</a>
                                        <span class="catalog__menu-item-symbol absolute">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        <div class="catalog__drop">
                                            <ul class="catalog__drop-list">
                                                <li>
                                                    <a href="#delivery_catalog" data-search-param="sea_salads" class="catalog-search-prop">С морепродуктами</a>
                                                </li>
                                                <li>
                                                    <a href="#delivery_catalog" data-search-param="fish_salads" class="catalog-search-prop">Рыбные</a>
                                                </li>
                                                <li>
                                                    <a href="#delivery_catalog" data-search-param="meat_salads" class="catalog-search-prop">Мясные</a>
                                                </li>
                                                <li>
                                                    <a href="#delivery_catalog" data-search-param="veg_salads" class="catalog-search-prop">Овощные</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="grill" class="catalog-search-prop catalog__menu-item-link upper">Мангал</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="side_dishes" class="catalog-search-prop catalog__menu-item-link upper">Гарниры</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="italian_food" class="catalog-search-prop catalog__menu-item-link upper">Итальянская кухня</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="japanese_food" class="catalog-search-prop catalog__menu-item-link upper">Японская кухня</a>
                                    </div>
                                </li>
                                <li class="catalog__menu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#delivery_catalog" data-search-param="desserts" class="catalog-search-prop catalog__menu-item-link upper">Десерты</a>
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
                                        <a href="" data-search-param="new_years_discount" class="catalog-search-prop catalog__menu-item-link upper">Новогодняя скидка 50%!</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/">
                        <img src="/storage/{{$topLogo->logo}}" style="width:64px;height:60px;" alt="Золотое Руно" title="Золотое Руно">
                    </a>
                </li>
                <li class="d-flex align-items-center delivery-nav__list-item-wrap justify-content-end">
                    <div class="delivery-nav__list-search-and-cart d-flex align-items-center">
                        <div class="delivery-nav__list-search relative">
                            <div class="delivery-nav__search-block">
                                <form action="" method="POST" id="contact_search_form">
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
                    <a href="/restaurant" class="upper">Перейти на сайт ресторана</a>
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
                        <img src="/storage/{{$topLogo->logo}}" style="width:64px;height:60px;" alt="Золотое Руно" title="Золотое Руно" class="img-responsive">
                    </div>
                </div>
                <div class="delivery-nav__menu-mobile-wrap">
                    <ul class="delivery-nav__menu-mobile-menu text-center" id="menu_mobile">
                        <li>
                            <a href="/restaurant" class="upper">Ресторан</a>
                        </li>
                        <li>
                            <a href="/hotel" class="upper">Отель</a>
                        </li>
                        <li>
                            <a href="/menu" class="upper">Меню</a>
                        </li>
                        <li>
                            <a href="/delivery" class="upper">Служба доставки</a>
                        </li>
                        <li>
                            <a href="/news" class="upper">Новости</a>
                        </li>
                        <li>
                            <a href="/feedback" class="upper">Отзывы</a>
                        </li>
                        <li>
                            <a href="/mainGallery" class="upper">Галерея</a>
                        </li>
                        <li>
                            <a href="/contacts" class="upper">Контакты</a>
                        </li>
                        <li>
                            <a href="/restaurant" class="upper">Перейти на сайт ресторана</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contacts_desc" class="contacts-desc">
    <div class="container">
        <div class="contacts-desc__wrapper">
            <div class="block-heading text-center">
                <h2>Контакты</h2>
            </div>
        </div>
        <div class="contacts-desc__contacts">
            <div class="contacts-desc__contacts-block text-center">
                <div class="contacts-desc__contacts-block-contact">
                    <i class="fa fa-map-marker d-block"></i>
                    <span>г. Одесса,ул. Ак. Королёва, 16</span>
                </div>
                <hr>
                <div class="contacts-desc__contacts-block-contact">
                    <i class="fa fa-phone d-block"></i>
                    <span class="d-block"><b>Ресторан: </b>(048) 718-38-80</span>
                    <span class="d-block"><b>Отель: </b>(048) 712-74-90</span>
                    <span class="d-block"><b>Служба доставки:</b></span>
                    <span class="d-block">(048) 718-38-80</span>
                    <span class="d-block">(048) 718-38-80</span>
                    <span class="d-block">(048) 718-38-80</span>
                    <span class="d-block">(048) 718-38-80</span>
                </div>
            </div>
            <div class="contacts-desc__contacts-socials d-flex justify-content-center">
                <div class="contacts-desc__contacts-socials-block d-flex justify-content-between align-items-center">
                    <a href="https://www.facebook.com/zolotoruno" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/zolotoe.runo.od/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCKGW6NWU_4enwck0Cm-fDqQ" target="_blank"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://www.tripadvisor.ru/Hotel_Review-g295368-d3876917-Reviews-Zolotoye_Runo-Odessa_Odessa_Oblast.html" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contacts_map" class="contacts-map">
    <div class="container">
        <div class="contacts-map__wrapper">
            <div id="map"></div>
        </div>
    </div>
</section>
@include('layouts.contactsCall')
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Delivery/delivery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Contacts/contacts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/delivery-navbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/catalog.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/catalog-range.js') }}"></script>
<script>
    function initMap() {
        var uluru = { lat: 46.4125679, lng: 30.7197460 };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqM241UXnPO-9r13BjUdbYR5_wUhHVMmE&callback=initMap"></script>
</body>
</html>