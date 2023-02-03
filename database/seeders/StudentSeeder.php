<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 16; $i++) {
            $student = new Student;
            $student->name = $faker->name;
            $student->phone01 = $faker->phoneNumber;
            $student->email = $faker->email;
            $student->gender = "female";
            $student->address = $faker->address;
            $student->dob = $faker->date;
            $student->save();
        }
    }
}
