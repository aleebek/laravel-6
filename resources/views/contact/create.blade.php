@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Contact US</h1>

            <form action="contact" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autocomplete="off" value="{{ old('name') }}">

                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autocomplete="off" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="10" autocomplete="off">{{ old('message') }}</textarea>
                    @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

@endsection
