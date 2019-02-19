@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('createRoomPage')}}" style="width:20%;">Добавить номер в отеле</a>
        <table border="1px;" style="width:90%;">
            <tr>
                <td>Название</td>
                <td>Стоимость</td>
                <td>Количество</td>
                <td>Изображение отражаемое в слайдере</td>
                <td>Действия</td>
            </tr>
            @foreach($rooms as $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->cost}}</td>
                    <td>{{$value->number}}</td>
                    <td><img src="/storage/{{$value->foto}}" style="width:84px;height: 80px;"></td>
                    <td>
                        <a href="{{route('editRoomPage',$value->id)}}">Изменить</a><br>
                        <a href="{{route('deleteRoom',$value->id)}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
            {{$rooms->links()}}
        </table>
    </div>
</div>
@endsection


