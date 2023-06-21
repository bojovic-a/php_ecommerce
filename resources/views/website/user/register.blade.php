@extends('layouts.template')

@section('header')
@endsection

@section('content')
<div class="container p-5">
    <h1>Register to Swan Studio</h1>
    <a href="{{ route('login_form') }}">Already have an account? Login here.</a>
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password: </label>
            <input type="password" class="form-control" name="confirm_password">
        </div>
        <div class="form-group">
            <label for="image">Image: </label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group m-3">            
            <input type="submit" class="btn btn-danger" value="Register">
        </div>
    </form>
</div>
@endsection

@section('footer')
@endsection