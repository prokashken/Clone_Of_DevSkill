@extends('user.layouts.app')
@section('content')
    <!-- Main content -->
<div class="content">
    <!--courses list content-->
    <div>
        <div class="p-5 page-cover page-cover-shop-page mb-md-4 mb-2 rounded my-3">
            <div class="col-md-12 text-center">
                <h1>DEV SKILL SHOP</h1>
                <p class="font-weight-light">
                    Quality Products with Dev Coins
                </p>
            </div>
        </div>

        <div class="container">
            <!--productslist-->
            <div class="row">
                <div class="col">
                    <div class="row row-cols-1 row-cols-md-4">
                        @foreach ($products as $product)
                        <div class="col">
                            {{-- @foreach ($products as $product) --}}
                            <div class="card">
                                <img src="{{asset("/storage/".$product->image_path)}}" class="card-img-top p-3" alt="Logitech K380 Bluetooth Multi-Device Keyboard">
                                <div class="card-body">
                                    <p class="card-text"><a class="stretched-link text-bold text-body" href="/product_details/{{$product->id}}">{{ $product->name }}</a> <br /> {{ $product->price }} Dev Coins</p>
                                </div>
                            </div>    
                        </div>
                        @endforeach
                         
                    </div>
                </div>
            </div>
            <!--/productslist-->
        </div>
    </div>
    <!--/courses list content-->
</div>
<!-- /.content -->

@endsection
  