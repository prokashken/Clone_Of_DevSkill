@include('user.layouts.temporary_header')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            


<!--breadcrumb-->
<div class="border-bottom border-light d-none d-sm-block">
    <div class="px-3 px-lg-5">
        <nav class="breadcrumb bg-white mb-0">
            <h4 class="breadcrumb-item">Create New Webinar</h4>
            {{-- <span class="breadcrumb-item active">Edit</span> --}}
        </nav>
    </div>
</div>

<div class="card-body">
  
          <form action="{{ url("/InsWebinars") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Webinar Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="" placeholder="Enter task Name" value="{{ old("title") }}">
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
     

                <div class="form-group">
                    <div class="col col-md-3"><label for="exampleInputEmail1" class=" form-control-label  @error('webinar_image') is-invalid @enderror">Webinar_Image</label></div>
                    <input type="file" id="hf-email" name="webinar_image" class="form-control" value="{{ old("webinar_image") }}">
                    @error('webinar_image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                  </div>
           
                <div class="form-group">
                    <label for="Biography">WEBINAR Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 1000 characters" data-val-length-max="1000" id="Biography" maxlength="1000" name="description">
                    </textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    @error('description')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

              
                    <div class="form-group">
                        <label for="exampleInputEmail1">Webinar Schedule</label>
                        <input type="text" name="schedule" class="form-control @error('schedule') is-invalid @enderror"
                            id="" placeholder="Enter task Name" value="{{ old("schedule") }}">
                        @error('schedule')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Webinar Youtube Link</label>
                        <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                            id="" placeholder="Enter task Name" value="{{ old("link") }}">
                        @error('link')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

          
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>