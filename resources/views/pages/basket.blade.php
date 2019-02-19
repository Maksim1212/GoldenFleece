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
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="/css/Delivery/delivery.css">
    <link rel="stylesheet" href="/css/Cart/cart.css">
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
                                <span class="delivery-nav__list-cart-counter">{{$count}}</span>
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
                    <?php $i=0;?>
                    @foreach($dishes as $value)
                        <div class="cart-desc__item d-flex justify-content-between align-items-center m-auto">
                            <div class="cart-desc__item-desc d-flex align-items-center">
                                <div class="cart-desc__item-pic" style="background: url('/storage/{{$value->foto}}') no-repeat center top / cover;"></div>
                                <div class="cart-desc__item-text">
                                    <h3>{{$value->name}}</h3>
                                    <span>Вес: <b>{{$value->weight}} гр</b></span>
                                </div>
                            </div>
                            <div class="cart-desc__item-counter">
                                <div class="counter text-center">
                                    <label class="counter__label d-block">Количество:</label>
                                    <div class="counter__counter d-flex justify-content-between align-items-center">
                                        <div class="counter__decrease d-flex justify-content-center align-items-center">
                                            <span class="cart-decrease counter__control" onclick="minus({{$i}});">-</span>
                                        </div>
                                        <div class="counter__persons d-flex justify-content-center align-items-center">
                                            <div>
                                                <span class="food-count">{{$value->count}}</span>
                                                <input type="hidden" name="food_count[]" value="{{$value->count}}" class="food-count-input-hidden">
                                                <input type="hidden" name="dishId[]" value="{{$value->idGood}}">
                                            </div>
                                        </div>
                                        <div class="counter__increase d-flex justify-content-center align-items-center">
                                            <span class="cart-increase counter__control" onclick="plus({{$i}});">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-desc__item-price text-center">
                                <span class="d-block cart-desc__item-price-label">Цена:</span>
                                <span><b>{{$value->cost}}</b> грн</span>
                                <input type="hidden" name="costFood[]" value="{{$value->cost}}">
                            </div>
                            <div class="cart-desc__item-price text-center">
                                <button onclick="deleteGood({{$value->idGood}})">-</button>
                            </div>
                        </div>
                        <?php $i++;?>
                    @endforeach
                    <hr>
                </div>
                <div class="cart-desc__price d-flex justify-content-between align-items-center">
                    <div class="cart-desc__current-price text-center">
                        <span class="d-block cart-desc__current-price-label">Итого:</span>
                        <span><b id="current_price"></b> грн</span>
                        <input type="hidden" name="totalPrice" id="totalPrice" value="">
                    </div>
                    <div class="cart-desc__price-next">
                        <a href="{{route('deliveryEat')}}" class="upper">Далее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<form id="formAddGood" method="POST">
    @csrf
    <input type="hidden" id="idGood" name="idGood" value="0">
    <input type="hidden" id="do" name="do" value="">
</form>
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

