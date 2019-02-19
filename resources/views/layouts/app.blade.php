<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="/js/Admin/functions.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                @if(Auth::check())
                    @if( Auth::user()->accessRights == 'all')
                        <a href="{{route('info')}}">Информация на сайте</a>
                        <a href="{{route('newsa')}}" style="margin-left: 10px; ">Новости</a>
                        <a href="{{route('gallery')}}" style="margin-left: 10px;">Галерея</a>
                        <a href="{{route('slides')}}" style="margin-left: 10px;">Слайды</a>
                        <a href="{{route('rooms')}}" style="margin-left: 10px;">Комнаты</a>
                        <a href="{{route('dishes')}}" style="margin-left: 10px;">Блюда</a>
                        <a href="{{route('catigoriesDishes')}}" style="margin-left: 10px;width:70px;">Категории блюд</a>
                        <a href="{{route('feedbacksAdmin')}}" style="margin-left: 5px;">Отзывы</a>
                        <a href="{{route('deliveries')}}" style="margin-left: 10px;">Заявки<br> на доставку</a>
                        <a href="{{route('table')}}" style="margin-left: 10px;">Заявки на бронь<br> столика</a>
                        <a href="{{route('orderRoomsPage')}}" style="margin-left: 10px;">Заявки на бронь<br> номера</a>
                    @elseif(Auth::user()->accessRights == 'news')
                        <a href="{{route('newsa')}}" style="margin-left: 10px; ">Новости</a>
                        <a href="{{route('gallery')}}" style="margin-left: 10px;">Галерея</a>
                        <a href="{{route('slides')}}" style="margin-left: 10px;">Слайды</a>
                    @elseif(Auth::user()->accessRights == 'hotel')
                        <a href="{{route('rooms')}}" style="margin-left: 10px;">Комнаты</a>
                        <a href="{{route('orderRoomsPage')}}" style="margin-left: 10px;">Заявки на бронь номера</a>
                    @elseif(Auth::user()->accessRights == 'rest')
                        <a href="{{route('slides')}}" style="margin-left: 10px;">Слайды</a>
                        <a href="{{route('dishes')}}" style="margin-left: 10px;">Блюда</a>
                        <a href="{{route('catigoriesDishes')}}" style="margin-left: 10px;">Категории блюд</a>
                        <a href="{{route('table')}}" style="margin-left: 10px;">Заявки на бронь столика</a>
                    @else
                        <a href="{{route('deliveries')}}" style="margin-left: 10px;">Заявки на доставку</a>
                    @endif
                @endif
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
