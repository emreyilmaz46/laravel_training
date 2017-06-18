@extends('layouts.app')

@section('title') All Customers @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Customers</div>

                    <div class="panel-body">

                        <a href="{{route('customer.create')}}" class="btn btn-primary pull-right">Create New Customer</a>

                        @include('partials.notifications')

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->id}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->company}}</td>
                                    <td>{{$customer->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{url('customer/delete/'.$customer->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                        <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $customers->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection