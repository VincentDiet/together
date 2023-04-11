<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'max_participants' => $this->faker->randomNumber(2, false),
            'start_datetime' => $this->faker->dateTime(),
            'duration' => $this->faker->randomDigitNotZero(),
            'adress' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'description' => $this->faker->sentence(12),
            'photo' => $this->faker->imageUrl(),
            'author_id' => $this->faker->randomDigitNotZero(),
            'category_id' => $this->faker->randomDigitNotZero(),
        ];
    }
}
