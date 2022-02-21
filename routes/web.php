<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

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


#Praktikum 2 - Single Action Controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticlesController::class, 'index']);

