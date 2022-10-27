<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Post;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function HomePage()
{
    $courses = Course::take(2)->get();
    $blogs = Post::take(4)->get();
    return view('site.index',compact('courses','blogs'));
}

    public function index()
    {
        return view('user.instructor.createdCourse.index');
    }

    public function submiyCourseCmnt(Request $request,$id)
    {
        $course = Course::find($id);
        $cmnt = Comment::where('user_id',Auth::id())->where('commentable_id',$id)->get();
        foreach ($cmnt as $value) {
            $value->details = $request->CourseFeedback;
            $value->save();
            return redirect()->back();
        }
         
        if ($course) {
            $comment = new Comment();
            $comment->user_id = Auth::id();
            $comment->details = $request->CourseFeedback;
            $course->comments()->save($comment);
        }
            
    
     return redirect()->back();
    }

    public function myCourseComment($id)
    {
        $course = Course::find($id);
        return view('user.my_course_comment',compact('course'));
    }
    
    public function courseRegistration($id)
    {
    //   $user = Auth::user();
    //   $user->courses()->attach([$id]);
     $flag = false;
        foreach (Auth::user()->courses as $value) {
            if ($value->id == $id) {
                $flag = true;
            }
        }


        if ( $flag == false) {
            $course = Course::find($id);
            if($course->author_id == Auth::id())
            {
                return "You are the instructor of this course, you can not register for this course";
            }
            $course->users()->attach([Auth::id()]);
            return redirect()->back()->with('success','Registered successfully');
        }
        
        return "You have already registered";
      
    }
    public function course()
    {
        $courses = Course::where('status','Approved')->orderBy('created_at', 'desc')->get();
        return view('site.course',compact('courses'));
    }

    public function courseDetailsForEnrUser($id)
    {
        $course = Course::find($id);
        $course_details = CourseDetail::where('course_id',$id)->get();
        return view('user.my_course_details',compact('course_details','course'));
    }

    public function coursedetails($id)
    {
        $course = Course::find($id);
        $user_info = User::find($course->author_id);
        $course_details = CourseDetail::where('course_id',$id)->get();
        return view('site.course_details',compact('course','course_details','user_info'));
        // return $course_details;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.instructor.createdCourse.create_course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {

        $image_path1 = null;
        $image_path2 = null;

        if($request->hasFile('banner_image'))
        {
            $image_path1 = $request->file('banner_image')->store('course','public');
            // $file = $request->file('banner_image');
            // $image_path = $file->storeAs('course', $request->title.".".$file->getClientOriginalExtension(),'public');


        }
        if($request->hasFile('dbanner_image'))
        {
            $image_path2 = $request->file('dbanner_image')->store('course_details','public');
        }
        
        $course = new Course();
        $course->author_id = Auth::id();
        $course->title = $request->title;
        $course->course_status = $request->course_status;
        $course->batch =  $request->batch;
        $course->prerequisite =  $request->prerequisite;
        $course->banner_path = $image_path1;
        $course->dbanner_path = $image_path2;
        $course->tag = $request->course_for;
        $course->summary = $request->summary;
        $course->fee = $request->fee;
        $course->discount = $request->discount;
        $course->schedule = $request->schedule;
        $course->srt_date = $request->strt_date;
        $course->last_date = $request->last_date;
        $course->save();

        // $course_details = new CourseDetail();
        for ($i=0; $i < $request->count; $i++) { 
            $course_details = new CourseDetail();
            $course_details->course_id = $course->id;
            $course_details->class_title = $request->boxid[$i];
            $course_details->class_topics = $request->textid[$i];
            $course_details->save();
            // echo "i = $i".$request->boxid[$i]."<br/>";
            // echo $request->textid[$i]."<br/>";
        }
        // $course_details->save();

        return redirect('/Course');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $course_details = CourseDetail::where('course_id',$id)->get();
        return view('user.instructor.createdCourse.show',compact('course_details','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $course_details = CourseDetail::where('course_id',$id)->get();
       return view('user.instructor.createdCourse.edit',compact('course','course_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
                 try {
        DB::beginTransaction();

                $image_path1 = null;
                $image_path2 = null;

                if($request->hasFile('banner_image'))
                {
                    $image_path1 = $request->file('banner_image')->store('course','public');

                }
                if($request->hasFile('dbanner_image'))
                {
                    $image_path2 = $request->file('dbanner_image')->store('course_details','public');
                }
                



                $course = Course::find($id);
                // $course->author_id = Auth::id();
                $course->title = $request->title;
                $course->course_status = $request->course_status;
                $course->batch =  $request->batch;
                $course->next_class_date = $request->nextclass;
                $course->prerequisite =  $request->prerequisite;
                if ($image_path1 == null) {
                    $image_path1 = $course->banner_path ;
                }
                if ($image_path2 == null) {
                    $image_path2 = $course->dbanner_path;
                }
                $course->banner_path = $image_path1;
                $course->dbanner_path = $image_path2;
                $course->tag = $request->course_for;
                $course->summary = $request->summary;
                $course->fee = $request->fee;
                $course->discount = $request->discount;
                $course->schedule = $request->schedule;
                $course->srt_date = $request->strt_date;
                $course->last_date = $request->last_date;
                $course->save();

            $course_details = CourseDetail::where('course_id',$id)->get();

            $i = 0;
            foreach ($course_details as $course_det) {
                    $course_det->class_title = $request->boxid[$i];
                    $course_det->class_topics = $request->textid[$i++];
                    $course_det->save();
            }
       DB::commit();
       } catch (\Throwable $th) {
        DB::rollBack();
       }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course_details = CourseDetail::where('course_id',$id)->get();
        $course_details->each->delete();
        $course->delete();
        return redirect()->back();
    }

         public function list()
    {
        return DataTables::of(Course::where('author_id',Auth::id()))
        ->addIndexColumn()
        ->addColumn('status_name', function ($row){
               return view("user.instructor.createdCourse.status",compact('row'));   
        })
        ->addColumn('action', function ($row) {
            return view("user.instructor.createdCourse.action",compact("row"));
        })
        ->addColumn('details', function ($row) {
            return view("user.instructor.createdCourse.details",compact("row"));
        })
        ->make(true);
    }
}
