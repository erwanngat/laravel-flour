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
        $images = [
            "Wheat" => "wheat.png",
            "Rice" => "rice.png",
            "Rye" => "rye.png",
            "Barley" => "barley.png",
            "Corn" => "corn.png",
            "Coconut" => "coconut.png",
            "Almond" => "almond.png",
        ];

        $randomName = fake()->randomElement($name);
        $imageName = isset($images[$randomName]) ? $images[$randomName] : 'default.png';    

        return [
            "name" => $randomName,
            "price" => fake()->randomFloat(2, 0, 50),
            "type" => fake()->randomElement($type),
            "mineral_content" => fake()->randomFloat(2, 0, 2),
            "expiry_date" => fake()->dateTimeBetween('now', '+10 week'),
            "image" => $imageName,

        ];
    }
}
