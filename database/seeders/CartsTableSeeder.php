<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;


class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->get();
        $products = DB::table('products')->get()->random(random_int(1,20));

        foreach($users as $user) {
            $products->map(function ($el) use ($user) {
                DB::table('carts')->insert([
                    'user_id' => $user->id,
                    'product_id' => $el->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            });
        }
    }
}
