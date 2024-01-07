<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PeopleSeeder extends Seeder
{
    public function run(Faker $faker)
    {
      $numberOfPeopleSeed = 200;

      for ($i = 0; $i < $numberOfPeopleSeed; $i++) {
          DB::table('people')->insert([
              'first_name' =>   $faker->firstName,
              'last_name' =>    $faker->lastName,
              'email' =>        $faker->unique()->safeEmail,
              'phone' =>        $faker->phoneNumber,
              'street' =>       $faker->streetName,
              'city' =>         $faker->city,
              'country' =>      $faker->country,
              'created_at' =>   now(),
              'updated_at' =>   now(),
          ]);
      }
    }
}
