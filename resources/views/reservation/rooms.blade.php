@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="width:90%;">
            <a href="#" style="margin-left: 10px;" onclick="showAndHideThreeDivs('all', 'active', 'reject')">На рассмотрение</a>
            <a href="#" style="margin-left: 10px;" onclick="showAndHideThreeDivs('active', 'all', 'reject')">Одобреные</a>
            <a href="#" style="margin-left: 10px;" onclick="showAndHideThreeDivs('reject', 'all', 'active')">Отклонненые</a>
        </div>
        <div id="all" style="width:90%;">
            <table border="1px;">
                <tr>
                    <td>Имя</td>
                    <td>Дата заезда</td>
                    <td>Дата отезда</td>
                    <td>Количество человек</td>
                    <td>Номер телефона</td>
                    <td>Статус</td>
                    <td>Тип</td>
                    <td>Действие</td>
                </tr>
                @foreach($rooms as $value)
                    <tr>
                        <td>{{$value->name_surname}}</td>
                        <td>{{$value->start_date}}</td>
                        <td>{{$value->finish_date}}</td>
                        <td>{{$value->persons}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->hotel_type_select}}</td>
                        <td>На рассмотрении</td>
                        <td>
                            <a href="{{route('activeRooms', $value->id)}}">Одобрить</a><br>
                            <a href="{{route('rejectRooms', $value->id)}}">Отклонить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div id="active" style="width:90%;display:none;">
            <table border="1px;">
                <tr>
                    <td>Имя</td>
                    <td>Дата заезда</td>
                    <td>Дата отезда</td>
                    <td>Количество человек</td>
                    <td>Номер телефона</td>
                    <td>Статус</td>
                    <td>Тип</td>
                    <td>Действие</td>
                </tr>
                @foreach($activeRooms as $value)
                    <tr>
                        <td>{{$value->name_surname}}</td>
                        <td>{{$value->start_date}}</td>
                        <td>{{$value->finish_date}}</td>
                        <td>{{$value->persons}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->hotel_type_select}}</td>
                        <td>На рассмотрении</td>
                        <td>
                            <a href="{{route('rejectRooms', $value->id)}}">Отклонить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div id="reject" style="width:90%;display:none;">
            <table border="1px;">
                <tr>
                    <td>Имя</td>
                    <td>Дата заезда</td>
                    <td>Дата отезда</td>
                    <td>Количество человек</td>
                    <td>Номер телефона</td>
                    <td>Статус</td>
                    <td>Тип</td>
                    <td>Действие</td>
                </tr>
                @foreach($rejectRooms as $value)
                    <tr>
                        <td>{{$value->name_surname}}</td>
                        <td>{{$value->start_date}}</td>
                        <td>{{$value->finish_date}}</td>
                        <td>{{$value->persons}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->hotel_type_select}}</td>
                        <td>На рассмотрении</td>
                        <td>
                            <a href="{{route('activeRooms', $value->id)}}">Одобрить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection




