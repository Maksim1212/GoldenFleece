<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Отзывы</title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Web site">
    <meta name="keywords" content="web, site">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/Feedback/feedback.css">
</head>
<body>
<div id="feedback_pop_up" class="feedback-pop-up d-none justify-content-center align-items-start fixed">
    <div class="feedback-pop-up__inner relative">
        <div class="feedback-pop-up__close absolute" id="feedback_pop_up_close">
            <i class="fa fa-times"></i>
        </div>
        <div class="feedback-pop-up__heading text-center">
            <h3>Добавить отзыв</h3>
        </div>
        <div class="feedback-pop-up__fromset">
            <form action="{{route('createFeedback')}}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="feedback-pop-up__fromset-block">
                    <input type="text" placeholder="Заголовок*" name="feedback_title">
                </div>
                <div class="feedback-pop-up__fromset-block">
                    <input type="text" placeholder="Имя*" name="feedback_name">
                </div>
                <div class="feedback-pop-up__fromset-block">
                    <span class="d-block">Photo</span>
                    <input type="file" name="feedback_attach">
                </div>
                <div class="feedback-pop-up__fromset-block">
                    <span class="d-block">Текст отзыва</span>
                    <textarea name="feedback_text"></textarea>
                </div>
                <div class="feedback-pop-up__fromset-block">
                    <span>Цены: </span>
                    <select name="feedback_prices">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="feedback-pop-up__fromset-block">
                    <span>Сервис: </span>
                    <select name="feedback_service">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="feedback-pop-up__fromset-block">
                    <span>Интерьер: </span>
                    <select name="feedback_interier">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="feedback-pop-up__fromset-block feedback-pop-up__fromset-block-buttonset text-center">
                    <button name="leave_feedback" class="upper">Оставить отзыв</button>
                </div>
                <div class="text-center feedback-hint-text">
                    *- Обязательные для заполнения поля
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.order')
@include('layouts.header')
@include('layouts.bottomHeader')
<section id="feedback_desc" class="feedback-desc">
    <div class="container">
        <div class="feedback-desc__wrapper">
            <div class="block-heading text-center">
                <div class="container">
                    <h2>Отзывы</h2>
                    <div class="block-heading__decor d-flex justify-content-center">
                        <img src="img/Main/decor.png" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="feedback-desc__add text-center">
                <span id="feedback_add">Добавить свой отзыв</span>
            </div>
            <div class="feedback-desc__feedbacks">
                @foreach($feedbacks as $value)
                    <div class="feedback-desc__feedback">
                        <div class="feedback-desc__feedback-heading text-center">
                            <h3>{{$value->feedback_title}}</h3>
                        </div>
                        <div class="feedback-desc__feedback-inner d-flex justify-content-between align-items-center">
                            <div class="feedback-desc__feedback-user d-flex align-items-center">
                                <div class="feedback-desc__feedback-user-pic" style='background: url("/storage/{{$value->feedback_attach}}") no-repeat center top / cover;'></div>
                                <div class="feedback-desc__feedback-user-data">
                                    <span class="d-block feedback-desc__user-name">{{$value->feedback_name}}</span>
                                    <span class="d-block feedback-desc__user-time">{{$value->created_at}}</span>
                                    <span class="d-block feedback-desc__user-text">{{$value->feedback_text}}</span>
                                </div>
                            </div>
                            <div class="feedback-desc__feedback-rate">
                                <div class="feedback-desc__feedback-rate-item">
                                    <span>Интерьер:</span>
                                    <div class="feedback-desc__feedback-rate-stars d-flex">
                                        <div class="feedback-desc__feedback-rate-stars-filled">
                                            @for($i = 0;$i<($value->feedback_interier);$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <div class="feedback-desc__feedback-rate-stars-unfilled">
                                            @for($i = 0;$i<10-($value->feedback_interier);$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-desc__feedback-rate-item">
                                    <span>Сервис:</span>
                                    <div class="feedback-desc__feedback-rate-stars d-flex">
                                        <div class="feedback-desc__feedback-rate-stars-filled">
                                            @for($i = 0;$i<($value->feedback_service);$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <div class="feedback-desc__feedback-rate-stars-unfilled">
                                            @for($i = 0;$i<10-($value->feedback_service);$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-desc__feedback-rate-item">
                                    <span>Цены:</span>
                                    <div class="feedback-desc__feedback-rate-stars d-flex">
                                        <div class="feedback-desc__feedback-rate-stars-filled">
                                            @for($i = 0;$i<($value->feedback_prices);$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <div class="feedback-desc__feedback-rate-stars-unfilled">
                                            @for($i = 0;$i<10-($value->feedback_prices);$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$feedbacks->links()}}
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Feedback/feedback.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>