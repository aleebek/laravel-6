@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Edit Customer</h1>

            <form action="{{ route('customers.update', ['customer' => $customer]) }}" method="post">
                @method('patch')

                @include('customer.form')

                <button class="btn btn-primary">Save</button>

            </form>

        </div>
    </div>

@endsection
