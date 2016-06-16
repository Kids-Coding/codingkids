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
		if(Auth::check()){
			Session::flash('errorMessage' , 'You are already logged in.');
			return Redirect::intended('/account');
		} else {
			return View::make('login');
		}
	}

	public function doLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password), true))
		{
			Session::flash('successMessage', 'Login successful');
			return Redirect::intended('/account');
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
    	if(Auth::check()){
    		$htmlLessons = Lesson::where('category', 'html')->lists('id');
    		$completedLessons = LessonUser::where('user_id', Auth::user()->id)->lists('lesson_id');
    		$htmlCompleteNumber = array_intersect($htmlLessons, $completedLessons);

        	return View::make('account')->with('htmlCompleteNumber', $htmlCompleteNumber)->with('htmlLessons', $htmlLessons);
    	} else {
    		Session::flash('errorMessage', 'You must be logged in to view this page.');
    		return Redirect::intended('/login');
    	}
    }

	public function signupForm()
	{
		if(Auth::check()){
			Session::flash('errorMessage' , 'You already have an account.');
			return Redirect::intended('/account');
		} else {
			return View::make('signup');
		}
	}

  public function doSignUp()
	{
	    $validator = Validator::make(Input::all(), User::$rules);
	    if ($validator->fails()) {
	        Session::flash('errorMessage', 'Account not created.');
      		return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        $user = new User();
		    $user->parentName = Input::get('parentName');
		    $user->childName = Input::get('childName');
		    $user->username = Input::get('username');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
			Session::flash('successMessage', 'Welcome ' . $user->childName . '! Your account has been successfully created.');
			Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));
			return Redirect::intended('/account');
		}
	}


  public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		Session::flash('successMessage', 'Your account was successfully deleted.');
		return Redirect::intended('/');
	}


}