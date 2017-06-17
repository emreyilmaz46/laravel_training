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
    return view('welcome');
});

Route::get('/emre', function () {
    return view('emre.index');
});

Route::get('/emre/blog/ekle', 'PostController@ekle');
Route::get('/emre/blog/kaydet','PostController@kaydet');
Route::get('/emre/blog', 'PostController@goster');
