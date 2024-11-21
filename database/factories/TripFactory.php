<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'activity_name' => $this->faker->words(3, true),
            'description' => $this->faker->realText(10),
            'image' => $this->faker->imageUrl(640, 480, 'travel', true),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'category' => $this->faker->randomElement(['with_family', 'with_friends', 'with_partner']),
            'contact' => $this->faker->phoneNumber,
            'location' => $this->faker->city,
            // 'averageRating' => $this->faker->randomFloat(1, 1, 5),
            // 'activity_id' => Str::uuid(),
            // 'date' => $this->faker->dateTimeThisYear(),
            // 'reviews' => $this->faker->numberBetween(0, 500),
        ];
    }
}
