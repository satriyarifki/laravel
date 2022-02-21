<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

#Praktikum 2
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

