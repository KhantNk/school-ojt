<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course;
        $course->course_id = "2";
        $course->name = "English";
        $course->description = "hello";
        $course->total_lessons = "7";
        $course->start_date = Now();
        $course->course_duration = "90";
        $course->save();
    }
}
