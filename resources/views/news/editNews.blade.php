@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <form method="POST" enctype="multipart/form-data" action="{{route('editNews')}}">
            <label>Заголовок</label>
            <input type="text" name="title" style="width:500px;" value="{{$news->title}}"><br>
            <label>Анонс</label>
            <input type="text" name="preview" style="width:500px; height: 50px;" value="{{$news->preview}}"><br><br>
            <label>Статья</label>
            <textarea name="article" style="width:500px; height: 50px;">{{$news->text}}</textarea><br>
            <label>Тип статьи</label>
            <select name="type">
                @if($news->type == "news")
                    <option value="news" selected="">News</option>
                    <option value="events">Events</option>
                @else
                    <option value="news">News</option>
                    <option value="events" selected="">Events</option>
                @endif
            </select><br>
            <label>Отображать на главной</label>
            <select name="active">
                @if($news->active == "yes")
                    <option value="yes" selected="">Да</option>
                    <option value="no">Нет</option>
                @else 
                    <option value="yes" >Да</option>
                    <option value="no" selected="">Нет</option>
                @endif
            </select><br>
            <label>Фото</label>
            <input type="file" name="img"><br>
            <img src="/storage/{{$news->foto}}" style="width:84px;height: 80px;"><br><br>
            <input type="submit" value="Изменить">
            <input type="hidden" name="id" value="{{$news->id}}">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection




