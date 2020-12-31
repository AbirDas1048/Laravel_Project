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



Route::get('/', 'HomeController@home');

Route::get('signup', 'HomeController@signup');

Route::post('insert', 'HomeController@insert');

Route::get('edit/{id}', 'HomeController@edit');

Route::post('update/{id}', 'HomeController@update');

Route::get('delete/{id}', 'HomeController@delete');

/*Route::get('show_data', 'HomeController@show_data');*/

Route::get('login', 'HomeController@login');

Route::post('login_store', 'HomeController@login_store');

Route::get('logout', 'HomeController@logout');

Route::group(['middleware' => 'logged'], function(){
    Route::get('user', 'HomeController@user');
    
Route::get('show_data', 'HomeController@show_data');

Route::get('image', 'HomeController@image');
});

Route::get('order', 'HomeController@order');


Route::post('image_upload', 'HomeController@image_upload');

