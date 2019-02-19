@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('createSlidesPage')}}" style="width:20%;">Создать слайд</a>
        <table border="1px;" style="width:90%;">
            <tr>
                <td>Слайдер на котором слайд отображается</td>
                <td>Заголовок</td>
                <td>Текст</td>
                <td>Текст на кнопке</td>
                <td>URL куда кнопка ведет</td>
                <td>Картинка</td>
                <td>Действия</td>
            </tr>
            @foreach($slides as $value)
                <tr>
                    <td>Слайдер {{$value->slider}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->body}}</td>
                    <td>{{$value->textButton}}</td>
                    <td>{{$value->url}}</td>
                    <td><img src="/storage/{{$value->foto}}" style="width:84px;height: 80px;"></td>
                    <td>
                        <a href="{{route('editSlidePage',$value->id)}}">Изменить</a><br>
                        <a href="{{route('deleteSlide',$value->id)}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$slides->links()}}
    </div>
</div>
@endsection



