@extends('layouts.app')

@section('title') Anket Soruları @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Anket Soruları</div>

                    <div class="panel-body">

                        @include('partials.notifications')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Part</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($survey_questions as $survey_questions)
                                <tr>
                                    <td>{{$survey_questions->question_id}}</td>
                                    <td>{{$survey_questions->question}}</td>
                                    <td>{{$survey_questions->part}}</td>
                                    <td>{{$survey_questions->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection