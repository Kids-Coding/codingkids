<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'html';
        $lesson->link = 'https://google.com';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'html';
        $lesson->link = 'https://yahoo.com';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'html';
        $lesson->link = 'https://github.com';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'css';
        $lesson->link = 'https://reddit.com';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'css';
        $lesson->link = 'https://facebook.com';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'css';
        $lesson->link = 'https://nba.com';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->save();
    
        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'php';
        $lesson->link = 'https://reddit.com';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'php';
        $lesson->link = 'https://facebook.com';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'php';
        $lesson->link = 'https://nba.com';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->save();
    }

}