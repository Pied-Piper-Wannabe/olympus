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


Route::get('/', function () {
	return view('frontpage');
});

// Controllers
Route::resource('/builds', 'BuildsController');

Route::resource('/account', 'AccountsController');

Route::resource('/parts', 'PartsController');

// Login routes
Route::get('/login', 'Auth\AuthController@getLogin');

Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/logout', 'Auth\AuthController@getLogout');

// Signup routes
Route::get('/signup', 'Auth\AuthController@create');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');

Route::post('/register', 'Auth\AuthController@postRegister');

