@extends('layouts.app')

@section('title') Survey Questions @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Survey Questions</div>

                    <div class="panel-body">
                        <a href="{{route('survey_questions.create')}}" class="btn btn-primary pull-right">Create New Question</a>

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
                            @foreach($survey_questions as $survey_question)
                                <tr>
                                    <td>{{$survey_question->question_id}}</td>
                                    <td>{{$survey_question->question}}</td>
                                    <td>{{$survey_question->part}}</td>
                                    <td>{{$survey_question->created_at->diffForHumans()}}</td>
                                    <td>
                                        <input type="checkbox" name="survey_questions[]" value="{{$survey_question->id}}"> <label>{{$survey_question->name}}</label>
                                    </td>
                                    <td>
                                        <a href="{{route('survey_questions.edit', $survey_question->id)}}" class="btn btn-danger btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {!! $survey_questions->render() !!}
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-block">Save and Next Section</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
