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
Route::get('/', 'HomeController@showIndex');

//temp landing page
// Route::get('/', 'HomeController@showTemp');

//login
Route::get('/login', 'HomeController@loginForm');
Route::post('/login', 'HomeController@doLogin');

//logout
Route::get('/logout', 'HomeController@doLogout');

//lessons
Route::get('/lessons', 'HomeController@lessons');

//signup
Route::get('signup', 'HomeController@signupForm');
Route::post('signup', 'HomeController@doSignup');

//lessons
Route::resource('lessons', 'LessonsController');


//test thing
Route::get('orm-test', function ()
{
    // test code here
});

