<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostController extends Controller
{
    public function cetak_pdf()
    {
        $articles = Article::all();
        $pdf = PDF::loadView('articles.articles_pdf', ['articles'=>$articles]);
        return $pdf->stream();
    }
}
