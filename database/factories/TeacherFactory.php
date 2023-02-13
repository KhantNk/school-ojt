<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone01' => $this->faker->numerify('###-###-####'),
            'phone02' => $this->faker->numerify('###-###-####'),
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['m', 'f']),
            'join_date' =>$this->faker->date,
            'is_left' => $this->faker->boolean()
        ];
    }
}
