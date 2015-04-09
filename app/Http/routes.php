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

Route::get('/', 'StaticController@home');

Route::get('/home', function () {
    return Redirect::to('/');
});

Route::controller('/auth', 'Auth\AuthController');

Route::controller('/password', 'Auth\PasswordController');


Route::get('/posts', 'PostController@index');

Route::post('/join', 'WelcomeController@join');

Route::get('/contact', 'StaticController@contact');

Route::get('/blog/{id}', 'PostController@show');

Route::post('/thank-you', 'MailingController@create');

Route::get('/donate', 'DonationController@index');

Route::get('/credit-card/{id}', 'DonationController@show');

Route::post('/credit-card', 'DonationController@render');

Route::get('/about', 'StaticController@about');

Route::get('/blog', 'PostController@index');