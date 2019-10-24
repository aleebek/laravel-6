@extends('layouts.app')

@section('title', $customer->name)

@section('content')
    <h1>Customer Details</h1>
    <div><a href="{{ route('customers.index') }}" class="btn btn-primary mb-3">< Back</a></div>
    <strong>Name</strong>
    <p>{{ $customer->name }}</p>
    <strong>Email</strong>
    <p>{{ $customer->email }}</p>
    <strong>Status</strong>
    <p>{{ $customer->active }}</p>
    <strong>Company</strong>
    <p>{{ $customer->company->name }}</p>
    <strong>Company phone</strong>
    <p>{{ $customer->company->phone }}</p>
    <div class="d-flex">
        <a class="btn btn-primary mr-2" href="{{ route('customers.edit', ['customer' => $customer]) }}">Edit</a>
        <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
