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

Route::get('/about', 'HomeController@showAbout');

//login
Route::get('/login', 'HomeController@loginForm');
Route::post('/login', 'HomeController@doLogin');

//logout
Route::get('/logout', 'HomeController@doLogout');

//signup
Route::get('/signup', 'HomeController@signupForm');
Route::post('/signup', 'HomeController@doSignup');

//account
Route::get('account', 'HomeController@account');

//lessons controller
Route::resource('lessons', 'LessonsController');

Route::post('/lessons/{$id}', 'LessonController@checkQuiz');

//test thing
Route::get('orm-test', function ()
{
    // test code here
});
