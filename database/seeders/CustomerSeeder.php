<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // use faker
        $faker = \Faker\Factory::create();
        // add 100 companies
        for ($i = 0; $i < 100; $i++) {
            \DB::table('customers')->insert([
                'name' => $faker->company,
                'slogan' => $faker->catchPhrase,
                'email' => $faker->companyEmail,
                'website' => $faker->url,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'country' => $faker->country,
                'zip' => $faker->postcode,
                'phone' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
