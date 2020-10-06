<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 100000) as $index) {
            \App\User::insert([
                'firstname' => $faker->sentence(3),
                'lastname' => $faker->sentence(3),
                'phone' => $faker->sentence(3),
                'email' => $faker->freeEmail,
                'password' => bcrypt('test123456')
            ]);
        }
    }
}
