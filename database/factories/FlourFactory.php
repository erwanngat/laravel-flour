<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flour>
 */
class FlourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ["Eating", "Consumption", "Other"];
        $name = ["Wheat", "Rice", "Almond", "Rye", "Barley", "Corn", "Coconut"];
        return [
            "name" => fake()->randomElement($name),
            "price" => fake()->randomFloat(2, 0, 50),
            "type" => fake()->randomElement($type),
            "mineral_content" => fake()->randomFloat(2, 0, 2),
            "expiry_date" => fake()->dateTimeBetween('now', '+10 week'),
        ];
    }
}
