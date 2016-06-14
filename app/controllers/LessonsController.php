<?php 

class LessonsController extends BaseController {

    public function index()
        {
            if(Auth::check()){
                $lessons = Lesson::all();
                return View::make('lesson.index')->with('lessons', $lessons);
            } else {
                Session::flash('errorMessage', 'You must be logged in to view this page.');
                return Redirect::action('HomeController@showIndex');
            }
        }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        return View::make('lesson.show')->with('lesson', $lesson);
    }


}