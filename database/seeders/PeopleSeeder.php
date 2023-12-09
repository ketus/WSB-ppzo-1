<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
      $faker = Faker::create();
      $numberOfPeopleSeed = 200;

      for ($i = 0; $i < $numberOfPeopleSeed; $i++) {
          \DB::table('people')->insert([
              'name' => $faker->name,
              'email' => $faker->unique()->safeEmail,
              'created_at' => now(),
              'updated_at' => now(),
          ]);
      }
    }
}
