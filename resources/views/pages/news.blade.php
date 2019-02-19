<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Новости</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/News/news.css">
</head>
<body>
@include('layouts.order')
@include('layouts.header')
@include('layouts.bottomHeader')
<section id="news_desc" class="news-desc">
    <div class="container">
        <div class="news-desc__wrapper">
            <div class="block-heading text-center">
                <h2>Новости</h2>
            </div>
            <div class="news-desc__wrapper-menu d-flex justify-content-between align-items-center">
                <span class="news-desc__wrapper-menu-item" data-news-menu="all">Все</span>
                <span class="news-desc__wrapper-menu-item" data-news-menu="activity">Мероприятия</span>
                <span class="news-desc__wrapper-menu-item" data-news-menu="news">Новости</span>
            </div>
            <div class="news-desc__wrapper-news">
                <div class="news__items d-flex justify-content-between flex-wrap">
                    @foreach($news as $value)
                        @if($value->type == 'news')
                            <a href="#" class="news__item all" data-id="{{$value->id}}">
                                <div class="news__item-heading" style='background: url("/storage/{{$value->foto}}") no-repeat center top / cover;'></div>
                                <div class="news__item-body text-center">
                                    <span class="news__item-body-date">{{$value->created_at}}</span>
                                    <p>{!!$value->preview!!}</p>
                                </div>
                            </a>
                        @else
                            <a href="#" class="news__item all activity" data-id="{{$value->id}}">
                                <div class="news__item-heading" style='background: url("/storage/{{$value->foto}}") no-repeat center top / cover;'></div>
                                <div class="news__item-body text-center">
                                    <span class="news__item-body-date">{{$value->created_at}}</span>
                                    <p>{!!$value->preview!!}</p>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="news-desc__wrapper-load-more text-center">
                <a href="#" class="upper">Показать больше</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/News/news.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
