<?php 

class LessonsController extends BaseController {

    public function index()
        {
            $lesson = Lesson::all();
            return View::make('lesson.index')->withLesson($lesson);
        }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        return View::make('lesson.show')->with('lesson', $lesson);
    }


}