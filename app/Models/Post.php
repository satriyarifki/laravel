<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';

    public static function post1(){
        return Post::where('id', 1)->first();
    }
    public static function post2(){
        return Post::where('id', 2)->first();
    }
    public static function post3(){
        return Post::where('id', 3)->first();
    }
    public static function post4(){
        return Post::where('id', 4)->first();
    }
}
