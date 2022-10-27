@extends('admin.layouts.main')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Create New Faq</h3>

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

        <form action="{{ url("/Adfaq") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Question</label>
                    <input type="text" name="question" class="form-control @error('question') is-invalid @enderror"
                        id="" placeholder="Enter task Name" value="{{ old("question") }}">
                    @error('question')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
           
                <div class="form-group">
                    <label for="Biography">Answer</label>
                    <textarea class="form-control  @error('answer') is-invalid @enderror" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 100000 characters" data-val-length-max="100000" id="Biography" maxlength="100000" name="answer">
                    </textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    @error('answer')
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

  </section>
  @push('scripts')
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  @endpush
@endsection