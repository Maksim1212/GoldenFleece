<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Отель</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Hotel/hotel.css">
</head>
<body>
@include('layouts.header')

<section id="nav" class="nav">
    <div class="container">
        <div class="nav__wrapper">
            <ul class="nav__list d-flex justify-content-between align-items-center">
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
                    <a href="/">
                        <img src="/storage/{{$topLogo->logo}}" style="width:64px;height: 60px;" alt="Золотое Руно" title="Золотое Руно">
                    </a>
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
            <div class="nav__menu-mobile d-none relative">
                <div class="nav__menu-mobile-inner d-flex justify-content-center align-items-center">
                    <div class="nav__menu-mobile-burger absolute" id="burger_menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="nav__menu-logo">
                        <img src="/storage/{{$topLogo->logo}}" alt="Золотое Руно" title="Золотое Руно" class="img-responsive">
                    </div>
                </div>
                <div class="nav__menu-mobile-wrap">
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
<section id="hotel_desc" class="hotel-desc">
    <div class="container">
        <div class="article-heading">
            <div class="article-heading__heading text-center">
                <h2>{{$info->title}}</h2>
            </div>
            <div class="article-heading__text">
                <p>{!!$info->description!!}</p>
            </div>
        </div>
    </div>
</section>
@include('layouts.orderRoom')
<section id="hotel_types" class="hotel-types">
    <div class="hotel-types__wrapper">
        <div class="block-heading text-center">
            <div class="container">
                <h2>Типы номеров</h2>
                <div class="block-heading__decor d-flex justify-content-center">
                    <img src="img/Main/decor.png" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="carousel">
            @foreach($rooms as $value)
                <div class="carousel__item" style="background: url('img/Hotel/Slider/1267_room-type.jpg') no-repeat center top / cover;">
                    <div class="carousel__item-inner justify-content-center align-items-center">
                        <div class="text-center">
                            <h3>{{$value->name}}</h3>
                            <span class="hotel__carousel-undertitle">Цена в сутки: <b>{{$value->cost}}</b></span>
                        </div>
                    </div>
                    <div class="carousel__item-inner-hover justify-content-center align-items-center">
                        <div class="text-center carousel__item-inner-block">
                            <h3>{{$value->name}}</h3>
                            <div class="hotel__carousel-undertitle hotel__carousel-undertitle-hover">
                                Цена в сутки: <b>{{$value->cost}}</b><br>
                                Осталось номеров: {{$value->number}}
                            </div>
                            <a href="#reserve_hotel" class="go_to upper">Заказать</a>
                            <a href="/mainGallery" class="upper">Смотреть фото</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.orderCall')
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Hotel/hotel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>