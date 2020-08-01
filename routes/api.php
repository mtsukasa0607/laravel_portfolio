<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// For Test Code
Route::get('customers', function(){
    return response()->json(\App\Customer::query()->select(['id', 'name'])->get());
});
Route::post('customers', function(){});
Route::get('customers/{customer_id}', function(){});
Route::put('customers/{customer_id}', function(){});
Route::delete('customers/{customer_id}', function(){});
Route::get('reports', function(){});
Route::post('reports', function(){});
Route::get('reports/{report_id}', function(){});
Route::put('reports/{report_id}', function(){});
Route::delete('reports/{report_id}', function(){});