@extends('layouts.app')

@section('title') Survey  All Results @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Survey All Results</div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Student id</th>
                            <th>Skor R</th>
                            <th>Skor I</th>
                            <th>Skor A</th>
                            <th>Skor S</th>
                            <th>Skor E</th>
                            <th>Skor C</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->answers()->where('answer',1)->whereBetween('question_id',[1,10])->get()->count()}}</td>
                                <td>{{$student->answers()->where('answer',1)->whereBetween('question_id',[11,20])->get()->count()}}</td>
                                <td>{{$student->answers()->where('answer',1)->whereBetween('question_id',[21,30])->get()->count()}}</td>
                                <td>{{$student->answers()->where('answer',1)->whereBetween('question_id',[31,40])->get()->count()}}</td>
                                <td>{{$student->answers()->where('answer',1)->whereBetween('question_id',[41,50])->get()->count()}}</td>
                                <td>{{$student->answers()->where('answer',1)->whereBetween('question_id',[51,60])->get()->count()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
