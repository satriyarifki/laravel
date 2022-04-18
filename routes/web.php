<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/home', [HomeController::class, 'index']);
Auth::routes();
Route::resource('articles', ArticleController::class);
Route::get('/about', [IndexCont::class, 'about']);
Route::get('/blog', [IndexCont::class, 'blog']);
Route::get('/product', [IndexCont::class, 'product']);
Route::get('/contact', [IndexCont::class, 'contact']);
Route::get('/product-detail3', [IndexCont::class, 'productdetail3']);

