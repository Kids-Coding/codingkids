<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->lessons = 'lesson1';
        $lesson->category = 'html';
        $lesson->link = 'http://google.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson2';
        $lesson->category = 'html';
        $lesson->link = 'http://yahoo.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson3';
        $lesson->category = 'css';
        $lesson->link = 'http://reddit.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson4';
        $lesson->category = 'css';
        $lesson->link = 'http://facebook.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson5';
        $lesson->category = 'css';
        $lesson->link = 'http://nba.com';
        $lesson->save();
    }

}