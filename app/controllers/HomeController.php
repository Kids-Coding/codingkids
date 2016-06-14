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
		if(Auth::check())
		{
			Session::flash('errorMessage', 'Stop dickin\' around and work');
			return Redirect::back();
		}
		return View::make('index');
	}

	public function loginForm()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
			Session::flash('successMessage', 'Login successful');
			return Redirect::intended('/lessons');
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

	public function lesson()
	{
		return View::make('lesson');
	}

    public function account()
    {
        return View::make('account');
    }

	public function signupForm()
	{
		return View::make('signup');
	}

	public function doSignUp()
  {
    // create the validator
    $validator = Validator::make(Input::all(), User::$rules);
    // attempt validation
    if ($validator->fails()) {
        // validation failed, redirect to the post create page with validation errors and old inputs\
      Session::flash('errorMessage', 'Account not created.');
      // Create log of all info to be passed
     // $Log::info(Input::all()); --------    ------  ~$Log Not Defined~
      return Redirect::back()->withInput()->withErrors($validator);
    }
    // validation succeeded, create and save the post
    $user = new User();
    $user->parentName = Input::get('parentName');
    $user->childName = Input::get('childName');
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
    Session::flash('successMessage', 'Welcome ' . ucwords($user->username));
    return Redirect::intended('/lessons');
    //return Redirect::action('HomeController@profile', $user->$id);
  }


}