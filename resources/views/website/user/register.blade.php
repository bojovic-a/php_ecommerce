@extends('layouts.template')

@section('header')
@endsection

@section('content')
<div class="container p-5">
    <h1>Register to Swan Studio</h1>    
    <a href="{{ route('login_form') }}">Already have an account? Login here.</a>
    @if ($context == 'register')
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">    
    @else
    <form action="{{ route('update_profile_post') }}" method="POST" enctype="multipart/form-data">    
    @endif
        @csrf
        <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" class="form-control" name="username" value="{{ $user->username }}">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>        
        <div class="form-group">
            <label for="image">Image: </label>            
            <input type="file" class="form-control" name="image">
            <span>Current Image: </span>
            <img src="{{ asset('/images/users'.'/'.$user->image_url) }}" style="width: 100px; height: 100px;" class="object-fit-cover m-3">
        </div>
        <div class="form-group m-3">            
            <input type="submit" class="btn btn-danger" value="Register">
        </div>
    </form>
</div>
@endsection

@section('footer')
@endsection