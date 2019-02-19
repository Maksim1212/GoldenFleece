@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createRoom')}}">
            <label>Название</label>
            <input type="text" name="name"><br>
            <label>Стоимость</label>
            <input type="text" name="cost"><br>
            <label>Количество</label>
            <input type="text" name="number"><br>
            <label>Изображение </label>
            <input type="file" name="img"><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection





