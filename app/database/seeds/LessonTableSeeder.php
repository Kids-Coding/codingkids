<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->lessons = 'lesson1';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson2';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson3';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson4';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->lessons = 'lesson5';
        $lesson->save();
    }

}