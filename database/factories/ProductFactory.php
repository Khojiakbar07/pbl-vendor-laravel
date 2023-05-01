<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(3);
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'user_id' => User::all()->random()->id,
            'description' => $this->faker->text(400),
            'short_description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2, 200000, 1500000)
        ];
    }
}
