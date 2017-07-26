@extends('layouts.app')

@section('title') Edit Survey Question @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Survey Question</div>

                    <div class="panel-body">

                        @include ('partials.notifications')
                        <form class="form-horizontal" action="{{route('survey_questions.update', $survey_questions->id)}}" method="post">

                            <input type="hidden" name="_method" value="PUT">

                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="question_id">Question Id:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="question_id" placeholder="Enter question Id" name="question_id" value="{{$survey_questions->question_id}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="question">Question:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="question" placeholder="Enter question" name="question" value="{{$survey_questions->question}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="question">Part:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="part" placeholder="Enter part" name="part" value="{{$survey_questions->part}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection