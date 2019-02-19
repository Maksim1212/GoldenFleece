@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table border="1px;" style='width:70%;'>
            <tr>
                <td>Блюдо</td>
                <td>Количество</td>
                <td>Цена</td>
            </tr>
            @for($i=0;$i<count($names)-1;$i++)
                <tr>
                    <td>{{$names[$i]}}</td>
                    <td>{{$counts[$i]}}</td>
                    <td>{{$costs[$i]}}</td>
                </tr>
            @endfor
            <tr>
                <td></td>
                <td></td>
                <td>Всего:{{$totalPrice}}</td>
            </tr>
        </table>
        <a href='{{route('activeOrder',$id)}}'>Одобрить</a>
        <a href='{{route('rejectOrder',$id)}}' style='margin-left: 10px;'>Откланить</a>
    </div>
</div>
@endsection



