<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Ресторан</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Restaurant/restaurant.css">
</head>
<body>
@include('layouts.order')
@include('layouts.header')
@include('layouts.bottomHeader')
<section id="restaurant_desc" class="restaurant-desc">
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
<section id="restaurant_gallery" class="restaurant-gallery">
    <div class="restaurant-gallery__container">
        <div class="restaurant-gallery__wrapper">
            <div class="block-heading text-center">
                <div class="container">
                    <h2>Зоны для размещения</h2>
                    <div class="block-heading__decor d-flex justify-content-center">
                        <img src="img/Main/decor.png" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="carousel">
                @foreach($slides as $value)
                    <div class="carousel__item" style="background: url('img/Restaurant/4362862167523593_15ca.jpg') no-repeat center top / cover;">
                        <div class="carousel__item-inner justify-content-center align-items-center">
                            <h3>{{$value->title}}</h3>
                        </div>
                        <div class="carousel__item-inner-hover justify-content-center align-items-center">
                            <div class="text-center carousel__item-inner-block">
                                <h3>{{$value->title}}</h3>
                                <span class="restaurant__reserve-table upper" data-table-id="0">Зарезервировать столик</span>
                                <a href="/mainGallery" class="upper">Смотреть фото</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Restaurant/restaurant.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>