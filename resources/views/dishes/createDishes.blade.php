@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createDishes')}}">
            <label>Название</label>
            <input type="text" name="name"><br>
            <label>Стоимость</label>
            <input type="text" name="cost"><br>
            <label>Вес</label>
            <input type="text" name="weight"><br>
            <label>Рейтенг блюда(1-10)</label>
            <input type="text" name="rating"><br>
            <label>Слайдер</label>
            <select name="slider">
                <option value="0">Не отображать</option>
                <option value="1">Отображать</option>
            </select><br>
            <label>Статус</label>
            <select name="status">
                <option value="Обычное блюдо">Обычное блюдо</option>
                <option value="Лучшее блюдо">Лучшее блюдо</option>
            </select><br>
            <label>Категория</label>
            <select name="catigory">
                @foreach($catigories as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select><br>
            <label>Описание</label>
            <textarea name="description"></textarea><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection