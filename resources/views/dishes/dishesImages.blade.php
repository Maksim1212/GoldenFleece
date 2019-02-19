@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createDishesImage')}}">
            <label>Изображение</label>
            <input type="file" name="img"><br>
            <label>Установить как основное</label>
            <select name="main">
                <option value="1">Да</option>
                <option value="0">Нет</option>
            </select><br>
            <input type="hidden" name="id" value="{{$id}}">
            <input type="submit" value="Добавить"><br><br>
            {{ csrf_field() }}
            @foreach($images as $value)
                <img src="/storage/{{$value->foto}}">
                <a href="{{route('deleteImagesDishes', $value->id)}}">Удалить</a><br>
            @endforeach
        </form>
    </div>
</div>
@endsection
