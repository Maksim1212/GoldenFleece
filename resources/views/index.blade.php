@extends('layouts.master')

@section('content')
@include('layouts.bottomHeader')
    <section id="offer" class="offer">
        <div class="offer__wrapper">
            <div class="offer__carousel">
                @foreach($slides as $value)
                    <div class="offer__slide" style="background: url('/storage/{{$value->foto}}') no-repeat center top / cover;">
                        <div class="offer__slide-inner">
                            <div class="offer__slide-inner-heading text-center">
                                <h1>{!!$value->title!!}</h1>
                                <p class="m-auto">{!!$value->body!!}</p>
                            </div>
                            <div class="offer__slide-button text-center">
                                <a href="{{$value->url}}" class="upper">{{$value->textButton}}</a>
                            </div>
                            <div class="offer__slide-footer text-center">
                                <a href="#about" class="go_to"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="block-heading text-center">
                    <h2>{{$about->title}}</h2>
                    <div class="block-heading__decor d-flex justify-content-center">
                        <img src="img/Main/decor.png" class="img-responsive">
                    </div>
                    <div class="block-heading-text">
                        <p class="m-auto">{{$about->description}}</p>
                    </div>
                </div>
                <div class="about__items d-flex justify-content-between flex-wrap">
                    <div class="about__item text-center">
                        <div class="about__item-icon">
                            <img src="img/Main/About/cutlery(1).png" class="img-responsive m-auto">
                        </div>
                        <div class="about__item-title">
                            <h3>{{$rest->title}}</h3>
                        </div>
                        <div class="about__item-text">
                            <p>{{$rest->description}}</p>
                        </div>
                        <div class="about__item-button">
                            <a href="#" class="upper">Подробнее</a>
                        </div>
                    </div>
                    <div class="about__item text-center">
                        <div class="about__item-icon">
                            <img src="img/Main/About/Group.png" class="img-responsive m-auto">
                        </div>
                        <div class="about__item-title">
                            <h3>{{$hotel->title}}</h3>
                        </div>
                        <div class="about__item-text">
                            <p>{{$hotel->description}}</p>
                        </div>
                        <div class="about__item-button">
                            <a href="#" class="upper">Подробнее</a>
                        </div>
                    </div>
                    <div class="about__item text-center">
                        <div class="about__item-icon">
                            <img src="img/Main/About/mask.png" class="img-responsive m-auto">
                        </div>
                        <div class="about__item-title">
                            <h3>{{$merop->title}}</h3>
                        </div>
                        <div class="about__item-text">
                            <p>{{$merop->description}}</p>
                        </div>
                        <div class="about__item-button">
                            <a href="#" class="upper">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about_info" class="about-info" style="background: url(img/Main/varenik.png) no-repeat center top / cover;">
        <div class="container">
            <div class="about-info__wrapper d-flex justify-content-end align-items-center">
                <div class="about-info__inner">
                    <h3>{!!$info->title!!}</h3>
                    <p>{{$info->description}}</p>
                    <a href="#" class="upper">Перейти к выбору блюд</a>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="news">
        <div class="container">
            <div class="news__wrapper">
                <div class="block-heading text-center">
                    <h2>Новости ресторана</h2>
                    <div class="block-heading__decor d-flex justify-content-center">
                        <img src="img/Main/decor.png" class="img-responsive">
                    </div>
                </div>
                <div class="news__items d-flex justify-content-between flex-wrap">
                    @foreach($news as $value)
                        <a href="#" class="news__item">
                            <div class="news__item-heading" style="background: url('/storage/{{$value->foto}}') no-repeat center top / cover;"></div>
                            <div class="news__item-body text-center">
                                <span class="news__item-body-date">{{$value->created_at}}</span>
                                <p>{{$value->preview}}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="feedback" class="feedback" style="background: url('img/Main/pre-footer2.jpg') no-repeat center top / cover">
        <div class="container">
            <div class="feedback__wrapper d-flex justify-content-center align-items-center">
                <div class="feedback__inner text-center">
                    <div class="feedback__inner-block">
                        <span>Хочешь всегда быть в курсе актуальной информации?</span>
                        <div><b>Подпишись на нашу рассылку</b></div>
                    </div>
                    <form action="" method="POST" class="d-flex justify-content-center align-items-center">
                        <div class="feedback__formset d-flex">
                            <input type="email" required class="feedback__input" name="user_email" placeholder="Введите ваш Email">
                            <button type="submit" class="upper">Подписаться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection