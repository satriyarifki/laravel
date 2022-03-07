<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\IndexCont;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexCont::class, 'index']);
Route::get('/about', [IndexCont::class, 'about']);
Route::get('/blog', [IndexCont::class, 'blog']);
Route::get('/product', [IndexCont::class, 'product']);
Route::get('/contact', [IndexCont::class, 'contact']);
Route::get('/product-detail3', [IndexCont::class, 'productdetail3']);



// #Praktikum 1
// Route::get('/', function () {
//     return "Selamat Datang";
// });
// Route::get('/about', function () {
//     return "NIM : 2041720218 <br> Satriya Rifki Pangestu <br> TI-2H";
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Ini adalah halaman Artikel dengan ID: '.$id;
// });


// #Praktikum 2 - Multi Controler
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);


// #Praktikum 2 - Single Action Controller
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticlesController::class, 'index']);

#Praktikum 3 
// Route::get('/', function () {
//     return 'Selamat Datang di Educa Studio';
// });
// Route::prefix('category')->group(function () {
//     Route::get('/marbel-edu-games', function () {
//         return 'Menampilkan Edu Games';
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         return 'Menampilkan kids games';
//     });
//     Route::get('/riri-story-books', function () {
//         return 'Menampilkan story books';
//     });
//     Route::get('/kolak-kids-songs', function () {
//         return 'Menampilkan kids Song';
//     });
// });
// Route::prefix('news')->group(function () {
//     Route::get('/{param}', function ($param) {
//         return ' Menampilkan News terkait '.$param;
//     });
//     Route::get('/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19', function () {
//         return 'Menampilkan News Terkait EducaBerbagi';
//     });
// });
// Route::prefix('program')->group(function () {
//     Route::get('/karir', function () {
//         return 'Menampilkan Program Karir';
//     });
//     Route::get('/magang', function () {
//         return 'Menampilkan Program Magang';
//     });
//     Route::get('/kunjungan industri', function () {
//         return 'Menampilkan Program Kunjungan';
//     });
// });
// Route::get('/about-us', function () {
//     return 'Menampilkan keterangan terkait company Educa Studio';
// });

