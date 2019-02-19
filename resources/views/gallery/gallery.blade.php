@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('createFotoGalleryPage')}}">Создать изобржение галерии</a>
        <table border="1px" style="width:90%;">
            <tr>
                <td>Картинка</td>
                <td>Тип</td>
                <td>Действие</td>
            </tr>
            @foreach($pictiries as $value)
                <tr>
                    <td><img src="/storage/{{$value->foto}}" style="width:84px;height: 80px;"></td>
                    <td>{{$value->section}}</td>
                    <td>
                        <a href="{{route('editGalleryPage', $value->id)}}">Изменить</a><br>
                        <a href="{{route('deleteGallery', $value->id)}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$pictiries->links()}}
    </div>
</div>
@endsection



