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

// actual index page
// Route::get('/', 'HomeController@showIndex');

//temp landing page
Route::get('/', 'HomeController@showTemp');

//login
Route::get('/login', 'HomeController@loginForm');
Route::post('/login', 'HomeController@doLogin');

//logout
Route::get('/logout', 'HomeController@doLogout');

Route::get('/lessons', 'HomeController@lessons');

