@extends('layouts.app')
@section('title') Müşteri Listesi @endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Müşteri Listesi</div>

                    <div class="panel-body">
                        @include('partials.notification')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Registry Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->user_id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->company}}</td>
                                <td>{{$customer->created_at->diffForHumans()}}</td>
                                <td><a href="{{url('/customer/destroy/'. $customer->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                                <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-info btn-sm">EDIT</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $customers->render() !!}
                        <a href="{{route('customer.create')}}" class="btn btn-primary pull-right">Create New Customer</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection