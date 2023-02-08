<?php

namespace Database\Factories;

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
            'course_id' => $this->faker->unique()->numberBetween(1, 10),
            'name' => $this->faker->name,
            'description' => $this->faker->text(20),
            'total_lessons' => $this->faker->numberBetween(1, 12),
            'start_date' => $this->faker->date,
            'course_duration' => $this->faker->numberBetween(1, 100),
            'teacher_id' => rand(1, \App\Models\Teacher::all()->count())
        ];
    }
}
