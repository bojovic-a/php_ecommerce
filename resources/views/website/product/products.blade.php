@extends('layouts.template')


@section('header')
@endsection

@section('content')
<div class="container">
    <h1>Swan Shop</h1>
    <div class="category-cards d-flex justify-content-lg-start flex-row">        
        @foreach($products as $product)    
            <div class="card m-2" style="width: 18rem;">
                <img src="{{asset('/images/products/').'/'.$product[0]->image_url }}" class="card-img-top" alt="SLIKA">
                <div class="card-body">                
                <h5 class="card-title">{{ $product[0]->title }}</h5> 
                <h5 class="card-title">{{ $product[0]->price }} $</h5>                        
                <a href="{{ route('get_product', $product[0]->id) }}" class="btn btn-primary">Details</a>                
                </div>
            </div>    
        @endforeach        
    </div>
</div>
@endsection

@section('footer')
@endsection

