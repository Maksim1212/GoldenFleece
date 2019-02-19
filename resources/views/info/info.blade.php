@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {!!$link1!!}{!!$link2!!}
        <div id="info">
            <table border="1px">
                <tr>
                    <td>Заголовок</td>
                    <td>Текст</td>
                    <td>Описание</td>
                    <td>Действия</td>
                </tr>
                @foreach($info as $value)
                    <tr>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->place}}</td>
                        <td><a href="{{route('editTextPage',$value->id)}}">Изменить</a></td>
                    </tr>
                @endforeach
            </table>
            {{$info->links()}}
        </div>
        <div id="logo" style="display:none;">
            <br>
            <a href="{{route('pageCreateLogo')}}">Загрузить лого</a>
            <table border="1px">
                <tr>
                    <td>Расположение</td>
                    <td>Лого</td>
                    <td>Статус</td>
                    <td>Действия</td>
                </tr>
                @foreach($logos as $value)
                    <tr>
                        <td>{{$value->place}}</td>
                        <td><img src="/storage/{{$value->logo}}" style="width:84px;height: 80px;"></td>
                        <td>@if($value->status == 1)Активировано @else Не активировано @endif</td>
                        <td>
                            <a href="{{route('editLogoPage',$value->id)}}">Изменить</a><br>
                            <a href="{{route('deleteLogo',$value->id)}}">Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$logos->links()}}
        </div>
    </div>
</div>
@endsection

