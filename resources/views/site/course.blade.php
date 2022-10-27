@extends('site.layouts.app')
@section('content')

   <div class="content-wrapper">
            <div>
                
                <div class="p-5 page-cover page-cover-courses-page mb-md-4 mb-2">
                    <div class="col-md-7">
                        <h1 class="text-white">LEARN FROM PROFESSIONALS</h1>
                        <p class="text-white font-weight-light">
                            Online courses are planned by industry professionals to make sure that you have the knowledge to build professional software
                        </p>
                    </div>
                </div>


 <div class="container">
    <!--coursedeck-->
    <div class="row">
        <div class="col">
            <h2>Upcoming Courses</h2>
                <!-- track promo-->
                <div class="border my-4 p-4 rounded shadow">
                    <h4 class="mb-4">
                        I just started, not sure about which course to take...
                    </h4>
                    <a class="btn btn-outline-primary" href="/Track">
                        Help Me to Choose Course
                    </a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- /track promo-->
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <!--course-->
                    @foreach ($courses as $item)
                        
                
                                <div class="card shadow border-0 my-3 no-gutters d-flex flex-row overflow-hidden rounded-lg">
                                    <div class="col-xl-2 d-none d-xl-block"
                                 style="background:url({{asset("storage/".$item->banner_path)}});background-position:center center; background-size: cover">
                                    </div>
                                    <div class="d-flex flex-column col-xl-10">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="card-title">
                                                        <a>{{ $item->title }}</a>
                                                            <abbr title="Add to favourites">
                                                                <a class="text-warning curs-pointer" onclick="toggleFavourite('2422ac22-7f55-c8bc-087b-08da67aa9c76', this)">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                            </abbr>
                                                        <div class="small my-2 d-flex flex-column flex-md-row">
                                                            <div class="mb-2 mb-md-0 align-self-center">
                                                                <span class="bg-warning px-2 py-1 rounded-sm text-white mr-2">
                                                                    {{ $item->tag }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <a class="text-primary curs-pointer" value="polytechnic-industrial-attachment-php"
                                               onclick="showShareModal('polytechnic-industrial-attachment-php')">
                                                        <i class="fas fa-share-alt"> Share</i>
                                                    </a>
                                                </div>
                                            </div>
                                            @php
                                          
                                            @endphp
                                            <p class="card-text text-muted text-justify">                                          
                                                
                                                {{ \Illuminate\Support\Str::limit($item->summary, 250, '...') }}                                        
                                            </p>
                                            @php
                                            $date1 = date("Y/m/d");
                                            $date1 = strtotime($date1);
                                            $date2 = strtotime($item->last_date);
                                            $datediff = $date2 - $date1;
                                            $remaining_days = round($datediff / (60 * 60 * 24));
                                            
                                            @endphp
                                                    <p class="card-text">
                                    
                                                        @if ($item->discount != null)
                                                            <span class="text-danger d-inline-block mr-4"
                                                            style="text-decoration: line-through;">Tk. {{ $item->fee }}</span>
                                                            <b>Tk. {{ $item->fee - ($item->fee *($item->discount/100) ) }}</b>
                                                            <b class="d-block text-danger">{{$item->discount}}% discount offer valid for {{ $remaining_days }} more days only</b>
                                                        @else
                                                            <b>Tk. {{ $item->fee }}</b>
                                                        @endif
                                                     
                                                            
                
                                                    </p>
                                                    <div class="row pb-3">
                                                        <div class="col-12 col-md-6 mb-2 mb-md-0">
                                                            <small class="text-uppercase">Registration</small>

                                                            @if ($remaining_days < 0)
                                                                        <b class="d-block">Registration Closed</b>
                                                            @else
                                                                 <b class="d-block">
                                
                                                             {{ $remaining_days }} Days Remaining
                                                            </b>

                                                                <small class="d-block">
                                                                    {{ count($item->users) }}
                                                                    {{-- @foreach ($item->users as $user)
                                                                        {{ $user->pivot->user_id }}
                                                                        {{ $user->pivot->course_id }}
                                                                    @endforeach --}}
                                                                    people already
                                                                    registered
                                                                </small>

                                                            @endif

                                                             </div>
                                                             @if ($remaining_days >= 0)
                                                                 <div class="col-12 col-md-6">
                                                                <small class="text-uppercase">Schedule</small>

                                                                    <b class="d-block">
                                                                        {{ $item->schedule }}
                                                                    </b>
                                                                <small>
                                                                   {{-- start from {{ $item->srt_date }} --}}
                                                                   Start from {{ \Carbon\Carbon::parse($item->srt_date)->format('M d, Y')}}
                                                                </small>
                                                        </div>
                                                             @endif
                                                        
                                                    </div>
                                        </div>

                                        <div class="align-items-md-center align-items-start bg-light d-flex flex-column flex-md-row justify-content-end py-2 py-md-0 user-action">
                                                        <div class="px-2 register-info d-none">
                                                            <span class="fa fa-info-circle mr-2"></span>
                                                                <small>
                                                                    Registration completed successfully.<br />
                                                                    Payment pending for the course.
                                                                </small>
                                                        </div>
                                                        @if ($remaining_days < 0)
                                                            <b>No Upcoming Batch </b>
                                                        @else
                                                             <a class="m-3 btn btn-outline-primary course-registration-btn"
                                                             href="{{url("/courseReg/$item->id")}}">
                                                            Register Now
                                                        </a>
                                                        @endif

                                            <a class="m-3 btn btn-outline-primary" href="{{url("/Course/$item->id")}}">See Details</a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    <!--./course-->

                </div>
                <div class="col col-lg-4 py-3 offset-xl-1">
                    <!--earn coin ad-->
                    <div class="card bg-secondary border-0 d-flex flex-row overflow-hidden">
    <div class="col col-sm-4 d-none d-sm-flex p-0">
        <img class="ml-n1"
             src="/site/img/bg_earn_coin_widget.svg" />
    </div>
    <div class="col ml-sm-n4 py-9">
        <h4 class="text-white">
            Earn DevCoins and buy SSD, Graphics Card, etc.
        </h4>
       <a class="btn btn-primary" href="/earncoin">How to Earn DevCoins?</a>
    </div>
</div>
                    <!--/earn coin ad-->
                    <!--become instructor ad-->
                    <div class="card border-0 overflow-hidden my-3 bg-light-gradient">
    <div class="d-none d-md-block py-10"
         style="
        background-image: url(/site/img/img_become_mentor.png);
        background-size: cover;
        background-position: center center;
    "></div>
    <div class="p-3">
        <strong><a href="#">Enlighten young hearts!</a></strong>
        <p class="small-2">
            Become an instructor and share your knowledge. Help us
            to build a better Bangladesh!
        </p>
        <a class="btn btn-brand-red" href="/Instructor">Become an Instructor</a>
    </div>
</div>
                    <!--/become instructor ad-->
                </div>
            </div>
        </div>
    </div>
    <!--/coursedeck-->
</div>



<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog"
     aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div><h5>Do you want to share this with your friends?</h5></div>
                <div id="share">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevskill.com%2FCourse%2FDetail" target="_blank" class="btn rounded-circle fb-sh">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdevskill.com%2FCourse%2FDetail" target="_blank" class="btn rounded-circle twitt-sh">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Fdevskill.com%2FCourse%2FDetail" target="_blank" class="btn rounded-circle linked-sh">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

   </div>
        </div>
@endsection