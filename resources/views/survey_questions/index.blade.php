@extends('layouts.app')

@section('title') Survey Questions @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">SURVEY</div>

                    <div class="panel-body">
                        <form method="get" action="{{url('survey_questions/survey')}}">
                        {{csrf_field()}}
                            <div class="panel-body-xl">
                                <a href="{{url('survey_questions.survey')}}" class="btn btn-primary">Anketi Uygula</a><br><br>
                            </div>
                            <div class="panel-body-xl">
                                <a href="{{url('survey_answers.showOne')}}" class="btn btn-primary">Kullanıcı Sonucunu Gör</a><br><br>
                            </div>
                            <div class="panel-body-xl">
                                <a href="{{url('survey_answers.showAll')}}" class="btn btn-primary">Toplu Sonuçları Gör</a><br><br>
                            </div>
                            <div class="panel-body-xl">
                                <a href="{{url('survey_answers.showAnswerTable')}}" class="btn btn-primary">Cevaplar Tablosu</a><br>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
