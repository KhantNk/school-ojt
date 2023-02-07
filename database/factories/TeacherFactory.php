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
            'phone01' => $this->faker->phoneNumber,
            'phone02' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['m', 'f']),
            'join_date' =>$this->faker->date,
            'is_left' => $this->faker->numberBetween(0,1),
        ];
    }
}
