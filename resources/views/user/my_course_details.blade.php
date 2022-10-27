@extends('user.layouts.app')
@section('content')
    <!--/breadcrumb-->
<div class="border-bottom border-light d-none d-sm-block">
    <div class="px-3 px-lg-5">
        <nav class="breadcrumb bg-white mb-0">
            <a class="breadcrumb-item" href="/Member/Course/MyCourses">My Courses</a>
            <span class="breadcrumb-item active">{{ $course->title }} - {{ $course->tag }} - B<span>{{ $course->batch }}</span></span>
        </nav>
    </div>
</div>
<!--/breadcrumb-->
<!-- Main content -->
<div class="content">
    <nav class="mx-n3">
        <div class="nav nav-tabs ds-nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active"
               data-toggle="tab"
               href="#tabPanelClassAndTopics"
               role="tab"
               aria-controls="classAndTopics"
               aria-selected="true">Classes & Topics</a>
            <a class="nav-item nav-link"
               data-toggle="tab"
               href="#tabPanelStudents"
               role="tab"
               aria-controls="students"
               aria-selected="false">Result & Certificate</a>
        </div>
    </nav>
    <div class="tab-content">
        <div class="py-3 tab-pane fade show active"
             id="tabPanelClassAndTopics"
             role="tabpanel"
             aria-labelledby="tabPanelClassAndTopics">

            
    <div>
        <div class="alert alert-info" role="alert">
            <p>Hi! We hope that you enjoyed the class and learned something new . Please review the instructor&#x27;s teaching methods,sothat we can also get better. Once you submit the course feedback,your final exam result will be shared with you. Thank you!</p>
            <div>
                <a href="/mycoursecomment/{{$course->id}}" class="btn btn-outline-info">
                    Submit Course Feedback
                    <i class="fa fa-arrow-right ml-1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
            
<div class="py-3 tab-pane fade show active"
     id="tabPanelClassAndTopics"
     role="tabpanel"
     aria-labelledby="tabPanelClassAndTopics">
    <div class="d-md-flex justify-content-between py-2 align-items-center">
        <h2 class="mb-sm-0">
            {{ $course->title }} - {{ $course->tag }} - Batch <span>{{ $course->batch }}
        </h2>
    </div>
    <div class="row">
        <div class="col-12 col-sm-8 col-lg-6">
            <p>
                {{ $course->summary }}
            </p>
            <h4>Prerequisities</h4>
            <p>
                {{ $course->prerequisite }}
            </p>
            @php
                $count = 1;
            @endphp
            <h4>Classes</h4>
            @foreach ($course_details as $item)
                <div class="my-3">
                    <h6>Class {{ $count++ }}</h6>
                    <div class="mb-2">
                        <span>Tuesday, October 25, 2022 09:00 PM - 11:00 PM</span>
                    </div>
                    <h5>{{ $item->class_title}}</h5>
                    <p>
                                {{-- <span>&#x25CF; Components of computer.&#xD;</span><br />
                                <span>&#x25CF; How CPU, Memory / RAM works and why do we need them.&#xD;</span><br />
                                <span>&#x25CF; Number System, thinking in terms of number system, example of using it in&#xD;</span><br />
                                <span>problem solving.</span><br /> --}}
                                <pre style='font-family:"Fira Sans",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size: .875rem; '>{{ $item->class_topics  }}</pre>
                     
                    </p>
                        <hr />
                </div>
            @endforeach
                        

        </div>
    </div>
</div>
        </div>
        <div class="py-3 tab-pane fade"
             id="tabPanelStudents"
             role="tabpanel"
             aria-labelledby="tabPanelStudents">

            <!--result locked-->
            
    <div>
        <div class="alert alert-info" role="alert">
            <p>Hi! We hope that you enjoyed the class and learned something new . Please review the instructor&#x27;s teaching methods,sothat we can also get better. Once you submit the course feedback,your final exam result will be shared with you. Thank you!</p>
            <div>
                <a href="/Member/Course/FeedBack?courseRegistrationId=67efd5df-6510-49f4-5919-08daa62634f1" class="btn btn-outline-info">
                    Submit Course Feedback
                    <i class="fa fa-arrow-right ml-1" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
            <!--/result locked-->
                <!-- batch is ongoing -->
                
<div class="card border-light">
    <div class="card-body">
        <h4 class="card-title">The course is on going...</h4>
        <p class="card-text">
            Once the course is completed, you will be able to see the exam result here.
        </p>
    </div>
</div>
                <!-- /batch is ongoing -->
        </div>
    </div>
</div>
<!-- /.content -->

@endsection
