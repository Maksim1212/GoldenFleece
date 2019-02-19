@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('createNewsPage')}}">Создать новую новость</a>
        <table border="1px;" style="width:90%;">
            <tr>
                <td>Заголовок</td>
                <td>Предпросмотр</td>
                <td>Картинка</td>
                <td>Действие</td>
            </tr>
            @foreach($news as $value)
                <tr>
                    <td>{{$value->title}}</td>
                    <td>{{$value->preview}}</td>
                    <td><img src="/storage/{{$value->foto}}" style="width:84px;height: 80px;"></td>
                    <td>
                        <a href="{{route('editNewsPage', $value->id)}}">Изменить</a><br>
                        <a href="{{route('deletePage', $value->id)}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$news->links()}}
    </div>
</div>
@endsection


