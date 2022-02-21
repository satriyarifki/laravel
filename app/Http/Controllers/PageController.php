<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return 'Selamat Datang Bestie';
    }
    public function about() {
        return 'NIM : 2041720218 <br> Nama : Satriya Rifki Pangestu <br> TI-2H';
    }
    public function articles($id) {
        return 'Ini adalah halaman Artikel dengan ID Peserta: '.$id;
    }
}
