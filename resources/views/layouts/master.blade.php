<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
@include('layouts.order')
@include('layouts.header')
@yield('content')

@include('layouts.footer')
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Main/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>