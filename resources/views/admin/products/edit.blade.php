@extends('admin.layouts.main')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Create New Products</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">

        <form action="{{ url("/products/$product->id") }}" method="post" enctype="multipart/form-data">
         
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="" placeholder="Enter task Name" value="{{$product->name }}">
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
     

                <div class="form-group">
                    <div class="card" style="width:200px; height:200px;">
                    <img src="{{asset("/storage/".$product->image_path)}}" class="card-img-top p-3" alt="Logitech K380 Bluetooth Multi-Device Keyboard">
                    </div>
                    <div class="col col-md-3"><label for="exampleInputEmail1" class=" form-control-label  @error('product_image') is-invalid @enderror">Change Product_Image</label></div>
                    <input type="file" id="hf-email" name="product_image" class="form-control" value="{{$product->image_path}}">
                    @error('product_image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
           
                <div class="form-group">
                    <label for="Biography">Product Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 1000 characters" data-val-length-max="1000" id="Biography" maxlength="1000" name="description" value="{{$product->description}}">
                    </textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Biography">Product Specification</label>
                    <textarea class="form-control  @error('specification') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 1000 characters" data-val-length-max="1000" id="Biography" maxlength="1000" name="specification" value="{{$product->specifications}}">
                    </textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    @error('specification')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                        id="" placeholder="Enter task description" value="{{$product->price}}">
                    @error('price')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
         

          
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update </button>
            </div>
        </form>
        
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        {{-- Footer --}}
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  @push('scripts')
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  @endpush
@endsection