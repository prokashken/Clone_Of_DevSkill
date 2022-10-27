<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    private $array = array();

    public function courseDetails()
    {
        return $this->hasMany(CourseDetail::class);
    }

    public function userAuthor()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'user_course','course_id','user_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    // public function user_comment()
    // {
    //     $com = $this->comments();
    //     foreach ($com as $c) {
    //         $array []= $c->user_id;
    //     }
    //     $user = User::where('id',$array)->get();
    //     return $user;
    // }
}
