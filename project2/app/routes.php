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
Route::get('addseker/{id}', 'JobsController@create_s');
Route::post('savseker', 'JobsController@store_jobseeker');
Route::get('addedu', 'JobsController@create_education');
Route::post('savedu', 'JobsController@store_education');
Route::get('addpre', 'JobsController@create_preferred');
Route::post('savpre', 'JobsController@store_preferred');
Route::get('addref', 'JobsController@create_reference');
Route::post('savref', 'JobsController@store_reference');
Route::get('jobd/{id}',   'JobsController@job_detail');

Route::get('login', 'JobsController@login');
Route::post('login', 'JobsController@doLogin');
Route::post('logout', 'JobsController@doLogout');

Route::post('category', 'JobsController@job_category');
Route::get('/showj/{id}',   'JobsController@showjob');

Route::get('eduv',   'JobsController@edu_view');
Route::get('userref/{id}',   'JobsController@user_ref');


