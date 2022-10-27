@include('user.layouts.temporary_header')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            


<!--breadcrumb-->
<div class="border-bottom border-light d-none d-sm-block">
    <div class="px-3 px-lg-5">
        <nav class="breadcrumb bg-white mb-0">
            <h4 class="breadcrumb-item">Create New Course</h4>
            {{-- <span class="breadcrumb-item active">Edit</span> --}}
        </nav>
    </div>
</div>

<div class="card-body">
  
        <form action="{{ url("/InsBlogs") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="" placeholder="Enter task Name" value="{{ old("title") }}">
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
           
                <div class="form-group">
                    <label for="Biography">Blog Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 100000 characters" data-val-length-max="100000" id="Biography" maxlength="100000" name="description">
                    </textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    @error('description')
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