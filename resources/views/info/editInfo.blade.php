@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="width:80%;">Изменяется {{$data->place}}</div>
        <form method="POST" action="{{route('editText')}}">
            {{ csrf_field() }}
            <br><label>Заголовок</label>
            <textarea style="width:800px; height: 50px;" name="title">{{$data->title}}</textarea><br>
            <label>Текст</label>
            <textarea style="width:800px; height: 50px;" name="text">{{$data->description}}</textarea><br>
            <input type="hidden" value="{{$data->id}}" name="id">
            <input type="submit" value="Изменить">
        </form>
            
    </div>
</div>
@endsection


