@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <form method="POST" enctype="multipart/form-data" action="{{route('createNews')}}">
            <label>Заголовок</label>
            <input type="text" name="title" style="width:500px;"><br>
            <label>Анонс</label>
            <input type="text" name="preview" style="width:500px; height: 50px;"><br><br>
            <label>Статья</label>
            <textarea name="article" style="width:500px; height: 50px;"></textarea><br>
            <label>Тип статьи</label>
            <select name="type">
                <option value="news">News</option>
                <option value="events">Events</option>
            </select><br>
            <label>Отображать на главной</label>
            <select name="active">
                <option value="yes">Да</option>
                <option value="no">Нет</option>
            </select><br>
            <label>Фото</label>
            <input type="file" name="img"><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection



