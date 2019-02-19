@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="width:90%;">
            <a href='#' onclick="showAndHideThreeDivs('all', 'active', 'reject')">На рассмотрении</a>
            <a href='#' style='margin-left: 10px;' onclick="showAndHideThreeDivs('active', 'all', 'reject')">Одобренные</a>
            <a href='#' style='margin-left: 10px;' onclick="showAndHideThreeDivs('reject', 'all', 'active')">Отклоненные</a>
        </div>
        <div style='width:90%;' id='all'>
            <table border="1px;">
                <tr>
                    <td>Имя</td>
                    <td>Номер телефона</td>
                    <td>Email</td>
                    <td>Адрес</td>
                    <td>Коментарий</td>
                    <td>Статус</td>
                    <td>Действия</td>
                </tr>
                @foreach($orders as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td>Ул. {{$value->street}} дом {{$value->house}} кв. {{$value->apartment}}</td>
                        <td>{{$value->comment}}</td>
                        <td>
                            @if($value->active == 1) 
                                Одобрено
                            @elseif($value->active == 2)
                                Отклоненно
                            @else
                                На рассмотрении
                            @endif
                        </td>
                        <td><a href="{{route('showOrder', $value->id)}}">Подробнее</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style='width:90%;display:none;' id='active'>
            <table border="1px;">
                <tr>
                    <td>Имя</td>
                    <td>Номер телефона</td>
                    <td>Email</td>
                    <td>Адрес</td>
                    <td>Коментарий</td>
                    <td>Статус</td>
                    <td>Действия</td>
                </tr>
                @foreach($activeOrders as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td>Ул. {{$value->street}} дом {{$value->house}} кв. {{$value->apartment}}</td>
                        <td>{{$value->comment}}</td>
                        <td>
                            @if($value->active == 1) 
                                Одобрено
                            @elseif($value->active == 2)
                                Отклоненно
                            @else
                                На рассмотрении
                            @endif
                        </td>
                        <td><a href="{{route('showOrder', $value->id)}}">Подробнее</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style='width:90%;display:none;' id='reject'>
            <table border="1px;">
                <tr>
                    <td>Имя</td>
                    <td>Номер телефона</td>
                    <td>Email</td>
                    <td>Адрес</td>
                    <td>Коментарий</td>
                    <td>Статус</td>
                    <td>Действия</td>
                </tr>
                @foreach($rejectOrders as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td>Ул. {{$value->street}} дом {{$value->house}} кв. {{$value->apartment}}</td>
                        <td>{{$value->comment}}</td>
                        <td>
                            @if($value->active == 1) 
                                Одобрено
                            @elseif($value->active == 2)
                                Отклоненно
                            @else
                                На рассмотрении
                            @endif
                        </td>
                        <td><a href="{{route('showOrder', $value->id)}}">Подробнее</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection


