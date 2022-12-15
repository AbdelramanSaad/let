<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\UserController;
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

 Route::get('/',function()
 {
    return view('Dashbord.index');
 });



Route::resource('blog', BlogController::class);
Route::resource('video', VideosController::class);
Route::resource('user', UserController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
