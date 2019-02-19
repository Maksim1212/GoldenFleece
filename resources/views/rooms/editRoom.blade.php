@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('editRoom')}}">
            <label>Название</label>
            <input type="text" name="name" value="{{$room->name}}"><br>
            <label>Стоимость</label>
            <input type="text" name="cost" value="{{$room->cost}}"><br>
            <label>Количество</label>
            <input type="text" name="number" value="{{$room->number}}"><br>
            <label>Изображение </label>
            <input type="file" name="img"><br>
            <img src="/storage/{{$room->foto}}" style="width:84px;height: 80px;"><br>
            <input type="hidden" name="id" value="{{$room->id}}">
            <input type="submit" value="Изменить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection






