@extends('layouts.template')

@section('header')
@endsection

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="container py-4 my-4 mx-auto d-flex flex-column">
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">
                <h1>{{ $product->title }}</h1>
            </div>
            <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>            
        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row r3 d-flex flex-row-reverse">
            <div class="col-md-5 p-0 klo m-5 p-5">
                <p>Description</p>
                <p>{{ $product->description }}</p>
                <div class="row d-flex flex-column justify-content-center">
                    <h3 class="text-center ">{{ $product->price }} $</h3>
                    <a class="btn btn-danger" href="{{ route('add_to_cart', $product->id ) }}">Add to cart</a>
                </div>
            </div>
            <div class="col-md-6"> <img src="{{asset('/images/products/').'/'.$product->image_url }}" width="90%" height="95%"> </div>
        </div>
    </div>
    
</div>
@endsection

@section('footer')
@endsection