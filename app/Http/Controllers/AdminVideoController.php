<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.webinar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.webinar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_path = null;
     

        if($request->hasFile('webinar_image'))
        {
            $image_path = $request->file('webinar_image')->store('webinar','public');
        }
     
        $video = new Video();
        $video->user_id = Auth::id();
        $video->image_path = $image_path;
        $video->link = $request->link;
        $video->title = $request->title;
        $video->descrip = $request->description;
        $video->schedule = $request->schedule;
        $video->save();
        return view('admin.webinar.index');
        
    }

    public function list()
    {
        return DataTables::of(Video::query())
        ->addIndexColumn()
        ->addColumn('Author_Name', function ($row){
            return view("admin.webinar.author",compact('row'));   
            })
        ->addColumn('status_name', function ($row){
               return view("admin.webinar.status",compact('row'));   
        })
        ->addColumn('action', function ($row) {
            return view("admin.webinar.action",compact("row"));
        })
        ->addColumn('details', function ($row) {
            return view("admin.webinar.details",compact("row"));
        })
        ->make(true);
    }

    public function aprrove($id)
    {
       $video = Video::find($id);
       $video->status = "Approved";
       $video->save();
       return view('admin.webinar.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        return view('admin.webinar.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        return view('admin.webinar.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_path = null;
     

        if($request->hasFile('webinar_image'))
        {
            $image_path = $request->file('webinar_image')->store('webinar','public');
        }
       

        $video = Video::find($id);
        // $video->user_id = Auth::id();
        if($image_path != null)
        {
            $video->image_path = $image_path;
        }
        $video->link = $request->link;
        // $video->status = $request->status;
        $video->title = $request->title;
        $video->descrip = $request->description;
        $video->schedule = $request->schedule;
        $video->save();
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
        $video = Video::find($id);
        $video->delete();
        return redirect()->back();
    }
}
