<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where("status","Pending")->get();
        $webinars = Video::where("status","Pending")->get();
        $posts = Post::where("status","Pending")->get();
        $orders = Order::where("status",0)->get();
        $users = User::all();
         return view('admin.index',compact('users','orders','courses','webinars','posts'));
    }

    public function index2()
    {
         return view('admin.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.courses.create");
    }

      public function list()
    {
        return DataTables::of(Course::query())
        ->addIndexColumn()
        ->addColumn('Author_Name', function ($row){
            return view("admin.courses.createdBy",compact('row'));   
            })
        ->addColumn('status_name', function ($row){
               return view("admin.courses.status",compact('row'));   
        })
        ->addColumn('action', function ($row) {
            return view("admin.courses.action",compact("row"));
        })
        ->addColumn('details', function ($row) {
            return view("admin.courses.details",compact("row"));
        })
        ->make(true);
    }


     public function list2()
    {
        return DataTables::of(User::query())
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
            return view("admin.users.action",compact("row"));
        })
        ->make(true);
    }

       public function list3()
    {
        return DataTables::of(User::where("instructor",1))
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
            return view("admin.users.action",compact("row"));
        })
        ->make(true);
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
            echo "i = $i".$request->boxid[$i]."<br/>";
            echo $request->textid[$i]."<br/>";
        }
        // $course_details->save();

        return view('admin.courses.index');

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
        return view('admin.courses.show',compact('course_details','course'));
    }

     public function aprrove($id)
    {
       $course = Course::find($id);
       $course->status = "Approved";
       $course->save();
       return view('admin.courses.index');
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
       return view('admin.courses.edit',compact('course','course_details'));
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
                    // $course_details = new CourseDetail();
                    // $course_det->course_id = $course->id;
                    $course_det->class_title = $request->boxid[$i];
                    $course_det->class_topics = $request->textid[$i++];
                    $course_det->save();
                        //  echo "i = $i".$request->boxid[$i]."<br/>";
                        //   echo $request->textid[$i++]."<br/>";
                    
            }
    DB::commit();
    } catch (\Throwable $th) {
        DB::rollBack();
    }

        // for ($i=0; $i < $request->count; $i++) { 
        //     $course_details = new CourseDetail();
        //     $course_details->course_id = $course->id;
        //     $course_details->class_title = $request->boxid[$i];
        //     $course_details->class_topics = $request->textid[$i];
        //     $course_details->save();
        //     echo "i = $i".$request->boxid[$i]."<br/>";
        //     echo $request->textid[$i]."<br/>";
        // }

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
        $course_details->delete();
        $course->delete();
        return redirect()->back();
    }

    public function delUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
