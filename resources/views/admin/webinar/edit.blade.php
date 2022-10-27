@extends('admin.layouts.main')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Create New WEBINAR</h3>

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

        <form action="{{ url("/adminWebinars/$video->id") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Webinar Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="" placeholder="Enter task Name" value="{{$video->title }}">
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
     

                <div class="form-group">
                    <div class="col col-md-3"><label for="exampleInputEmail1" class=" form-control-label  @error('webinar_image') is-invalid @enderror">Webinar_Image</label></div>
                    <input type="file" id="hf-email" name="webinar_image" class="form-control" value="{{ asset("/storage/".$video->image_path) }}">
                    @error('webinar_image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
           
                <div class="form-group">
                    <label for="Biography">WEBINAR Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 1000 characters" data-val-length-max="1000" id="Biography" maxlength="1000" name="description">{{ $video->descrip }}
                    </textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

              
                    <div class="form-group">
                        <label for="exampleInputEmail1">Webinar Schedule</label>
                        <input type="text" name="schedule" class="form-control @error('schedule') is-invalid @enderror"
                            id="" placeholder="Enter task Name" value="{{ $video->schedule }}">
                        @error('schedule')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Webinar Youtube Link</label>
                        <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                            id="" placeholder="Enter task Name" value="{{ $video->link}}">
                        @error('link')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Webinar Status</label>
                        <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"
                            id="" placeholder="Enter task Name" value="{{ $video->status}}">
                        @error('status')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div> --}}


          
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create </button>
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