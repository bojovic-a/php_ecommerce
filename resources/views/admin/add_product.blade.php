@extends('layouts.admin_template')

@section('content')

<div class="container">
    <form method="POST" action="{{ url('/admin/add_product') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-gorup">
            <label for="product_name">Product Name: </label>
            <input type="text" class="form-control" name="product_name">
        </div><hr>
        <div class="form-gorup">
            <label for="product_description">Product Description: </label>
            <input type="textarea" class="form-control" name="product_description">
        </div><hr>
        <div class="form-gorup">
            <label for="product_price">Product Price: </label>
            <input type="text" name="product_price" class="form-control">
        </div><hr>
        <div class="form-gorup">
            <label for="product_image">Product Image: </label>
            <input type="file" name="product_image" class="form-control">
        </div>  <hr>
        <div class="form-gorup">
            <label for="product_categories">Product Categories: </label>
            <div class="form-group">
                @foreach($categories as $category)
                    <input type="checkbox" name="product_categories[]" class="form-check-input" value="{{ $category->id }}"> {{ $category->naziv }} {{ $category->id }}<br>
                @endforeach
            </div>
        </div><br><br>
        <div class="form-group">
            <input type="submit" value="Add Product">
        </div>
    </form>
</div>
@endsection