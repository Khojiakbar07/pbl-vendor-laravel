<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = "Supplier ".$this->faker->sentence(2);
        $date = $this->faker->dateTimeThisMonth();
        return [
            'user_id' => User::all()->random()->id,
            'name' => $name,
            'phone' => $this->faker->phoneNumber(),
            'company' => $this->faker->company(),
            'address' => $this->faker->sentence(4),
            'note' => $this->faker->sentence(10),
            'updated_at' => $date,
            'created_at' => $date,
        ];
    }
}
