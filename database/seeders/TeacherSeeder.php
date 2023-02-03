<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $teacher = new Teacher;
            $teacher->name = $faker->name;
            $teacher->email = $faker->email;
            $teacher->phone01 = $faker->phoneNumber;
            $teacher->phone02 = $faker->phoneNumber;
            $teacher->address = $faker->address;
            $teacher->gender = "female";
            $teacher->join_date = $faker->date;
            $teacher->is_left = "0";
            $teacher->save();
        }
    }
}
