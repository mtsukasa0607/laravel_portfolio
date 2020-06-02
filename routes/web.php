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
// 検証コード
Route::get('/hello', 'HelloController@index');
Route::get('/hello/storage_index', 'HelloController@storage_index');
Route::get('/hello/other/{msg}', 'HelloController@other');

Route::get('/good', 'goodController@index');
Route::get('/good/other/{msg}', 'goodController@other');
Route::post('/good/other', 'goodController@other');




Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@upload')->name('upload');

Route::get('/testCrud/index', 'TestCrudController@index');
Route::get('/testCrud/show', 'TestCrudController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
