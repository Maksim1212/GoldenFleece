<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Меню</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Menu/menu.css">
</head>
<body>
@include('layouts.order')
@include('layouts.header')
@include('layouts.bottomHeader')
<section id="menu_desc" class="menu-desc">
    <div class="container">
        <div class="article-heading">
            <div class="article-heading__heading text-center">
                <h2>{{$info->title}}</h2>
            </div>
            <div class="article-heading__text">
                <p>{{$info->description}}</p>
            </div>
        </div>
        <div class="menu-desc__buttonset text-center">
            <a href="{{route('catalog',0)}}" class="upper">Перейти к меню</a>
            <hr>
        </div>
    </div>
</section>
<section id="menu_preview" class="menu-preview">
    <div class="container">
        <div class="block-heading text-center">
            <h2>Наши лучшие блюда</h2>
            <div class="block-heading__decor d-flex justify-content-center">
                <img src="img/Main/decor.png" class="img-responsive">
            </div>
        </div>
        <div class="menu-preview__carousel-wrap">
            <div class="full-slider">
                <div class="full-slider__slide relative">
                    <div class="full-slider__slide-inner" style="background: url('img/Menu/Slider/14813uxVsXjAPBFmIovEzZkHNnR.jpg') no-repeat center top / cover;"></div>
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
                    <div class="full-slider__slide-inner" style="background: url('img/Menu/Slider/324567-svetik.jpg') no-repeat center top / cover;"></div>
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
                    <div class="full-slider__slide-inner" style="background: url('img/Menu/Slider/Depositphotos_41466555_m-2015.jpg') no-repeat center top / cover;"></div>
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
                    <div class="full-slider__slide-inner" style="background: url('img/Menu/Slider/orig.jpeg') no-repeat center top / cover;"></div>
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
                    <div class="full-slider__slide-inner" style="background: url('img/Menu/Slider/tmb_112119_2595.jpg') no-repeat center top / cover;"></div>
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
</section>
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Menu/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
