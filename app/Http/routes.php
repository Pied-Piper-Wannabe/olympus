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

Route::get('/tour', function () {
  return view('tour.tour');
});

Route::get('/', 'BuildsController@frontPage');
Route::get('/builds/new', 'BuildsController@setupBuild');

// Resource Controllers
Route::resource('/account', 'AccountsController');
Route::resource('/builds', 'BuildsController');

// PartsController
Route::get('/parts/{type}', 'PartsController@index');
Route::get('/parts/{type}/{id}', 'PartsController@show');


// Login routes
Route::get('/login', 'Auth\AuthController@getLogin');

Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/logout', 'Auth\AuthController@getLogout');

// Signup routes
Route::get('/signup', 'Auth\AuthController@create');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');

Route::post('/register', 'Auth\AuthController@postRegister');

//FAQ route
Route::get('/faq', function () {
	return view('/help/faq');
});
