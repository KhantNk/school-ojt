<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone01' => $faker->phoneNumber,
        'phone02' => $faker->phoneNumber,
        'address' => $faker->address,
        'gender' => $faker->randomElement(['m', 'f']),
        'join_date' => $faker->date,
        'is_left' => rand(0,1)
    ];
});

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
// class TeacherFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition()
//     {
//         return [
//             //
//         ];
//     }
// }
