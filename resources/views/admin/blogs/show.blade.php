@extends('admin.layouts.main')
@section('content')
 <div>

<div class="container">
   <div class="row">
       <div class="col">
           <div class="row">
               <div class="col-lg-8 col-xl-7 pt-md-6">
                   @if ($blog->status != "Approved")
                        <a href="{{ url("/blogs/approve/$blog->id") }}" class="btn btn-success">Approve</a>
                     @endif
                   <!--post-->
                   <div class="mb-4">

                     <div class="bn-font text-justify">
                        <pre>{{ $blog->title }}</pre>
                       
                           <pre>{{ $blog->description }}</pre>
                     </div>
                   </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

 </div>

@endsection