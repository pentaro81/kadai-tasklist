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
Route::get('/',function(){
	return view('welcom');
});

Route::get('/', 'TasksController@index');

Route::resource('tasks','TasksController');

Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
});


//Route::get('tasks/{id}','TasksController@show');
//Route::post('tasks','TasksController@store');
//Route::put('tasks/{id}','TasksController@update');
//Route::delete('tasks/{id}','TasksController@destroy');

//Route::get('tasks','TasksController@index');

//Route::get('tasks/create','TasksController@create');

//Route::get('tasks/{id}/edit','TasksController@edit')->name('tasks.edit');


