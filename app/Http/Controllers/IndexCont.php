<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexCont extends Controller
{
    //
    public function index(){
        return view('index')
                    ->with('name','Satriya')
                    ->with('post1',Post::post1())
                    ->with('post2',Post::post2())
                    ->with('post3',Post::post3())
                    ->with('post4',Post::post4());
    }
    public function about(){
        return view('about', ['name' => 'Satriya']);
    }
    public function product(){
        return view('product', ['name' => 'Satriya']);
    }
    public function productdetail3(){
        return view('product_detail3');
    }
    public function blog(){
        return view('blog', ['name' => 'Satriya']);
    }
    public function contact(){
        return view('contact', ['name' => 'Satriya']);
    }
}
