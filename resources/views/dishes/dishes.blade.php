@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('createDishesPage')}}" style="width:20%;">Создать блюдо</a>
        <table border="1px;" style="width:90%;">
            <tr>
                <td>Название</td>
                <td>Стоимость</td>
                <td>Вес</td>
                <td>Рейтенг</td>
                <td>Тип</td>
                <td>Слайдер</td>
                <td>Категория</td>
                <td>Описание</td>
                <td>Действия</td>
            </tr>
            @foreach($dishes as $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->cost}}</td>
                    <td>{{$value->weight}}</td>
                    <td>{{$value->rating}}</td>
                    <td>{{$value->status}}</td>
                    <td>@if($value->slider == 0)Не отображать @else Отображать @endif</td>
                    <td>
                        @foreach($catigories as $value2)
                            @if($value->catigory == $value2->id)
                                {{$value2->name}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$value->description}}</td>
                    <td>
                        <a href="{{route('dishesImagesPage', $value->id)}}">Изображения</a><br>
                        <a href="{{route('editDishesPage', $value->id)}}">Изменить</a><br>
                        <a href="{{route('deleteDishes', $value->id)}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$dishes->links()}}
    </div>
</div>
@endsection




