<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->name = 'Welcome to HTML!!';
        $lesson->category = 'HTML';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjhkjh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Head and title tags';
        $lesson->category = 'HTML';
        $lesson->yt_id = 'kqXaRmY7SVA';
        $lesson->summary = 'dfadfadfdfadf';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Body Tags and More!!';
        $lesson->category = 'HTML';
        $lesson->yt_id = '4ChUhNWug';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Something cool...';
        $lesson->category = 'HTML';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Beginning CSS';
        $lesson->category = 'CSS';
        $lesson->yt_id = 'VK0kjeqCNu0';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Other CSS Tricks';
        $lesson->category = 'CSS';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'External CSS';
        $lesson->category = 'CSS';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'CSS Can Be Fun!!';
        $lesson->category = 'CSS';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();
    
        $lesson = new Lesson();
        $lesson->name = 'What is PHP?';
        $lesson->category = 'PHP';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Easy PHP Practice';
        $lesson->category = 'PHP';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'Another Thing';
        $lesson->category = 'PHP';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'PHP Forever!!';
        $lesson->category = 'PHP';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->quiz = 'you pass';
        $lesson->save();
    }

}