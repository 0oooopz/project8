<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	for($i = 0; $i < 5; $i++) {
		    DB::table('categories')->insert([
			    'name' => $faker->word(),
			    'slug' => $faker->word(),
			    'description' => $faker->sentence('10'),
			    'created_at' => now(),
			    'updated_at' => now(),
		    ]);
	    }
    }
}
