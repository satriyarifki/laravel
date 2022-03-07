<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCont extends Controller
{
    //
    public function index(){
        return view('index', ['name' => 'Satriya']);
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
