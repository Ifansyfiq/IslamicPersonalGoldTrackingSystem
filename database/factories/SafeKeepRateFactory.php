<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SafeKeepRate>
 */
class SafeKeepRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rate1' => $this->faker->randomFloat(2, 0.1, 0.9),
            'rate2' => $this->faker->randomFloat(2, 0.1, 0.9),
            'rate3' => $this->faker->randomFloat(2, 0.1, 0.9),
        ];
    }
}
