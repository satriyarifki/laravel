<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index(){
        return view('index')
                    ->with('name','Satriya')
                    ->with('post1',Post::post1())
                    ->with('post2',Post::post2())
                    ->with('post3',Post::post3())
                    ->with('post4',Post::post4());
    }
}
