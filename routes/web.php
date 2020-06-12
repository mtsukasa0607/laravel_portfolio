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



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HelloController@welcome');





// 検証用コード
Route::get('/hello', 'HelloController@index');

Route::get('/hello/logout', 'HelloController@logout');

Route::get('/hello/messageShow', 'HelloController@messageShow');
Route::post('/hello/messageShow', 'HelloController@messageCreate');



Route::get('/hello/post', 'HelloController@post');
Route::post('/hello/post', 'HelloController@create');

Route::get('/hello/check', 'HelloController@check');




Route::get('/hello/show', 'HelloController@show');
Route::get('/hello/delete', 'HelloController@delete');

Route::get('/hello/storage_index', 'HelloController@storage_index');
Route::get('/hello/other/{msg}', 'HelloController@other');

Route::get('/hello/auth', 'HelloController@getAuth');
Route::post('/hello/auth', 'HelloController@postAuth');

Route::get('/hello/session', 'HelloController@ses_get');
Route::post('/hello/session', 'HelloController@ses_put');








Route::get('/good', 'goodController@index');
Route::get('/good/other/{msg}', 'goodController@other');
Route::post('/good/other', 'goodController@other');

Route::get('/s3upload', 'S3uploadController@index');
Route::post('/s3upload/other', 'S3uploadController@other');
Route::get('/s3upload/show', 'S3uploadController@show');

Route::get('/s3sql', 'S3sqlController@index');
Route::get('/s3sql/show', 'S3sqlController@show');

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@upload')->name('upload');

Route::get('/testCrud/index', 'TestCrudController@index');
Route::get('/testCrud/show', 'TestCrudController@show');

Route::get('/person', 'PersonController@index');
Route::get('/person/login_check', 'PersonController@login_check');


// 開発用コード
Route::get('/uploader/add', 'UploaderController@add');
Route::post('/uploader/create', 'UploaderController@create');
Route::get('/uploader/show', 'UploaderController@show');
Route::get('/uploader/edit/{id?}', 'UploaderController@edit')->name('edit');
Route::post('/uploader/update', 'UploaderController@update');
Route::get('/uploader/delete/{id?}', 'UploaderController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
