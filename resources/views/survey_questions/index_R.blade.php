@extends('survey_questions.index')

@section('title') aaaaaa @endsection

@section('survey_content')
    @include('partials.notifications')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Question</th>
            <th>Part</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($survey_questions as $survey_questions)
            <tr>
                <td>{{$survey_questions->question_id}}</td>
                <td>{{$survey_questions->question}}</td>
                <td>{{$survey_questions->part}}</td>
                <td>{{$survey_questions->created_at->diffForHumans()}}</td>
                <td>
                    <input type="checkbox">
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection