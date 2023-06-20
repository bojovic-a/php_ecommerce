@extends('layouts.template')


@section('header')
@endsection

@section('main')
<div class="container">
    <h1>Swan Shop</h1>
    <div class="category-cards d-flex justify-content-lg-start flex-row">
        {{ var_dump($products) }}
        @foreach($products as $product)    
            <div class="card m-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="SLIKA">
                <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5> 
                <h5 class="card-title">{{ $product->price }}</h5>                        
                <a href="{{ url('product', $product->id) }}" class="btn btn-primary">Details</a>                
                </div>
            </div>    
        @endforeach        
    </div>
</div>
@endsection

@section('footer')
@endsection

