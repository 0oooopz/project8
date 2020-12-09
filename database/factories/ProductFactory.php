<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
	        'sku' => $this->faker->numberBetween(10000, 20000),
	        'name' => $this->faker->name(),
	        'slug' => $this->faker->word(),
	        'description' => $this->faker->sentence(6),
	        'price_user' => $this->faker->randomFloat(2, 180, 200),
	        'price_3_opt' => $this->faker->randomFloat(2, 160, 179),
	        'price_8_opt' => $this->faker->randomFloat(2, 140, 159),
	        'price_dealer' => $this->faker->randomFloat(2, 120, 139),
	        'price_vip' => $this->faker->randomFloat(2, 100, 119),
	        'category_id' => $this->faker->numberBetween(1, 10),
	        'stock' => $this->faker->numberBetween(1, 100),
	        'created_at'=> now(),
	        'updated_at'=> now(),
        ];
    }
}



