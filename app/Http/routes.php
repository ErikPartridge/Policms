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

Route::get('/', 'WelcomeController@index');

Route::get('/home', function(){
	return Redirect::to('/');
});

Route::controller('auth', 'Auth\AuthController');

Route::get('posts/create', 'PostController@showPostCreate');

Route::post('posts/create', 'PostController@createPost');

Route::get('/posts', 'PostController@index');

Route::post('/join', 'WelcomeController@join');

Route::get('/contact', 'ContactController@show');

Route::get('/posts/{id}', 'PostController@show');
