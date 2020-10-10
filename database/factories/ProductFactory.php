<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->text(10),
            'category_id' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->text(50),
            'image_url' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(0, 500000),
            'sale_percent' => $this->faker->numberBetween(0, 100),
            'stocks' => $this->faker->randomNumber(),
            'is_active' => 1,
        ];
    }
}
