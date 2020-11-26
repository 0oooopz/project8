<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $i = 1;
        while($i <= 10):
            DB::table('users')->insert([
                'name' => $faker->name,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'role' => $faker->randomElement(['admin','user']),
                'gender' => $faker->randomElement(['male','female']),
                'salary' => rand('0','3000'),
                'email' => $faker->unique()->email,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        $i++;
        endwhile;
    }
}
