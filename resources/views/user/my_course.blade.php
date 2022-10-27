@extends('user.layouts.app')
@section('content')
    <!-- Main content -->
<div class="content">
    

    <div class="tab-content" id="">

        
</partial>


        

<div class="tab-pane fade show active py-3"
     id="tabPanelCoursesIJoined"
     role="tabpanel"
     aria-labelledby="coursesIJoined">
        <div>
                    <div class="px-2 py-3 border-bottom border-light">
                            @foreach ( Auth::user()->courses as $item)                
                            <h3>
                                {{$item->title}}
                            </h3>
                        <span class="badge badge-brand-red badge-pill mb-3">{{ $item->course_status}}</span>
                        <div class="d-sm-flex mb-2">
                            <a class="d-block mb-3 mb-sm-0 mr-5" href="{{$item->class_link}}" target="_blank">Open Google Classroom</a>
                            <a class="d-block" href="{{url("/mycoursedetails/$item->id")}}">See Class Details</a>
                        </div>
                        <p class="mb-1">Next Class</p>
                        <p class="font-weight-bold mb-1">
                            {{ $item->next_class_date }}
                        </p>
                @endforeach
</div>
        </div>
</div>
    </div>
</div>
<!-- /.content -->

@endsection

