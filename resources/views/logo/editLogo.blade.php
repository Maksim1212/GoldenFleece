@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <form method="POST" enctype="multipart/form-data" action="{{route('editLogo')}}">
            <label>Расположение</label>
            <select name="place">
                @if($logo->place == "Нижнее меню") 
                    <option value="Верхнее меню">Верхнее меню</option>
                    <option value="Нижнее меню" selected="">Нижнее меню</option>
                @else 
                    <option value="Верхнее меню" selected="">Верхнее меню</option>
                    <option value="Нижнее меню">Нижнее меню</option>
                @endif
            </select><br>
            <label>Лого </label><br>
            <input type="file" name="img"><br><br>
            <img style="width:84px;height: 80px;" src="/storage/{{$logo->logo}}"><br><br>
            <label>Активировать</label>
            @if($logo->status == 1)
                <input type="checkbox" name="status" value="1" checked=""><br>
            @else 
                <input type="checkbox" name="status" value="1"><br>
            @endif
            <input type="submit" value="Добавить">
            <input type="hidden" name="id" value="{{$logo->id}}">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection



