@extends('layouts.app')
@section('title') Yeni Müşteri Ekle @endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Yeni Müşteri Ekle </div>

                    <div class="panel-body">
                        @include('partials.notification')
                        <form class="form-horizontal" action="{{route('customer.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="company">Company:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="company" placeholder="Enter company" name="company">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Add</button>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="{{route('customer.index')}}" class="btn btn-default">Show Customer List</a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection