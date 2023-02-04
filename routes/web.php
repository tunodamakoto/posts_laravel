<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/post', 'PostController');

Route::post('/post/comment/store', 'CommentController@store')->name('comment.store');

Route::get('/mypost', 'HomeController@mypost')->name('home.mypost');

Route::get('/mycomment', 'HomeController@mycomment')->name('home.mycomment');