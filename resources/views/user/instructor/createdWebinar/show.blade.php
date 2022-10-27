@include('user.layouts.temporary_header')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            



<div class="card-body">
<!-- Main content -->
<div class="content">
    <nav class="mx-n3">
    </nav>
    <div class="tab-content">
        <div class="py-3 tab-pane fade show active"
             id="tabPanelClassAndTopics"
             role="tabpanel"
             aria-labelledby="tabPanelClassAndTopics">

                     <div class="bn-font text-justify">
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
                     </div>
            

                <!-- /batch is ongoing -->
        </div>
    </div>
</div>
<!-- /.content -->
                          

<div class="card-body">
        
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    {{-- Footer --}}
  </div>
  <!-- /.card-footer-->
</div>
