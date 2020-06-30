<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PhotoController@top');
Route::get('/photo/photoShow', 'PhotoController@photoShow');
Route::get('/photo/photoDetail/{photo_id?}', 'PhotoController@photoDetail');
Route::get('/photo/photoFind', 'PhotoController@photoSearch');
Route::get('/photo/photoAdd', 'PhotoController@photoAdd')->middleware('auth');
Route::post('/photo/photoCreate', 'PhotoController@photoCreate')->middleware('auth');
Route::get('/photo/photoEdit', 'PhotoController@photoEdit')->middleware('auth');
Route::post('/photo/photoEdit', 'PhotoController@photoUpdate')->middleware('auth');
Route::get('/photo/photoDelete', 'PhotoController@photoDelete')->middleware('auth');
Route::post('/photo/photoDelete', 'PhotoController@photoRemove')->middleware('auth');
Route::post('/photo/photoDetail', 'PhotoController@photoComment')->middleware('auth');
Route::post('/photo/photoCommentRemove', 'PhotoController@photoCommentRemove')->middleware('auth');
Route::get('/photo/logout', 'PhotoController@logout')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login', 'HomeController@login');
Auth::routes();