<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(100, 500),
            'year' => $this->faker->numberBetween(1990, 2022),
            'product_type' => $this->faker->randomElement(['fruit', 'vegitable', 'grains']),
        ];
    }
}
