@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('createCatigoryPage')}}" style="width:20%;">Создать категорию</a>
        <table border="1px;" style="width:90%;">
            <tr>
                <td>Название</td>
                <td>Категория Родитель</td>
                <td>Действия</td>
            </tr>
            @foreach($catigories as $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>
                        @foreach($catigories as $value2)
                            @if($value->parrents == $value2->id)
                                {{$value2->name}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('editCatigoryPage', $value->id)}}">Изменить</a><br>
                        <a href="{{route('deleteCatigory', $value->id)}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection



