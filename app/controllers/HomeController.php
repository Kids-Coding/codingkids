<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showTemp()
	{
		return View::make('temp');
	}

	public function showIndex()
	{
		return View::make('index');
	}

	public function loginForm()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		$username = Input::get('username');

		if (Auth::attempt(array('email' => $email, 'password' => $password, 'username' => $username)))
		{
			Session::flash('successMessage', 'Login successful');
			return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Login failed');
			return Redirect::back()->withInput();
		}
	}

	public function doLogout()
	{
		if (Auth::check())
		{
			Auth::logout();
			Session::flash('successMessage', 'Come back soon');
			return Redirect::action('HomeController@showIndex');
		} else {
			return Redirect::action('HomeController@showIndex');
		}
	}

	public function lessons()
	{
		return View::make('lessons');
	}

	public function signupForm()
	{
		return View::make('signup');
	}

	// not sure if ill need this yet...might be used in store
	// public function validate()
	// {
	// 	$validator = Validator::make(Input::all(), Post::$rules);

	// 	if ($validator->fails()) {
	// 		return Redirect::back()->withInput()->withErrors($validator);
	// 	} else {
	// 		$user = new User();
	// 		$user->email = Input::get('email');
	// 		$user->username = Input::get('username');
	// 		$user->password = Input::get('password');
	// 		$user->save();
	// 	}
	// }

	public function doSignup()
	{

		$data = Input::all();
		$rules = array(
			'email' => 'required|email',
			'username' => 'required',
			'password' => 'required|min:3|confirmed',
			'password_confirmation' => 'required|min:3'
			);

		$validator = Validator::make($data, $rules);

		if ($validator->passes())
		{
			return 'User created';
			Session::flash('successMessage', 'User created');
		}

		return Redirect::to('/')->withErrors($validator);

	}


}
