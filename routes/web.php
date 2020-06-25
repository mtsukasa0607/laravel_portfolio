<?php

use Illuminate\Support\Facades\Route;

Route::get('/photo/photoDelete', 'PhotoController@photoDelete');
Route::post('/photo/photoDelete', 'PhotoController@photoRemove');
Route::get('/photo/photoEdit', 'PhotoController@photoEdit');
Route::post('/photo/photoEdit', 'PhotoController@photoUpdate');


Route::get('/', 'PhotoController@photoShow');
Route::get('/photo/photoShow', 'PhotoController@photoShow');
Route::get('/photo/photoAdd', 'PhotoController@photoAdd')->middleware('auth');
Route::post('/photo/photoCreate', 'PhotoController@photoCreate')->middleware('auth');
Route::get('/photo/photoDetail/{id?}', 'PhotoController@photoDetail');
Route::post('/photo/photoDetail', 'PhotoController@photoComment')->middleware('auth');
Route::get('/photo/photoCommentRemove/{id?}/{photo_id?}', 'PhotoController@photoCommentRemove');





Route::get('/photo/photoFind', 'PhotoController@photoShow');
Route::post('/photo/photoFind', 'PhotoController@photoSearch');



Route::get('/hello', 'HelloController@index');
Route::get('/hello/logout', 'HelloController@logout');
Route::get('/hello/messageShow', 'HelloController@messageShow');
Route::post('/hello/messageShow', 'HelloController@messageCreate')->middleware('auth');
Route::get('/hello/messageDelete', 'HelloController@messageDelete');
Route::post('/hello/messageDelete', 'HelloController@messageRemove');
Route::get('/hello/messageEdit', 'HelloController@messageEdit');
Route::post('/hello/messageEdit', 'HelloController@messageUpdate');
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login', 'HomeController@login');