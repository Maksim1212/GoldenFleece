@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createLogo')}}">
            <label>Расположение</label>
            <select name="place">
                <option value="Нижнее меню">Нижнее меню</option>
                <option value="Верхнее меню">Верхнее меню</option>
            </select><br>
            <label>Лого </label><br>
            <input type="file" name="img"><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection


