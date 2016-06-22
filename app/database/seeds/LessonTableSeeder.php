<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'html';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjhkjh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Head and title tags';
        $lesson->category = 'html';
        $lesson->yt_id = 'kqXaRmY7SVA';
        $lesson->summary = '';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Body Tags and More!!';
        $lesson->category = 'html';
        $lesson->yt_id = '4ChUhNWug';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson4';
        $lesson->category = 'html';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'css';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'css';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'css';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson4';
        $lesson->category = 'css';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();
    
        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'php';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'php';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'php';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson4';
        $lesson->category = 'php';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();
    }

}