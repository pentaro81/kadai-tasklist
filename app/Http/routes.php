<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TasksController@index');

Route::resource('tasks','TasksController');


//Route::get('tasks/{id}','TasksController@show');
//Route::post('tasks','TasksController@store');
//Route::put('tasks/{id}','TasksController@update');
//Route::delete('tasks/{id}','TasksController@destroy');

//Route::get('tasks','TasksController@index');

//Route::get('tasks/create','TasksController@create');

//Route::get('tasks/{id}/edit','TasksController@edit')->name('tasks.edit');


