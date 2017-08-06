@extends('layouts.app')

@section('title') Survey Questions @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 center-block">
                <div class="panel panel-default" style="width: 150%">
                    <div class="panel-heading">Survey Questions</div>

                    <div class="panel-body-xl">
                        <a href="{{route('survey_questions.create')}}" class="btn btn-primary pull-right">Create New Question</a>
                        @include('partials.notifications')
                        <form method="post" action="{{url('survey/answer')}}">
                            {{csrf_field()}}
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Question</th>
                                    <th>Type</th>
                                    <th>Part</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($survey_questions as $survey_question)
                                    <tr>
                                        <td>{{$survey_question->id}}</td>
                                        <td>{{$survey_question->question}}</td>
                                        <td>{{$survey_question->type}}</td>
                                        <td>{{$survey_question->part}}</td>
                                        <td>{{$survey_question->created_at->diffForHumans()}}</td>
                                        <td>
                                            <label class="radio-inline"><input type="radio" value="1" name="{{$survey_question->id}}">Yes</label>
                                            <label class="radio-inline"><input type="radio" value="2" name="{{$survey_question->id}}">Nötr</label>
                                            <label class="radio-inline"><input type="radio" value="0" name="{{$survey_question->id}}">No</label>
                                        </td>
                                        <td>
                                            <a href="{{route('survey_questions.edit', $survey_question->id)}}" class="btn btn-danger btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-block">Save and Next Section</button>
                                </div>
                            </div>
                        </form>
                        {{--{!! $survey_questions->render() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
