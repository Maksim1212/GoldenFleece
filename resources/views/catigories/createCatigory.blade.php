@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createCategory')}}">
            <label>Название</label>
            <input type="text" name="name"><br>
            <label>Родительская категория</label>
            <select name="parrents">
                <option value="Корень категорий">В корень категорий</option>
                @foreach($catigories as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection




