@extends('admin.layouts.main')
@section('content')
<div class="container-xxxl p-0 pt-4 pl-3">
   <div class="row align-items-center mb-3 mb-lg-6 d-flex">

       @if ($video->link == null)
           <div class="d-none d-lg-flex col-lg-6 align-self-stretch">
               <img alt="img"
           class="img-fluid"
           src="{{asset("/storage/".$video->image_path)}}" />
           </div>
       @else
           <div class="d-lg-flex col-12 col-lg-6 align-self-stretch">
               <iframe width="840" height="460" src="{{$video->link}}" title="Dev Skill video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
       @endif

       <div class="col-12 col-lg-6 p-4 ">
           <h2 class="text-primary">{{ $video->title }}</h2>
           <p class="card-text text-muted">{{ $video->descrip }}</p>
           <p>
               <small class="text-uppercase">Schedule</small>
               <b class="d-block">{{ $video->schedule }}</b>
           </p>
           @if ($video->status != "Approved")
           <a href="{{ url("/webinars/approve/$video->id") }}" class="btn btn-success">Approve</a>
        @endif
       </div>
   </div>
</div>

@endsection