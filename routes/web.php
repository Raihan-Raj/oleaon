<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\PostController;

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

Route::get('/admin', function () {
    return view('LocalAdmin');
});
Route::get('/',[home::class,'homepage']);
Route::get('/home',[home::class,'homepage']);
Route::get('/blog',[BlogController::class,'blogs']);
//Route::get('/add/blog',[PostController::class,'addblog'])->name('add.blog');  
//Route::post('/blog/post{id}',[PostController::class, 'blogpost']);
Route::get('/contact',[PostController::class,'contacts']);
Route::get('/contact/post',[PostController::class,'contactpost']);

