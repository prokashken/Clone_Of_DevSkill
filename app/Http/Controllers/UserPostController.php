<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    public function index()
    {
        $blogs = Post::where('status','Approved')->orderBy('created_at', 'desc')->paginate(10);
        return view('site.blogs.index',compact('blogs'));
    }

    public function show($id)
    {
        $blog = Post::find($id);
        return view('site.blogs.blog_details',compact('blog'));
    }

    public function CommentOnPost(Request $request ,$id)
    {
        $post = Post::find($id);
        $cmnt = Comment::where('user_id',Auth::id())->where('commentable_id',$id)->get();
        foreach ($cmnt as $value) {
            $value->details = $request->CourseFeedback;
            $value->save();
            return redirect()->back();
        }
         
        if ($post) {
            $comment = new Comment();
            $comment->user_id = Auth::id();
            $comment->details = $request->CourseFeedback;
            $post->comments()->save($comment);
        }
            
    
     return redirect()->back();
    }
}
