@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('editDishes')}}">
            <label>Название</label>
            <input type="text" name="name" value="{{$dishes->name}}"><br>
            <label>Стоимость</label>
            <input type="text" name="cost" value="{{$dishes->cost}}"><br>
            <label>Вес</label>
            <input type="text" name="weight" value="{{$dishes->weight}}"><br>
            <label>Рейтенг блюда(1-10)</label>
            <input type="text" name="rating" value="{{$dishes->rating}}"><br>
            <label>Слайдер</label>
            <select name="slider">
                @if($dishes->slider == 0)
                    <option value="0" selected="">Не отображать</option>
                    <option value="1">Отображать</option>
                @else 
                    <option value="0">Не отображать</option>
                    <option value="1" selected="">Отображать</option>
                @endif
            </select><br>
            <label>Статус</label>
            <select name="status">
                @if($dishes->status == "Обычное блюдо")
                    <option value="Обычное блюдо" selected="">Обычное блюдо</option>
                    <option value="Лучшее блюдо">Лучшее блюдо</option>
                @else
                    <option value="Обычное блюдо">Обычное блюдо</option>
                    <option value="Лучшее блюдо" selected="">Лучшее блюдо</option>
                @endif
            </select><br>
            <label>Категория</label>
            <select name="catigory">
                @foreach($catigories as $value)
                    @if($dishes->catigory == $value->name)
                        <option value="{{$value->id}}" selected="">{{$value->name}}</option>
                    @else
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endif
                @endforeach
            </select><br>
            <label>Описание</label>
            <textarea name="description">{{$dishes->description}}</textarea><br>
            <input type="hidden" name="id" value="{{$dishes->id}}">
            <input type="submit" value="Изменить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection
