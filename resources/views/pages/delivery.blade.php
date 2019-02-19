<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Служба доставки</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="/css/Delivery/delivery.css">
</head>
<body>
<div id="delivery_pop_up" class="delivery-pop-up fixed d-none justify-content-center align-items-center">
    <div class="delivery-pop-up__inner relative">
        <div class="delivery-pop-up__close absolute">
            <i class="fa fa-times" id="delivery_pop_up_close"></i>
        </div>
        <div class="delivery-pop-up__carousel">
            <div class="delivery-pop-up__carousel-slide">
                <div class="delivery-pop-up__inner-heading" style="background: url('/img/Delivery/Food/14813uxVsXjAPBFmIovEzZkHNnR.jpg') no-repeat center top / cover;"></div>
                <div class="delivery-pop-up__inner-wrap">
                    <div class="delivery-pop-up__inner-text">
                        <div class="delivery-pop-up__inner-text-heading text-center">
                            <h3>Food title 1</h3>
                            <div class="delivery-pop-up__inner-text-cost d-flex justify-content-around align-items-center">
                                <div>
                                    Цена: <b>14840 грн</b>
                                </div>
                                <div>
                                    Вес: <b>180 гр</b>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-pop-up__inner-text-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, porro esse, voluptatibus illum architecto voluptates facilis aliquid, asperiores numquam vero nihil, doloremque tempore doloribus distinctio adipisci deserunt quo maiores.
                        </div>
                        <div class="delivery-pop-up__footer d-flex justify-content-between align-items-end">
                            <div class="counter">
                                <label class="counter__label d-block">Количество:</label>
                                <div class="counter__counter d-flex justify-content-between align-items-center">
                                    <div class="counter__decrease d-flex justify-content-center align-items-center">
                                        <span id="decrease" class="decrease counter__control">-</span>
                                    </div>
                                    <div class="counter__persons d-flex justify-content-center align-items-center">
                                        <div>
                                            <span class="food-count">1</span>
                                            <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                        </div>
                                    </div>
                                    <div class="counter__increase d-flex justify-content-center align-items-center">
                                        <span id="increase" class="increase counter__control">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-pop-up__buttonset">
                                <a href="#" class="upper" data-food-id="0">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery-pop-up__carousel-slide">
                <div class="delivery-pop-up__inner-heading" style="background: url('/img/Delivery/Food/Depositphotos_41466555_m-2015.jpg') no-repeat center top / cover;"></div>
                <div class="delivery-pop-up__inner-wrap">
                    <div class="delivery-pop-up__inner-text">
                        <div class="delivery-pop-up__inner-text-heading text-center">
                            <h3>Food title 2</h3>
                            <div class="delivery-pop-up__inner-text-cost d-flex justify-content-around align-items-center">
                                <div>
                                    Цена: <b>1300 грн</b>
                                </div>
                                <div>
                                    Вес: <b>180 гр</b>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-pop-up__inner-text-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, porro esse, voluptatibus illum architecto voluptates facilis aliquid, asperiores numquam vero nihil, doloremque tempore doloribus distinctio adipisci deserunt quo maiores.
                        </div>
                        <div class="delivery-pop-up__footer d-flex justify-content-between align-items-end">
                            <div class="counter">
                                <label class="counter__label d-block">Количество:</label>
                                <div class="counter__counter d-flex justify-content-between align-items-center">
                                    <div class="counter__decrease d-flex justify-content-center align-items-center">
                                        <span id="decrease" class="decrease counter__control">-</span>
                                    </div>
                                    <div class="counter__persons d-flex justify-content-center align-items-center">
                                        <div>
                                            <span class="food-count">1</span>
                                            <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                        </div>
                                    </div>
                                    <div class="counter__increase d-flex justify-content-center align-items-center">
                                        <span id="increase" class="increase counter__control">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-pop-up__buttonset">
                                <a href="#" class="upper" data-food-id="0">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery-pop-up__carousel-slide">
                <div class="delivery-pop-up__inner-heading" style="background: url('/img/Delivery/Food/324567-svetik.jpg') no-repeat center top / cover;"></div>
                <div class="delivery-pop-up__inner-wrap">
                    <div class="delivery-pop-up__inner-text">
                        <div class="delivery-pop-up__inner-text-heading text-center">
                            <h3>Food title 3</h3>
                            <div class="delivery-pop-up__inner-text-cost d-flex justify-content-around align-items-center">
                                <div>
                                    Цена: <b>1300 грн</b>
                                </div>
                                <div>
                                    Вес: <b>180 гр</b>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-pop-up__inner-text-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, porro esse, voluptatibus illum architecto voluptates facilis aliquid, asperiores numquam vero nihil, doloremque tempore doloribus distinctio adipisci deserunt quo maiores.
                        </div>
                        <div class="delivery-pop-up__footer d-flex justify-content-between align-items-end">
                            <div class="counter">
                                <label class="counter__label d-block">Количество:</label>
                                <div class="counter__counter d-flex justify-content-between align-items-center">
                                    <div class="counter__decrease d-flex justify-content-center align-items-center">
                                        <span id="decrease" class="decrease counter__control">-</span>
                                    </div>
                                    <div class="counter__persons d-flex justify-content-center align-items-center">
                                        <div>
                                            <span class="food-count">1</span>
                                            <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                        </div>
                                    </div>
                                    <div class="counter__increase d-flex justify-content-center align-items-center">
                                        <span id="increase" class="increase counter__control">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-pop-up__buttonset">
                                <a href="#" class="upper" data-food-id="0">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery-pop-up__carousel-slide">
                <div class="delivery-pop-up__inner-heading" style="background: url('/img/Delivery/Food/Depositphotos_41466555_m-2015.jpg') no-repeat center top / cover;"></div>
                <div class="delivery-pop-up__inner-wrap">
                    <div class="delivery-pop-up__inner-text">
                        <div class="delivery-pop-up__inner-text-heading text-center">
                            <h3>Food title 4</h3>
                            <div class="delivery-pop-up__inner-text-cost d-flex justify-content-around align-items-center">
                                <div>
                                    Цена: <b>1300 грн</b>
                                </div>
                                <div>
                                    Вес: <b>180 гр</b>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-pop-up__inner-text-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, porro esse, voluptatibus illum architecto voluptates facilis aliquid, asperiores numquam vero nihil, doloremque tempore doloribus distinctio adipisci deserunt quo maiores.
                        </div>
                        <div class="delivery-pop-up__footer d-flex justify-content-between align-items-end">
                            <div class="counter">
                                <label class="counter__label d-block">Количество:</label>
                                <div class="counter__counter d-flex justify-content-between align-items-center">
                                    <div class="counter__decrease d-flex justify-content-center align-items-center">
                                        <span id="decrease" class="decrease counter__control">-</span>
                                    </div>
                                    <div class="counter__persons d-flex justify-content-center align-items-center">
                                        <div>
                                            <span class="food-count">1</span>
                                            <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                        </div>
                                    </div>
                                    <div class="counter__increase d-flex justify-content-center align-items-center">
                                        <span id="increase" class="increase counter__control">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-pop-up__buttonset">
                                <a href="#" class="upper" data-food-id="0">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery-pop-up__carousel-slide">
                <div class="delivery-pop-up__inner-heading" style="background: url('/img/Delivery/Food/orig.jpeg') no-repeat center top / cover;"></div>
                <div class="delivery-pop-up__inner-wrap">
                    <div class="delivery-pop-up__inner-text">
                        <div class="delivery-pop-up__inner-text-heading text-center">
                            <h3>Food title 5</h3>
                            <div class="delivery-pop-up__inner-text-cost d-flex justify-content-around align-items-center">
                                <div>
                                    Цена: <b>1300 грн</b>
                                </div>
                                <div>
                                    Вес: <b>180 гр</b>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-pop-up__inner-text-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, porro esse, voluptatibus illum architecto voluptates facilis aliquid, asperiores numquam vero nihil, doloremque tempore doloribus distinctio adipisci deserunt quo maiores.
                        </div>
                        <div class="delivery-pop-up__footer d-flex justify-content-between align-items-end">
                            <div class="counter">
                                <label class="counter__label d-block">Количество:</label>
                                <div class="counter__counter d-flex justify-content-between align-items-center">
                                    <div class="counter__decrease d-flex justify-content-center align-items-center">
                                        <span id="decrease" class="decrease counter__control">-</span>
                                    </div>
                                    <div class="counter__persons d-flex justify-content-center align-items-center">
                                        <div>
                                            <span class="food-count">1</span>
                                            <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                        </div>
                                    </div>
                                    <div class="counter__increase d-flex justify-content-center align-items-center">
                                        <span id="increase" class="increase counter__control">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-pop-up__buttonset">
                                <a href="#" class="upper" data-food-id="0">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery-pop-up__carousel-slide">
                <div class="delivery-pop-up__inner-heading" style="background: url('/img/Delivery/Food/tmb_112119_2595.jpg') no-repeat center top / cover;"></div>
                <div class="delivery-pop-up__inner-wrap">
                    <div class="delivery-pop-up__inner-text">
                        <div class="delivery-pop-up__inner-text-heading text-center">
                            <h3>Food title 6</h3>
                            <div class="delivery-pop-up__inner-text-cost d-flex justify-content-around align-items-center">
                                <div>
                                    Цена: <b>1300 грн</b>
                                </div>
                                <div>
                                    Вес: <b>180 гр</b>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-pop-up__inner-text-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, porro esse, voluptatibus illum architecto voluptates facilis aliquid, asperiores numquam vero nihil, doloremque tempore doloribus distinctio adipisci deserunt quo maiores.
                        </div>
                        <div class="delivery-pop-up__footer d-flex justify-content-between align-items-end">
                            <div class="counter">
                                <label class="counter__label d-block">Количество:</label>
                                <div class="counter__counter d-flex justify-content-between align-items-center">
                                    <div class="counter__decrease d-flex justify-content-center align-items-center">
                                        <span id="decrease" class="decrease counter__control">-</span>
                                    </div>
                                    <div class="counter__persons d-flex justify-content-center align-items-center">
                                        <div>
                                            <span class="food-count">1</span>
                                            <input type="hidden" name="food_count" value="1" class="food-count-input-hidden">
                                        </div>
                                    </div>
                                    <div class="counter__increase d-flex justify-content-center align-items-center">
                                        <span id="increase" class="increase counter__control">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-pop-up__buttonset">
                                <a href="#" class="upper" data-food-id="0">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <ul class="catalog__menu-list delivery-nav__catalog-list delivery-undernav__catalog-list">
                                 @foreach($catigories as $value)
                <li class="catalog__menu-item relative">
                    <input type="checkbox" class="catalog__menu-item-check absolute">
                    <div class="catalog__menu-item-inner">
                        <a href="{{route('catalog', $value->id)}}" class="catalog__menu-item-link upper">{{$value->name}}</a>
                        <span class="catalog__menu-item-symbol absolute">
                                            <span></span>
                                            <span></span>
                        </span>
                        <div class="catalog__drop">
                            <ul class="catalog__drop-list">
                                @foreach($catigories as $value2)
                                    @if($value->id == $value2->parrents)
                                        <li>
                                            <a href="{{route('catalog', $value2->id)}}">{{$value2->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
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
                                        <a href="#" class="catalog__menu-item-link upper">Новогодняя скидка 50%!</a>
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
                                <form action="" method="POST">
                                    <input type="text" name="delivery_search" class="absolute d-none" placeholder="Что ищите?">
                                    <i class="fa fa-search absolute" id="delivery_nav_search_icon"></i>
                                </form>
                            </div>
                        </div>
                        <div class="delivery-nav__list-cart" onclick="window.location.href = '/basket'">
                            <div>
                                <i class="fa fa-shopping-cart d-block"></i>
                                <span class="delivery-nav__list-cart-counter" id="countGoods">{{$count}}</span>
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
                    <ul class="nav__menu-mobile-menu text-center" id="menu_mobile">
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
<section id="offer" class="offer delivery-offer">
    <div class="offer__wrapper">
        <div class="offer__carousel">
            <div class="offer__slide" style="background: url(/img/Delivery/14906103258611.jpg) no-repeat center top / cover;">
                <div class="offer__slide-inner">
                    <div class="offer__slide-inner-heading text-center">
                        <h1>{!!$info->title!!}</h1>
                        <p class="m-auto">{{$info->description}}</p>
                    </div>
                    <div class="offer__slide-footer text-center">
                        <a href="#delivery_gallery" class="go_to"><i class="fa fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="delivery_gallery" class="delivery-gallery">
    <div class="container">
        <div class="delivery-gallery__wrapper">
            <div class="block-heading text-center">
                <h2>Наши лучшие блюда</h2>
                <div class="block-heading__decor d-flex justify-content-center">
                    <img src="/img/Main/decor.png" class="img-responsive">
                </div>
            </div>
            <div class="delivery-gallery__carousel-wrap">
                <div class="full-slider">
                    <div class="full-slider__slide relative">
                        <div class="full-slider__slide-inner" style="background: url('/img/Menu/Slider/14813uxVsXjAPBFmIovEzZkHNnR.jpg') no-repeat center top / cover;"></div>
                        <div class="full-slider__slide-inner-block absolute">
                            <div class="full-slider__slide-inner-heading">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                <span>Закуски, Деликатесы</span>
                            </div>
                            <div class="full-slider__slide-footer absolute">
                                <span><b>250</b> грн.</span>
                            </div>
                        </div>
                    </div>
                    <div class="full-slider__slide relative">
                        <div class="full-slider__slide-inner" style="background: url('/img/Menu/Slider/324567-svetik.jpg') no-repeat center top / cover;"></div>
                        <div class="full-slider__slide-inner-block absolute">
                            <div class="full-slider__slide-inner-heading">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                <span>Закуски, Деликатесы</span>
                            </div>
                            <div class="full-slider__slide-footer absolute">
                                <span><b>1250</b> грн.</span>
                            </div>
                        </div>
                    </div>
                    <div class="full-slider__slide relative">
                        <div class="full-slider__slide-inner" style="background: url('/img/Menu/Slider/Depositphotos_41466555_m-2015.jpg') no-repeat center top / cover;"></div>
                        <div class="full-slider__slide-inner-block absolute">
                            <div class="full-slider__slide-inner-heading">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                <span>Закуски, Деликатесы</span>
                            </div>
                            <div class="full-slider__slide-footer absolute">
                                <span><b>750</b> грн.</span>
                            </div>
                        </div>
                    </div>
                    <div class="full-slider__slide relative">
                        <div class="full-slider__slide-inner" style="background: url('/img/Menu/Slider/orig.jpeg') no-repeat center top / cover;"></div>
                        <div class="full-slider__slide-inner-block absolute">
                            <div class="full-slider__slide-inner-heading">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                <span>Закуски, Деликатесы</span>
                            </div>
                            <div class="full-slider__slide-footer absolute">
                                <span><b>450</b> грн.</span>
                            </div>
                        </div>
                    </div>
                    <div class="full-slider__slide relative">
                        <div class="full-slider__slide-inner" style="background: url('/img/Menu/Slider/tmb_112119_2595.jpg') no-repeat center top / cover;"></div>
                        <div class="full-slider__slide-inner-block absolute">
                            <div class="full-slider__slide-inner-heading">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                <span>Закуски, Деликатесы</span>
                            </div>
                            <div class="full-slider__slide-footer absolute">
                                <span><b>20</b> грн.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="delivery_catalog" class="delivery-catalog">
    <div class="container">
        <div class="delivery-catalog__wrapper">
            <div class="block-heading text-center">
                <h2>Каталог блюд</h2>
                <div class="block-heading__decor d-flex justify-content-center">
                    <img src="/img/Main/decor.png" class="img-responsive">
                </div>
            </div>
            <div class="delivery-catalog__sort d-flex justify-content-end">
                <div class="delivery-catalog__sort-block d-flex align-items-center">
                    <div class="delivery-catalog__sort-title">
                        Сортировать по:
                    </div>
                    <div class="delivery-catalog__sort-select relative">
                        <div id="delivery_sort_select" class="delivery-catalog__sort-select-title d-flex justify-content-between align-items-center">
                            <span id="delivery_sort_selected">Популярности</span>
                            <div class="delivery-catalog__sort-select-arrow">
                                <i id="delivery_sort_select_arrow" class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="delivery-catalog__sort-select-options-wrap absolute d-none" id="delivery_sort_select_drop">
                            <ul class="delivery-catalog__sort-select-options">
                                <li class="delivery-catalog__sort-select-option">
                                    Популярности
                                </li>
                                <li class="delivery-catalog__sort-select-option">
                                    Новизне
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@include('layouts.leftSide')
            <div class="delivery__load-more text-center">
                <a href="#">Загрузить еще</a>
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
<script type="text/javascript" src="{{ asset('js/delivery-navbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/catalog.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/catalog-range.js') }}"></script>
<script src="/js/Admin/functions.js"></script>
</body>
</html>
