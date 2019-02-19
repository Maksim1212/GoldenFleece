@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('editCategory')}}">
            <label>Название</label>
            <input type="text" name="name" value="{{$catigory->name}}"><br>
            <label>Родительская категория</label>
            <select name="parrents">
                <option value="Корень категорий">В корень категорий</option>
                @foreach($catigories as $value)
                    @if($value->id == $catigory->parrents)
                        <option value="{{$value->id}}" selected="">{{$value->name}}</option>
                    @elseif($catigory->name != $value->name) 
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endif
                @endforeach
            </select><br>
            <input type="hidden" name="id" value="{{$catigory->id}}">
            <input type="hidden" name="oldName" value="{{$catigory->name}}">
            <input type="submit" value="Изменить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection




