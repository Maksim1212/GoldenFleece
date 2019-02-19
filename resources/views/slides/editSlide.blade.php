@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('editSlide')}}">
            <label>Заголовок</label>
            <input type="text" name="title" value="{{$slide->title}}"><br>
            <label>Тело слайда</label>
            <textarea name="text">{{$slide->body}}</textarea><br>
            <label>Текст на кнопке слайда</label>
            <input type="text" name="textButton" value="{{$slide->textButton}}"><br>
            <label>Урл на которую ведет конпка слайдера </label>
            <input type="text" name="url" value="{{$slide->url}}"><br>
            <label>Изображение </label>
            <input type="file" name="img"><br>
            <img src="/storage/{{$slide->foto}}" style="width:84px;height: 80px;"><br>
            <label>Выбирите слайдер</label>
            <select name="slider">
                @if($slide->slider == "на главной")
                    <option value="на главной" selected="">На главной</option>
                    <option value="на странице ресторана">На странице ресторана</option>
                    <option value="на странице отеля">На странице отеля</option>
                @elseif($slide->slider == "на странице ресторана")
                    <option value="на главной">На главной</option>
                    <option value="на странице ресторана" selected="">На странице ресторана</option>
                    <option value="на странице отеля">На странице отеля</option>
                @else
                    <option value="на главной">На главной</option>
                    <option value="на странице ресторана">На странице ресторана</option>
                    <option value="на странице отеля" selected="">На странице отеля</option>
                @endif
            </select><br>
            <input type="hidden" name="id" value="{{$slide->id}}">
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection





