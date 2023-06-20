@extends('layouts.template')

@section('header')
@endsection

@section('content')
<div class="container">
    <h1>Swan Shop</h1>
    <div class="category-cards d-flex justify-content-lg-start flex-row">
        @foreach($categories as $category)    
            <div class="card m-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="SLIKA">
                <div class="card-body">
                <h5 class="card-title">{{ $category->naziv }}</h5>        
                @if($category->product_subcategories())
                    <a href="{{ url('product_subcategories', $category->id) }}" class="btn btn-primary">See subcategories</a>
                @endif
                <a href="{{ url('category', $category->id) }}" class="btn btn-primary">See products</a>                
                </div>
            </div>    
        @endforeach        
    </div>
</div>
@endsection

@section('footer')
@endsection