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
//about page
// Route::get('/about', 'HomeController@about');

//login
Route::get('/login', 'HomeController@loginForm');
Route::post('/login', 'HomeController@doLogin');

//logout
Route::get('/logout', 'HomeController@doLogout');

//signup
Route::get('/signup', 'HomeController@signupForm');
Route::post('/signup', 'HomeController@doSignup');

//lessons
Route::resource('lessons', 'HomeController@lessons');
Route::resource('lesson', 'HomeController@lesson');

Route::resource('lessons', 'LessonsController'); // <----------- ISAAC SAID YOU ARE DOING IT WRONG DO LIKE THIS
// P.S. QUIT DICKING AROUND - NICKY

//account
Route::resource('account', 'HomeController@account');



//test thing
Route::get('orm-test', function ()
{
    // test code here
});
