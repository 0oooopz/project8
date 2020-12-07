<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	for($i=0; $i < 30; $i++) {
		    DB::table('products')->insert([
			    'sku' => $faker->numberBetween(10000, 20000),
			    'name' => $faker->name(),
			    'description' => $faker->sentence(6),
			    'price_user' => $faker->randomFloat(2, 180, 200),
			    'price_3_opt' => $faker->randomFloat(2, 160, 179),
			    'price_8_opt' => $faker->randomFloat(2, 140, 159),
			    'price_dealer' => $faker->randomFloat(2, 120, 139),
			    'price_vip' => $faker->randomFloat(2, 100, 119),
			    'category_id' => $faker->numberBetween(1, 10),
			    'stock' => $faker->numberBetween(1, 100),
			    'created_at'=> now(),
			    'updated_at'=> now(),
		    ]);
	    }
    }
}
