<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class InsPostController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = Post::where('user_id',Auth::id())->get();
        return view('user.instructor.createdBlogs.index');
    }

    public function list()
    {
    //    return DataTables::of(Post::query())->make(true);

        return DataTables::of(Post::where('user_id',Auth::id()))
        ->addIndexColumn()
        ->addColumn('Author_Name', function ($row){
            return view("user.instructor.createdBlogs.author",compact('row'));   
            })
        ->addColumn('status_name', function ($row){
               return view("user.instructor.createdBlogs.status",compact('row'));   
        })
        ->addColumn('action', function ($row) {
            return view("user.instructor.createdBlogs.action",compact("row"));
        })
        ->addColumn('details', function ($row) {
            return view("user.instructor.createdBlogs.details",compact("row"));
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.instructor.createdBlogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Post();
        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return view('user.instructor.createdBlogs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  
    public function show($id)
    {
        $blog = Post::find($id);
        return view('user.instructor.createdBlogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Post::find($id);
        return view('user.instructor.createdBlogs.edit',compact('blog'));
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
        $blog = Post::find($id);
        // $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
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
        $blog = Post::find($id);
        $blog->comments()->delete();
        $blog->delete();
        return redirect()->back();
    }
}
