@extends('layouts.app')

@section('title') Survey One Result @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Survey One Result</div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Skor R</th>
                            <th>Skor I</th>
                            <th>Skor A</th>
                            <th>Skor S</th>
                            <th>Skor E</th>
                            <th>Skor C</th>
                            <th>Toplam Skor</th>
                        </tr>
                        </thead>
                        <tbody>
                            <td>{{$R}}</td>
                            <td>{{$I}}</td>
                            <td>{{$A}}</td>
                            <td>{{$S}}</td>
                            <td>{{$E}}</td>
                            <td>{{$C}}</td>
                            <td>{{$sum}}</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
