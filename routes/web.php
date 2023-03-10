<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',function(){
    return view('welcome');
})->name('index');


// ///////////////////////////////FRONT HOME////////////////////////////////////

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('blog',[FrontController::class,'Blog'])->name('blog');
Route::get('show_blog/{id}',[FrontController::class,'show_blog'])->name('show_blog');
Route::get('team_show/{id}',[FrontController::class,'team_show'])->name('team_show');




 
// ///////////////////////////////FRONT HOME////////////////////////////////////


Route::get('/register',function(){

    return "kjhkl";
});







 

 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
