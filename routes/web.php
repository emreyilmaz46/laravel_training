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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');

Route::resource('customer','CustomerController');
Route::get('customer/delete/{id}','CustomerController@destroy');

Route::resource('survey_questions','SurveyQuestionController');
//Route::get('survey_questions','SurveyQuestionController@index_R');
