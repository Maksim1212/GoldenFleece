<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Корзина</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Cart/cart.css">
</head>
<body>
<div class="delivery-search-mobile-pop-up fixed d-none justify-content-center align-items-center" id="delivery_search_mobile_pop_up">
    <div class="delivery-search-mobile-pop-up__inner">
        <form action="" id="cart_search_mobile_form">
            <input type="text" placeholder="Что ищите?">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
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
                        <img src="../../../img/logo.png" alt="Золотое Руно" title="Золотое Руно">
                    </a>
                </li>
                <li class="d-flex align-items-center delivery-nav__list-item-wrap justify-content-end">
                    <div class="delivery-nav__list-search-and-cart d-flex align-items-center">
                        <div class="delivery-nav__list-search relative">
                            <div class="delivery-nav__search-block">
                                <form action="" method="POST" id="cart_search_form">
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
                        <img src="../../../img/logo.png" alt="Золотое Руно" title="Золотое Руно" class="img-responsive">
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
                <div class="delivery-nav__search-and-cart-mobile absolute d-none">
                    <div class="delivery-nav__search-and-cart-mobile-wrap d-flex">
                        <div class="delivery-nav__search-mobile">
                            <span id="delivery_search_mobile"><i class="fa fa-search"></i></span>
                        </div>
                        <div class="delivery-nav__cart-mobile">
                            <a href="/cart" id="delivery_cart_mobile"><i class="fa fa-shopping-cart"></i></a>
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
                    <div class="catalog__menu-price">
                        <div class="catalog__menu-price-heading text-center">
                            <h3>Цена</h3>
                            <div class="catalog__menu-price-range" id="catalog_price_range_mobile"></div>
                            <div class="catalog__menu-price-output d-flex justify-content-between align-items-center">
                                <div>
                                    от: <b id="catalog_price_start_mobile">50</b> грн
                                </div>
                                <div>
                                    до: <b id="catalog_price_finish_mobile">2500</b> грн
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivery-undernav-mobile__finded text-center">
                        <a href="#delivery_catalog" class="go_to upper">Показать <span id="undernav_mobile_finded">(0)</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cart_desc" class="cart-desc">
    <div class="container">
        <div class="cart-desc__wrapper">
            <div class="block-heading text-center">
                <h2>Корзина</h2>
                <div class="block-heading__decor d-flex justify-content-center">
                    <img src="img/Main/decor.png" class="img-responsive">
                </div>
            </div>
            <div class="cart-desc__cart">
                <div class="cart-desc__item d-flex justify-content-between align-items-center m-auto">
                    <div class="cart-desc__item-desc d-flex align-items-center">
                        <div class="cart-desc__item-pic" style="background: url(img/Menu/Slider/14813uxVsXjAPBFmIovEzZkHNnR.jpg) no-repeat center top / cover;"></div>
                        <div class="cart-desc__item-text">
                            <h3>Lorem ipsum</h3>
                            <span>Вес: <b>450 гр</b></span>
                        </div>
                    </div>
                    <div class="cart-desc__item-counter">
                        <div class="counter text-center">
                            <label class="counter__label d-block">Количество:</label>
                            <div class="counter__counter d-flex justify-content-between align-items-center">
                                <div class="counter__decrease d-flex justify-content-center align-items-center">
                                    <span class="cart-decrease counter__control" data-price="15">-</span>
                                </div>
                                <div class="counter__persons d-flex justify-content-center align-items-center">
                                    <div>
                                        <span class="food-count">1</span>
                                        <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                    </div>
                                </div>
                                <div class="counter__increase d-flex justify-content-center align-items-center">
                                    <span class="cart-increase counter__control" data-price="15">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-desc__item-price text-center">
                        <span class="d-block cart-desc__item-price-label">Цена:</span>
                        <span><b>15</b> грн</span>
                    </div>
                </div>
                <div class="cart-desc__item d-flex justify-content-between align-items-center m-auto">
                    <div class="cart-desc__item-desc d-flex align-items-center">
                        <div class="cart-desc__item-pic" style="background: url(img/Menu/Slider/14813uxVsXjAPBFmIovEzZkHNnR.jpg) no-repeat center top / cover;"></div>
                        <div class="cart-desc__item-text">
                            <h3>Lorem ipsum</h3>
                            <span>Вес: <b>150 гр</b></span>
                        </div>
                    </div>
                    <div class="cart-desc__item-counter">
                        <div class="counter text-center">
                            <label class="counter__label d-block">Количество:</label>
                            <div class="counter__counter d-flex justify-content-between align-items-center">
                                <div class="counter__decrease d-flex justify-content-center align-items-center">
                                    <span class="cart-decrease counter__control" data-price="20">-</span>
                                </div>
                                <div class="counter__persons d-flex justify-content-center align-items-center">
                                    <div>
                                        <span class="food-count">1</span>
                                        <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                    </div>
                                </div>
                                <div class="counter__increase d-flex justify-content-center align-items-center">
                                    <span class="cart-increase counter__control" data-price="20">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-desc__item-price text-center">
                        <span class="d-block cart-desc__item-price-label">Цена:</span>
                        <span><b>20</b> грн</span>
                    </div>
                </div>
                <hr>
            </div>
            <div class="cart-desc__price d-flex justify-content-between align-items-center">
                <div class="cart-desc__current-price text-center">
                    <span class="d-block cart-desc__current-price-label">Итого:</span>
                    <span><b id="current_price"></b> грн</span>
                </div>
                <div class="cart-desc__price-next">
                    <a href="#" class="upper">Далее</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Delivery/delivery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Cart/cart.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/delivery-navbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/catalog-range.js') }}"></script>
</body>
</html>
