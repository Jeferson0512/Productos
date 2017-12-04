<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::get('/productos','ProductController@index');
//Route::get('/productos/detalle/{id}','ProductController@show');
//Route::get('/ver/{id}','ProductController@show');
Route::resource('/productos','ProductController');

Route::get('/category','CategoryController@index');
Route::get('/category/{id}','CategoryController@show');
