@extends('site.layouts.app')
@section('content')
        <!--content wrapper-->
<div class="content-wrapper">
    <div>
    <input type="hidden" id="area-name" value="">
    <input type="hidden" class="selectedCourseUrlName" value="ui-and-ux-design-for-app-and-website">
                        @php
                            $date1 = date("Y/m/d");
                            $date1 = strtotime($date1);
                            $date2 = strtotime($course->last_date);
                            $datediff = $date2 - $date1;
                            $remaining_days = round($datediff / (60 * 60 * 24));
                            
                        @endphp
    <div class="content">
        <div class="container-xxxl p-0">
            <!--visible when user starts scrolling top-->
            <div class="bg-white py-2 shadow cta-course-reg-portable fade mx-n3">
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between col-md-12">
                            @if ($remaining_days >= 0)
                                <a class="btn btn-sm btn-primary text-white course-registration-btn">
                                        Register Now
                                </a>
                            @else
                                <a class="btn btn-primary disabled">
                                        Register Now
                                </a>
                            @endif   
                            <a class="btn btn-sm btn-primary text-white d-none course-payment-btn" href="/Course/Pay?batchId=238b3b06-44c5-4bbe-0654-08da5f169330">
                                Pay Now
                            </a>
                            <div class="info d-none">
                            </div>
                            <h6 class="mb-md-0 d-none d-md-flex">
                                {{ $course->title }} - B{{ $course->batch }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row align-items-center mb-3 mb-lg-6 border-bottom border-light d-flex" id="courseDetailsHeader">
                    <div class="col-12 col-lg-8 p-4 pl-md-6 pl-xl-10 py-lg-0">
                        <h3>
                            <a ng-reflect-router-link="BatchesContainer"
                            href="#batchesContainer">{{ $course->title }} - B{{ $course->batch }}</a>
                        </h3>
                        <p>
                            <span class="bg-warning px-2 py-1 rounded-sm text-white mr-2">
                                Beginner
                            </span>
                        </p>
                        {{-- @php
                            $date1 = date("Y/m/d");
                            $date1 = strtotime($date1);
                            $date2 = strtotime($course->last_date);
                            $datediff = $date2 - $date1;
                            $remaining_days = round($datediff / (60 * 60 * 24));
                            
                        @endphp --}}
                        <p>
                            {{-- <del class="text-danger d-inline-block mr-2">Tk. 15,000</del>
                            <b class="">Tk. 12,000</b>
                            <b class="d-block text-danger">20% discount offer valid for 5 more days only</b> --}}
                        @if ($course->discount != null)
                        <span class="text-danger d-inline-block mr-4"
                        style="text-decoration: line-through;">Tk. {{ $course->fee }}</span>
                        <b>Tk. {{ $course->fee - ($course->fee *($course->discount/100) ) }}</b>
                        <b class="d-block text-danger">{{$course->discount}}% discount offer valid for {{ $remaining_days }} more days only</b>
                        @else
                            <b>Tk. {{ $course->fee }}</b>
                        @endif
                        </p>

                        <div class="d-flex flex-column flex-md-row lc-course-action-btns">
                            @if ($remaining_days >= 0)
                                <a class="btn btn-sm btn-primary text-white course-registration-btn">
                                    Register Nowh
                                </a>
                            @else
                                <a class="btn btn-primary disabled">
                                        Register Now
                                    </a>
                                &emsp;Registration will resume when new batch is announced <br> 
                            @endif
                            <a class="btn btn-primary text-white text-white d-none course-payment-btn" href="/Course/Pay?batchId=238b3b06-44c5-4bbe-0654-08da5f169330">
                                Pay Now
                            </a>
                            <div class="d-flex ml-3 flex-row align-items-center my-5 my-md-0">
                                <a class="text-primary curs-pointer" value="ui-and-ux-design-for-app-and-website"
                            onclick="showShareModal('ui-and-ux-design-for-app-and-website')">
                                    <i class="fas fa-share-alt"> Share &nbsp</i>
                                </a>
                                <div class="info d-none">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-flex col-lg-4 align-self-stretch">
                        <img alt=""
                            class="img-fluid clip-polygon-17"
                            src="{{asset("/storage/".$course->dbanner_path)}}" />
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-md-center row">
                    <div class="col-md-12 col-xl-10">
                        <div class="row">
                            <div class="col-md-8 mb-7">
                                <div class="my-3">
                                    {{ $course->summary }}    
                                </div>
                                <div class="mb-7">
                                    <h3>
                                        Who Can Join This Course?
                                    </h3>
                                    <p>
                                        {{ $course->prerequisite }}
                                    </p>
                                </div>
                                <div class="mb-7" id="courseOutline">
                                    <h3>Course Outline</h3>
                                    @foreach ($course_details as $item)
                                    <div class="">
                                        <h4>
                                            {{ $item->class_title }}
                                        </h4>
                                        <p>  
                                            <pre style='font-family:"Fira Sans",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size: .875rem; '>{{ $item->class_topics  }}</pre>
                                        </p>
                                    </div>
                                    @endforeach   
                                </div>
                                <!--batch details with instructor info-->
                                <!--single batch-->
                                <div>
                                    <div id="batchesContainer">
                                            <!--multiple batch-->
                                        <div>
                                            @if ($remaining_days >= 0)       
                                                <h3>Batch {{ $course->batch }}</h3>
                                                <!--schedule-summary-->

                                                <div id="schedule" class="mb-7">
                                                    <h4>Schedule</h4>
                                                    <div>
                                                        <div class="mb-3">
                                                            <span> {{ $course->schedule }}</span>
                                                        </div>
                                                        <p>
                                                            Start from {{ \Carbon\Carbon::parse($course->srt_date)->format('M d, Y')}}
                                                        </p>
                                                        <p>
                                                            Last date of registration is {{ \Carbon\Carbon::parse($course->last_date)->format('M d, Y')}} ({{ $remaining_days }} Days Remaining)
                                                        </p>

                                                        <a class="btn btn-primary text-white course-registration-btn"
                                                        onclick="CourseRegistrationBtnClick('238b3b06-44c5-4bbe-0654-08da5f169330', '12000')">
                                                            Register Now
                                                        </a>
                                                        <a class="btn btn-primary text-white text-white d-none course-payment-btn" href="/Course/Pay?batchId=238b3b06-44c5-4bbe-0654-08da5f169330">
                                                            Pay Now
                                                        </a>
                                                        <div class="info d-none">
                                                            <br />
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <a class="btn btn-primary disabled">
                                                        Register Nowh
                                                </a>
                                                <b>No Upcoming Batch </b>
                                                <br><br>
                                            
                                            @endif
                                            
                                                <!--/schedule-summary-->
                                                <!--instructors-->
                                            <div id="instructors" class="mb-7">
                                                        <h4>Instructors</h4>
                                                        <!--instructor-->
                                                <div class="media mb-6">
                                                            <img style="width: 64px;" src="{{ $user_info->image_path != null? asset("storage/".$user_info->image_path) : '#'}}" class="mr-3 rounded-circle" />
                                                            <div class="media-body">
                                                                <b>{{ $user_info->name }}</b>
                                                                <p>
                                                                {{ $user_info->biography }}
                                                                    {{-- Data driven UX Evangelist. Have a hand in Design, Create, Promote and Scale Product/ Service as well as Brand across National and International. --}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--/instructor-->
                                            </div>
                                                <!--/instructors-->
                                        </div>
                                            <!--/multiple batch-->
                                    </div>
                                </div>
                                <div class="mb-7" id="related">
                                </div>
                                <div class="mb-7" id="testimonials">
                                    <h3>What Students Said</h3>
                                    @foreach ($course->comments as $comment)
                                        <div class="">
                                            <blockquote class="blockquote border-brand-red">
                                                <p>
                                                    {{ $comment->details }}
                                                </p>
                                            </blockquote>
                                            <div class="media mb-3">
                                                <img alt="Photo"
                                                class="mr-3 rounded-circle square"
                                                style="width: 40px;"
                                                src="{{asset("storage/".App\Models\User::find($comment->user_id)->image_path)}}" />
                                                <div class="media-body">
                                                    <b>{{ App\Models\User::find($comment->user_id)->name }}</b>
                                                    <p class="caption">
                                                        UI and UX Design for APP and Website Batch: 4
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                        <button class="my-3 btn btn-link" id="loadMoreTestomonials">
                                            Show More Testimonial
                                        </button>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                    @if ($remaining_days >= 0)
                                            <h3>
                                            <a ng-reflect-router-link="BatchesContainer"
                                            href="#batchesContainer">{{ $course->title }} - B{{ $course->batch }} </a>
                                        </h3>
                                        <h6> </h6>
                                            <p>
                                                @if ($course->discount != null)
                                                    <span class="text-danger d-inline-block mr-4"
                                                    style="text-decoration: line-through;">Tk. {{ $course->fee }}</span>
                                                    <b>Tk. {{ $course->fee - ($course->fee *($course->discount/100) ) }}</b>
                                                    <b class="d-block text-danger">{{$course->discount}}% discount offer valid for {{ $remaining_days }} more days only</b>
                                                @else
                                                    <b>Tk. {{ $course->fee }}</b>
                                                @endif
                                            </p>
                                        <div class="row mb-2">
                                            <div class="col-12 col-md-4 py-2">
                                                <div>
                                                    <span class="caption d-block text-uppercase">Registration</span>
                                                        <span class="d-block font-weight-bold">{{ $remaining_days }} Days Remaining Days Remaining</span>
                                                        <span class="small d-block">  {{ count($course->users) }} people already registered</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div>
                                                        <span class="small d-block text-uppercase">Schedule</span>
                                                            <span class="d-block font-weight-bold">{{ $course->schedule }}</span>
                                                        <span class="small d-block">
                                                            Start from {{ \Carbon\Carbon::parse($course->srt_date)->format('M d, Y')}}
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="d-flex flex-column flex-md-row">
                                                    <a class="btn btn-primary text-white course-registration-btn"
                                                    onclick="CourseRegistrationBtnClick('238b3b06-44c5-4bbe-0654-08da5f169330', '12000')">
                                                        Register Now
                                                    </a>
                                                    <a class="btn btn-primary text-white d-none course-payment-btn" href="/Course/Pay?batchId=238b3b06-44c5-4bbe-0654-08da5f169330">
                                                        Pay Now
                                                    </a>
                                                <div class="d-flex ml-3 flex-row align-items-center my-5 my-md-0">
                                                    <a class="text-primary curs-pointer" value="ui-and-ux-design-for-app-and-website"
                                                onclick="showShareModal('ui-and-ux-design-for-app-and-website')">
                                                        <i class="fas fa-share-alt"> Share &nbsp</i>
                                                    </a>
                                                </div>
                                            </div>
                                                <div class="info d-none mt-3">
                                                </div>
                                    @else
                                            <h3>
                                            <a ng-reflect-router-link="BatchesContainer"
                                            href="#batchesContainer">{{ $course->title }} - B{{ $course->batch }} </a>
                                        </h3>
                                        <b>Tk. {{ $course->fee }}</b>
                                        <br><br>
                                        <a class="btn btn-primary disabled">
                                            Register Nowh
                                        </a>
                                        <br>
                                        <b>No Upcoming Batch </b>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block col-md-4 sticky-parent">
                                <nav class="nav flex-column position-sticky"
                                    style="top: 180px;"
                                    id="menuSecondary">
                                    <a id="navLinkSecondaryCourseOutline"
                                    class="nav-link"
                                    href="#courseOutline">Course Outline</a>
                                        <a id="navLinkSecondaryCourseSchedule"
                                    class="nav-link"
                                    href="#schedule">Schedule</a>
                                    <a id="navLinkSecondaryCourseInstructors"
                                    class="nav-link"
                                    href="#instructors">Instructors</a>
                                    <a id="navLinkSecondaryCourseRelated"
                                    class="nav-link"
                                    href="#related">Related</a>
                                    <a id="navLinkSecondaryCourseTestimonials"
                                    class="nav-link"
                                    href="#testimonials">What Students Said</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <a href="#" target="_blank" class="btn rounded-circle fb-sh">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" target="_blank" class="btn rounded-circle twitt-sh">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="#" target="_blank" class="btn rounded-circle linked-sh">
                            <i class="fab fa-linkedin-in fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal -->
    </div>
</div>
           
        </div>
@endsection
@push('scripts')
     

@endpush
   