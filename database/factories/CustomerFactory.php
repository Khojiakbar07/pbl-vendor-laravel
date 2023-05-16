<?php

namespace Database\Factories;

use App\Enums\UserImageEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = "Customer ".$this->faker->sentence(2);
        $date = $this->faker->dateTimeThisMonth();
        return [
            'name' => $name,
            //'image' => $this->faker->imageUrl(500, 500, null, true, 'Category', false, 'jpg'),
            'image' => $this->faker->randomElement(UserImageEnum::cases()),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'birthday' => $this->faker->dateTimeInInterval('-30 years', '-16 years'),
            'updated_at' => $date,
            'created_at' => $date,
        ];
    }
}
