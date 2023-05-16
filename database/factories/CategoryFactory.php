<?php

namespace Database\Factories;

use App\Enums\CategoryImageEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = "Category ".$this->faker->sentence(2);
        $date = $this->faker->dateTimeThisMonth();
        return [
            'user_id' => User::all()->random()->id,
            //'image' => $this->faker->imageUrl(500, 500, null, true, 'Category', false, 'jpg'),
            'image' => $this->faker->randomElement(CategoryImageEnum::cases()),
            'icon' => $this->faker->sentence(2),
            'name' => $name,
            'slug' => Str::slug($name),
            'updated_at' => $date,
            'created_at' => $date,
        ];
    }
}
