<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
            Customer::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'document' => $faker->sentence,
            ]);
        }
    }
}
