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

    <form action="{{ url("/admincourses") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    id="" placeholder="Enter task Name" value="{{ old("title") }}">
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Prerequisite</label>
              <input type="text" name="prerequisite" class="form-control @error('prerequisite') is-invalid @enderror"
                  id="" placeholder="prerequisite" value="{{ old("prerequisite") }}">
              @error('prerequisite')
              <small style="color: red">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Batch</label>
            <input type="text" name="batch" class="form-control @error('batch') is-invalid @enderror"
                id="" placeholder="Enter Batch like B1,B2..." value="{{ old("batch") }}">
            @error('batch')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

            <div class="form-group">
                <div class="col col-md-3"><label for="exampleInputEmail1" class=" form-control-label  @error('banner_image') is-invalid @enderror">Banner_Image</label></div>
                <input type="file" id="hf-email" name="banner_image" class="form-control" value="{{ old("banner_image") }}">
                @error('banner_image')
                <small style="color: red">{{ $message }}</small>
                @enderror
              </div>
            <div class="form-group">
              <div class="col col-md-3"><label for="exampleInputEmail1" class=" form-control-label @error('dbanner_image') is-invalid @enderror">Course_Details_Banner_Image</label></div>
              <input type="file" id="hf-email" name="dbanner_image" class="form-control" value="{{ old("dbanner_image") }}">
              @error('dbanner_image')
              <small style="color: red">{{ $message }}</small>
              @enderror
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">  
                <label for="hf-email" class=" form-control-label">Course For</label></div>
                <div class="col-12 col-md-9">
               <select name="course_for" id=""class=" @error('course_for') is-invalid @enderror">
                <option value="">--Please Select--</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
               </select>
               @error('course_for')
               <small style="color: red">{{ $message }}</small>
               @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">  
                <label for="hf-email" class=" form-control-label">Course Status</label></div>
                <div class="col-12 col-md-9">
               <select name="course_status" id=""class=" @error('course_status') is-invalid @enderror">
                <option value="">--Please Select--</option>
                <option value="Not Started">Not Started</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Completed">Completed</option>
                {{-- @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{ $item->name }}</option>
                @endforeach --}}
               </select>
               @error('course_status')
               <small style="color: red">{{ $message }}</small>
               @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="Biography">Summary</label>
                <textarea class="form-control  @error('summary') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 1000 characters" data-val-length-max="1000" id="Biography" maxlength="1000" name="summary">
                </textarea>
                <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                @error('summary')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Course Fee</label>
                <input type="text" name="fee" class="form-control @error('fee') is-invalid @enderror"
                    id="" placeholder="Enter task description" value="{{ old("fee") }}">
                @error('fee')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Discount</label>
              <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror"
                  id="" placeholder="Enter task description" value="{{ old("discount") }}">
              @error('discount')
              <small style="color: red">{{ $message }}</small>
              @enderror
          </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Schedule </label>
                <input type="text" name="schedule" class="form-control @error('schedule') is-invalid @enderror"
                    id="" placeholder="Enter task description" value="{{ old("schedule") }}">
                @error('schedule')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Starting Date</label>
                <input type="date" name="strt_date" class="form-control @error('strt_date') is-invalid @enderror"
                    id="" placeholder="Enter Starting date of the course" value="{{ old("strt_date") }}">
                @error('strt_date')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Last Date of Registration</label>
                <input type="date" name="last_date" class="form-control @error('last_date') is-invalid @enderror"
                    id="" placeholder="Enter Starting date of the course" value="{{old("last_date")}}">
                @error('last_date')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

        </div>
        <label for="exampleInputEmail1">How many class you need?</label>

         <input type="number" id="number" name="count" value="0"/>
         <input type="button" onclick="incrementValue()" value="Create" />
         <div id="boxquan"></div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit </button>
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


<script>

  function incrementValue()
  {
      $("#boxquan input").remove();
      
      for (i = 0; i < document.getElementById("number").value; i++) {
        $('#boxquan').append('<label for="exampleInputEmail1 name="labelid['+i+']" type="text" id="labelid['+i+']" size="50">Class['+(i+1)+'] Title: </label>');
        $('#boxquan').append('<input name="boxid['+i+']" type="text" id="boxid['+i+']" size="50"/><br/>');
        $('#boxquan').append('<label for="exampleInputEmail1 name="labelid['+i+']" type="text" id="labelid['+i+']" size="50">Class['+(i+1)+'] Topics: </label>');
        $('#boxquan').append('<textarea class="form-control  @error('summary') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 255 characters" data-val-length-max="255" name="textid['+i+']" id="textid['+i+'] maxlength="255""> </textarea><br/>');
      }
    
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
