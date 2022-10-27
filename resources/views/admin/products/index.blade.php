@extends('admin.layouts.main')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>
      
            <a href="{{ url('/products/create') }}" class="btn btn-info float-right">Create New Products</a>
         
        </div>  
    </div>

    <div class="container"> 
        <div class="row">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-4">
                    @foreach ($products as $product)
                    <div class="col">
                        {{-- @foreach ($products as $product) --}}
                        <div class="card">
                            <img src="{{asset("/storage/".$product->image_path)}}" class="card-img-top p-3" alt="Logitech K380 Bluetooth Multi-Device Keyboard">
                            <div class="card-body">
                                <p class="card-text">{{ $product->name }} <br /> {{ $product->price }} Dev Coins</p>
                            <div>
                                <a href="{{url("/products/$product->id/edit")}}" class="btn btn-success" >Edit</a>
                                <form action="{{url("/products/$product->id")}}" method="post" onsubmit="return confirm('Do you really want to delete the category?');">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                            </div>
                        </div>    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </div>   
@endsection