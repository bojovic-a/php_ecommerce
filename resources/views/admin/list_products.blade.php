@extends('layouts.admin_template')

@section('header')
@endsection

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)  
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="{{ url('/admin/change_product/'.$product->id) }}">Update</a></td>
            <td><a href="{{ url('/admin/change_product/'.$product->id) }}">Delete</a></td>
          </tr>          
          @endforeach
        </tbody>
      </table>
</div>
@endsection