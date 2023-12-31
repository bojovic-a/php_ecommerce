@extends('layouts.template')

@section('header')
@endsection

@section('content')
<div class="container">
    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            </div>
          </div>
      
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="{{ asset('/images/users/'.$user->image_url) }}" alt="avatar"
                    class="rounded-circle img-fluid object-fit-cover" style="width: 150px; height: 150px;">
                  <h5 class="my-3">{{ $user->username }}</h5>                  
                  <div class="d-flex justify-content-center mb-2">
                    <a type="button" href="{{ route('update_profile') }}" class="btn btn-primary">Change Personal Info</a>
                    
                  </div>
                </div>
              </div>              
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Username: </p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->username }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email: </p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->email }}</p>
                    </div>
                  </div>
                  <hr>                                    
                </div>
              
                                  
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection

@section('footer')
@endsection