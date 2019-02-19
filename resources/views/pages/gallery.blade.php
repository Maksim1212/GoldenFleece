<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Галерея</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Gallery/gallery.css">
</head>
<body>
@include('layouts.order')
@include('layouts.header')
@include('layouts.bottomHeader')
<section id="gallery_desc" class="gallery-desc">
    <div class="container">
        <div class="gallery-desc__wrapper">
            <div class="portfolio-heading-menu">
                <div class="block-heading text-center">
                    <h2>Галерея</h2>
                </div>
                <div class="portfolio-heading-menu__wrapper-menu d-flex justify-content-between align-items-center">
                    <span class="portfolio-heading-menu__item" data-menu="all">Все фото</span>
                    <span class="portfolio-heading-menu__item" data-menu="food">Еда</span>
                    <span class="portfolio-heading-menu__item" data-menu="activity">Мероприятия</span>
                    <span class="portfolio-heading-menu__item" data-menu="interior">Интерьер</span>
                </div>
            </div>
            <div class="gallery-desc__images d-flex justify-content-between flex-wrap">
                @foreach($images as $value)
                    @if($value->section == "Еда")
                        <div class="gallery-desc__image all food" style="background: url('/storage/{{$value->foto}}') no-repeat center top / cover;"></div>
                    @elseif($value->section == "Мероприятия")
                        <div class="gallery-desc__image all activity" style="background: url('/storage/{{$value->foto}}') no-repeat center top / cover;"></div>
                    @else
                        <div class="gallery-desc__image all interior" style="background: url('/storage/{{$value->foto}}') no-repeat center top / cover;"></div>
                    @endif
                @endforeach
            </div>
            <div class="load-more text-center">
                <a href="#" class="upper">Показать больше</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Gallery/gallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>