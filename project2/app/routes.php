<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',   'JobsController@home');
Route::get('/index',   'JobsController@index');
Route::get('data',  ['before'=>'auth', 'uses'=>'JobsController@data'] );
Route::get('add', 'JobsController@create_job');
Route::post('save', 'JobsController@store_job');
Route::get('adduser', 'JobsController@create_user');
Route::post('saveuser', 'JobsController@store_user');
Route::get('jobd/{id}',   'JobsController@job_detail');

Route::get('login', 'JobsController@login');
Route::post('login', 'JobsController@doLogin');
Route::post('logout', 'JobsController@doLogout');

Route::post('category', 'JobsController@job_category');


