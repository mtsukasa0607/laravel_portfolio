<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PhotoController@top');
Route::get('/photo/photoShow', 'PhotoController@photoShow');
Route::get('/photo/photoFind', 'PhotoController@photoSearch');
Route::get('/photo/photoEdit', 'PhotoController@photoEdit')->middleware('auth');
Route::post('/photo/photoEdit', 'PhotoController@photoUpdate')->middleware('auth');
Route::get('/photo/photoDelete', 'PhotoController@photoDelete')->middleware('auth');
Route::post('/photo/photoDelete', 'PhotoController@photoRemove')->middleware('auth');

Route::get('/photo/logout', 'PhotoController@logout')->middleware('auth');


Route::get('/photo/photoDetail/{id?}', 'PhotoController@photoDetail');
Route::get('/photo/photoAdd', 'PhotoController@photoAdd')->middleware('auth');
Route::post('/photo/photoCreate', 'PhotoController@photoCreate')->middleware('auth');
Route::post('/photo/photoDetail', 'PhotoController@photoComment')->middleware('auth');
Route::get('/photo/photoCommentRemove/{id?}/{photo_id?}', 'PhotoController@photoCommentRemove')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login', 'HomeController@login');