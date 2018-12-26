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

Route::get('/welcome','HomeController@index'); 
Route::get('/index','HomeController@homepage');
Route::get('/about','HomeController@about');
Route::get('/service','HomeController@serve');
Route::get('/biz','HomeController@bizpage');
Route::get('/contact','HomeController@con');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
