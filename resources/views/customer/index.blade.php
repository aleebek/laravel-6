@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h1>Customers</h1>
    <a class="btn btn-primary" href="{{ route('customers.create') }}">Add New Customer</a>
    <table class="table my-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Company</th>
            <th scope="col">Status</th>

        </tr>
        </thead>
        <tbody>
        @forelse($customers as $customer)
        <tr>
            <th scope="row">{{ $customer->id }}</th>
            <td><a href="{{ route('customers.show', ['customer' => $customer]) }}">{{$customer->name}}</a></td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->company->name}}</td>
            <td>{{$customer->active}}</td>
        </tr>
        @empty
            <p class="list-group-item">No inactive customer to show</p>
        @endforelse

        </tbody>
    </table>


@endsection
