@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{route('activeUsers')}}">
                {{ csrf_field() }}
                <table border="1" style="width:80%;">
                    <tr>
                        <td>Имя</td>
                        <td>email</td>
                        <td>Права</td>
                    </tr>
                    @foreach($users as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>
                                @if($value->accessRights != 'all')
                                    <label>Админ новостей</label>
                                    @if($value->accessRights == "news")
                                        <input type="checkbox" name="access[]" checked value="news|{{$value->id}}">
                                    @else 
                                        <input type="checkbox" name="access[]" value="news|{{$value->id}}">
                                    @endif
                                    <label>Админ отелей</label>
                                    @if($value->accessRights == "hotel")
                                        <input type="checkbox" name="access[]" checked value="hotel|{{$value->id}}">
                                    @else 
                                        <input type="checkbox" name="access[]" value="hotel|{{$value->id}}">
                                    @endif
                                    <label>Админ рестаранов</label>
                                    @if($value->accessRights == "rest")
                                        <input type="checkbox" name="access[]" checked value="rest|{{$value->id}}">
                                    @else 
                                        <input type="checkbox" name="access[]" value="rest|{{$value->id}}">
                                    @endif
                                    <br><label>Доставка</label>
                                    @if($value->accessRights == "del")
                                        <input type="checkbox" name="access[]" checked value="del|{{$value->id}}">
                                    @else 
                                        <input type="checkbox" name="access[]" value="del|{{$value->id}}">
                                    @endif
                                @else
                                    Все права
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table><br>
                <input type="submit" value="Изменить"><br>
                <a href="{{route('admin')}}">В админку</a>
            </form>
        </div>
    </div>
</div>
@endsection
