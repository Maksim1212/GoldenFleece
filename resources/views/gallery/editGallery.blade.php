@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('editGallery')}}">
            <label>Раздел</label>
            <select name="section">
                @if($picture->section == "Еда")
                    <option value="Еда" selected="">Еда</option>
                    <option value="Мероприятия">Мероприятия</option>
                    <option value="Интерьер">Интерьер</option>
                @elseif($picture->section == "Мероприятия")
                    <option value="Еда">Еда</option>
                    <option value="Мероприятия" selected="">Мероприятия</option>
                    <option value="Интерьер">Интерьер</option>
                @else
                    <option value="Еда">Еда</option>
                    <option value="Мероприятия">Мероприятия</option>
                    <option value="Интерьер" selected="">Интерьер</option>
                @endif
            </select><br>
            <label>Фото</label><br>
            <input type="file" name="img"><br>
            <img src="/storage/{{$picture->foto}}" style="width:84px;height: 80px;"><br>
            <input type="hidden" name="id" value="{{$picture->id}}">
            <input type="submit" value="Изменить">
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection





