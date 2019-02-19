@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('editFeedback')}}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <label class="d-block">Заголовок</label>
            <input type="text" placeholder="Заголовок*" name="feedback_title" value="{{$feedback->feedback_title}}"><br>
            <label class="d-block">Имя</label>
            <input type="text" placeholder="Имя*" name="feedback_name" value="{{$feedback->feedback_name}}"><br>
            <label class="d-block">Photo</label>
            <input type="file" name="feedback_attach"><br>
            <img src="/storage/{{$feedback->feedback_attach}}" style="width:100px;height: 90px;"><br>
            <label>Текст отзыва</label>
            <textarea name="feedback_text">{{$feedback->feedback_text}}</textarea><br>
            <label>Цены: </label>
            <select name="feedback_prices">
                @for($i = 1; $i<=10; $i++)
                    @if($i == $feedback->feedback_prices)
                        <option value="{{$i}}" selected="">{{$i}}</option>
                    @else
                        <option value="{{$i}}">{{$i}}</option>
                    @endif
                @endfor
            </select><br>
            <label>Сервис: </label>
            <select name="feedback_service">
                @for($i = 1; $i<=10; $i++)
                    @if($i == $feedback->feedback_service)
                        <option value="{{$i}}" selected="">{{$i}}</option>
                    @else
                        <option value="{{$i}}">{{$i}}</option>
                    @endif
                @endfor
            </select><br>
            <label>Интерьер: </label>
            <select name="feedback_interier">
                @for($i = 1; $i<=10; $i++)
                    @if($i == $feedback->feedback_interier)
                        <option value="{{$i}}" selected="">{{$i}}</option>
                    @else
                        <option value="{{$i}}">{{$i}}</option>
                    @endif
                @endfor
            </select><br>
            <label>Опубликовано</label>
            @if($feedback->active == 1)
                <input type="checkbox" name="active" checked=""><br>
            @else
                <input type="checkbox" name="active"><br>
            @endif
            <input type="hidden" name="id" value="{{$feedback->id}}">
            <input type="hidden" name="path" value="{{$feedback->feedback_attach}}">
            <input type="submit" value="Изменить">
        </form>
    </div>
</div>
@endsection



