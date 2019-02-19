@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="width:90%;">
            <a href="#" style="margin-left: 10px;" onclick="showAndHideThreeDivs('all', 'active', 'reject')">На рассмотрение</a>
            <a href="#" style="margin-left: 10px;" onclick="showAndHideThreeDivs('active', 'all', 'reject')">Одобреные</a>
            <a href="#" style="margin-left: 10px;" onclick="showAndHideThreeDivs('reject', 'all', 'active')">Отклонненые</a>
        </div><br>
        <div id="all" style="width:90%;">
            <table border="1px;" style="width:90%;">
                <tr>
                    <td>Имя</td>
                    <td>Номер телефона</td>
                    <td>Email</td>
                    <td>Действия</td>
                </tr>
                @foreach($tables as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td>
                            <a href="{{route('activeTable', $value->id)}}">Одобрить</a><br>
                            <a href="{{route('rejectTable', $value->id)}}">Отклонить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div id="active" style="width:90%;display:none;">
            <table border="1px;" style="width:90%;">
                <tr>
                    <td>Имя</td>
                    <td>Номер телефона</td>
                    <td>Email</td>
                    <td>Действия</td>
                </tr>
                @foreach($tablesActive as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td>
                            <a href="{{route('rejectTable', $value->id)}}">Отклонить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div id="reject" style="width:90%;display:none;">
            <table border="1px;" style="width:90%;">
                <tr>
                    <td>Имя</td>
                    <td>Номер телефона</td>
                    <td>Email</td>
                    <td>Действия</td>
                </tr>
                @foreach($tablesReject as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td>
                            <a href="{{route('activeTable', $value->id)}}">Одобрить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection



