@extends('layouts.app')

@section('title') Survey Answer Table @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Survey Answer Table</div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question id</th>
                            <th>Student id</th>
                            <th>Answer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($survey_answers as $survey_answer)
                            <tr>
                                <td>{{$survey_answer->id}}</td>
                                <td>{{$survey_answer->question_id}}</td>
                                <td>{{$survey_answer->student_id}}</td>
                                <td>{{$survey_answer->answer}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
