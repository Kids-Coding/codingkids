<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'html';
        $lesson->link = 'https://google.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'html';
        $lesson->link = 'https://yahoo.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'html';
        $lesson->link = 'https://github.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'css';
        $lesson->link = 'https://reddit.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'css';
        $lesson->link = 'https://facebook.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'css';
        $lesson->link = 'https://nba.com';
        $lesson->save();
    
        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'php';
        $lesson->link = 'https://reddit.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'php';
        $lesson->link = 'https://facebook.com';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'php';
        $lesson->link = 'https://nba.com';
        $lesson->save();
    }

}