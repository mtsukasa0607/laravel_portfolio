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


// 検証コード
Route::get('hello', function() {
    return view('hello.index');
});
Route::get('/', 'PostsController@index');
Route::post('upload', 'PostsController@upload')->name('upload');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
