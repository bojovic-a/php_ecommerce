@extends('layouts.template')

@section('header')
@endsection

@section('content')
<div class="container p-5">
    <h1>Login to Swan Studio</h1>
    <a href="{{ route('register_form') }}">Don't have an account? Register here.</a>
    @if(isset($message))
    <i>{{ $message }}</i>
    @endif
    <form action="{{ route('login') }}" method="POST" enctype="">        
        @csrf
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" name="password">
        </div>        
        <div class="form-group m-3">            
            <input type="submit" class="btn btn-danger" value="Login">
        </div>
    </form>
</div>
@endsection

@section('footer')
@endsection