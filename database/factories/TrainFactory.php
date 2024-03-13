<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'company' => fake()->company(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'departure_date' => fake()->dateTimeBetween('-1 day', '+3 day'),
            'train_code' => fake()->randomNumber(4, true),
            'carriages_number' => fake()->randomDigitNotNull(),
            'is_delayed' => fake()->boolean(),
            'is_cancelled' => fake()->boolean(),
        ];
    }
}
