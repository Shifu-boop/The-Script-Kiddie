<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bar>
 */
class BarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // short name
            'waldo' => $this->faker->optional()->sentence(), // nullable
            'grault' => $this->faker->randomFloat(5, 2.0, 4.0), // float value with 5 decimals
            'user_id' => User::factory(), // this generates a user and links it
        ];
    }
}
