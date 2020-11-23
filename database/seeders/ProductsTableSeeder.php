<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        $i = 1;
        while($i <= 300):
            DB::table('products')->insert([
                'name' => join(' ', $faker->words(4)),
                'price' => $faker->randomFloat(2,10,1000),
                'description' => $faker->sentence(),
                'amount' => $faker->numberBetween(0,100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $i++;
        endwhile;
    }
}
