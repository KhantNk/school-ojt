<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => rand(1, 4),
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'total_lessons' => rand(1, 7),
            'start_date' => now(),
            'course_duration' => rand(1, 30)
        ];
    }
}
