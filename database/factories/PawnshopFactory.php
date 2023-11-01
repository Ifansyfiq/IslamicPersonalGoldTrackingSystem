<?php

namespace Database\Factories;

use App\Models\SafeKeepRate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pawnshop>
 */
class PawnshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arrahnu_type' => $this->faker->randomElement(['YaPEIM', 'Maidam', 'Agro Bank']),
            'arrahnu_name' => $this->faker->company(),
            'margin' => $this->faker->numberBetween(70, 85),
            'loan_duration' => $this->faker->randomElement(['1-2', '4-5', '1-6']),
            'agent_name' => $this->faker->name(),
            'agent_contact_num' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'hotline' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'coordinate' => $this->faker->latitude() . ',' . $this->faker->longitude(),
            'operation_time' => $this->faker->randomElement(['9.00 am - 5.00 pm', '9.00 am - 6.00 pm', '9.00 am - 7.00 pm', '9.00 am - 8.00 pm', '9.00 am - 9.00 pm']),
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
            'safekeep_rate_id' => SafeKeepRate::inRandomOrder()->pluck('id')->first(),

        ];
    }
}
