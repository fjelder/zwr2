<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Line>
 */
class LineFactory extends Factory
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
            'number' => $this->faker->numberBetween($min = 400, $max = 999),
            'stationA' => $this->faker->city(),
            'stationB' => $this->faker->city(),
        ];
    }
}
