@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createSlide')}}">
            <label>Заголовок</label>
            <input type="text" name="title"><br>
            <label>Тело слайда</label>
            <textarea name="text"></textarea><br>
            <label>Текст на кнопке слайда</label>
            <input type="text" name="textButton"><br>
            <label>Урл на которую ведет конпка слайдера </label>
            <input type="text" name="url"><br>
            <label>Изображение </label>
            <input type="file" name="img"><br>
            <label>Выбирите слайдер</label>
            <select name="slider">
                <option value="">Не выбрано</option>
                <option value="на главной">На главной</option>
                <option value="на странице ресторана">На странице ресторана</option>
                <option value="на странице отеля">На странице отеля</option>
            </select><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection




