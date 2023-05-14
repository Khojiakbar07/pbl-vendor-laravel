<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
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
        $name = "Product ".$this->faker->sentence(2);
        $date = $this->faker->dateTimeThisMonth();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            'supplier_id' => Supplier::all()->random()->id,
            'current_stock' => '500',
            'featured' => '0',
            'description' => $this->faker->text(400),
            'short_description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2, 200000, 1500000),
            'image' => $this->faker->imageUrl(500, 500, null, true, 'Product', false, 'jpg'),
            'updated_at' => $date,
            'created_at' => $date,
        ];
    }
}
