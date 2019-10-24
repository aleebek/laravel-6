@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Add New Customer</h1>

            <form action="{{ route('customers.store', ['customer' => $customer]) }}" method="post">

                @include('customer.form')



                <button class="btn btn-primary">Add</button>

            </form>
        </div>
    </div>


@endsection
