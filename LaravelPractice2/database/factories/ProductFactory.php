<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $buying_price = $this->faker->numberBetween(100,3000);
        $selling_price = $buying_price + 50;

        return [
            'product_name' => $this->faker->unique()->lastName(),
            'SKU' => $this->faker->uuid(),
            'buying_price' => $buying_price,
            'selling_price' => $selling_price,
            'discount' => $this->faker->numberBetween(5,25),
            'sales' => 0
        ];
    }
}
