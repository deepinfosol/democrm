<?php

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
    return view('auth.login');
});


Route::get('dashboard', function () {
    return view('dashboards.sample1');
});

Route::group(['prefix' => 'masters/'], function () {
    Route::group(['prefix' => 'brands/'], function () {
        Route::get('/', 'Masters\BrandController@index');
    });    
    
});
Route::get('billing', function () {
    return view('billing');
});
