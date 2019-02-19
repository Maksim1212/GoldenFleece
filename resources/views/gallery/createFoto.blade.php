@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('createFotoGalery')}}">
            <label>Раздел</label>
            <select name="section">
                <option value="Еда">Еда</option>
                <option value="Мероприятия">Мероприятия</option>
                <option value="Интерьер">Интерьер</option>
            </select><br>
            <label>Фото</label><br>
            <input type="file" name="img"><br>
            <input type="submit" value="Добавить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection




