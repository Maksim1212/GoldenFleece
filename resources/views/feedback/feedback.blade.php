@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href='#' onclick='showAndHideDivs("waited","approved");'>Ожидают проверки</a><a href='#' onclick='showAndHideDivs("approved","waited");' style='margin-left:10px;'>Одобренные</a>
        <div id='waited' style='width:90%;'>
            <table border='1px;' style='width:90%;'>
                <tr>
                    <td>Имя</td>
                    <td>Заголовок</td>
                    <td>Текст</td>
                    <td>Фото</td>
                    <td>Оценка цен</td>
                    <td>Оценка интерьера</td>
                    <td>Оценка сервиса</td>
                    <td>Дата</td>
                    <td>Действия</td>
                </tr>
                @foreach($feedbacks as $value)
                    <tr>
                        <td>{{$value->feedback_name}}</td>
                        <td>{{$value->feedback_title}}</td>
                        <td>{{$value->feedback_text}}</td>
                        <td><img src='/storage/{{$value->feedback_attach}}' style='width:84px; height:80px;'></td>
                        <td>{{$value->feedback_prices}}</td>
                        <td>{{$value->feedback_interier}}</td>
                        <td>{{$value->feedback_service}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>
                            <a href='{{route('editFeedbackPage', $value->id)}}'>Редактировать</a><br>
                            <a href='{{route('activeFeedback', $value->id)}}'>Активировать</a><br>
                            <a href='{{route('deleteFeedback', $value->id)}}'>Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$feedbacks->links()}}
        </div>
        <div id='approved' style='width:90%;display:none;'>
            <table border='1px;' style='width:90%;'>
                <tr>
                    <td>Имя</td>
                    <td>Заголовок</td>
                    <td>Текст</td>
                    <td>Фото</td>
                    <td>Оценка цен</td>
                    <td>Оценка интерьера</td>
                    <td>Оценка сервиса</td>
                    <td>Дата</td>
                    <td>Действия</td>
                </tr>
                @foreach($feedbacksApproved as $value)
                    <tr>
                        <td>{{$value->feedback_name}}</td>
                        <td>{{$value->feedback_title}}</td>
                        <td>{{$value->feedback_text}}</td>
                        <td><img src='/storage/{{$value->feedback_attach}}' style='width:84px; height:80px;'></td>
                        <td>{{$value->feedback_prices}}</td>
                        <td>{{$value->feedback_interier}}</td>
                        <td>{{$value->feedback_service}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>
                            <a href='{{route('editFeedbackPage', $value->id)}}'>Редактировать</a><br>
                            <a href='{{route('deleteFeedback', $value->id)}}'>Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$feedbacksApproved->links()}}
        </div>
    </div>
</div>
@endsection


