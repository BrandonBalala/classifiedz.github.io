<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $statuses = array('ACTIVE', 'PURCHASED', 'INACTIVE', 'REMOVED');

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            $randomNumber = $faker->numberBetween(0,3);

            Product::create([
            	'user_id' => $faker->numberBetween(1,25),
                'category_id' => $faker->numberBetween(1,13),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
                'status' => $statuses[$randomNumber]
            ]);
        }
    }
}