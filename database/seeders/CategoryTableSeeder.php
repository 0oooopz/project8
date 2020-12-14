<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::factory()->count(5)->create()->each(function($cat){
    		Product::factory()->count(20)->create()->concat($cat);
	    });
    }
}
