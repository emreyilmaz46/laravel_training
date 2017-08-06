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
                            <th>Id</th>
                            <th>stu_id</th>
                            <td>{{$stu}}</td>
                            <p>{{ $stu }}</p>
                        </tr>
                        </thead>
                        <tbody>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
