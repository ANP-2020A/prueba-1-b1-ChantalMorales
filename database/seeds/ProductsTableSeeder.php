<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
            Product::create([
                'name' => $faker->sentence,
                'code' => $faker->postcode,
                'price' => $faker->numberBetween(10,20),
                'status' => 'active',
            ]);
        }
    }
}
