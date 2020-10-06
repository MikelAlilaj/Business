<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 90000) as $index) {
            \App\Business::insert([
                'web_status' => 'approved',
                'user_id' => 2,
                'subject_name' => $faker->sentence(3),
                'legale_status' => $faker->sentence(3),
                'status' => $faker->sentence(3),
                'creation_year' => $faker->sentence(3),
                'nuis' => $faker->sentence(3),
                'category_id' => 1,
                'phone' => 01561551515,
                'email' => $faker->freeEmail,
                'latitude' =>41.329149606897694,
                'longtitude' => 19.820502444457983,
                'official_address' => $faker->sentence(3),
                'initial_capital' => 25550,
                'company_service_description' => $faker->sentence(3),
                'state_id' => 1,
                'city_id' => 1,
                'verified' => $faker->sentence(3),
                'adm_first_name' => $faker->sentence(3),
                'adm_last_name' => $faker->sentence(3),
                'adm_phone' => 55925925959,
                'adm_email' => $faker->freeEmail,
                'adm_percentage' =>59
            ]);
        }
    }
}
