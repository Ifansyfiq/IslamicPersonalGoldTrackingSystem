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
            'safekeep_rate1' => $this->faker->word(),
            'safekeep_rate2' => $this->faker->word(),
            'safekeep_rate3' => $this->faker->word(),
            'agent_name' => $this->faker->name(),
            'agent_contact_num' => $this->faker->phoneNumber(),
            'sun_start' => $this->faker->time(),
            'sun_end' => $this->faker->time(),
            'mon_start' => $this->faker->time(),
            'mon_end' => $this->faker->time(),
            'tue_start' => $this->faker->time(),
            'tue_end' => $this->faker->time(),
            'wed_start' => $this->faker->time(),
            'wed_end' => $this->faker->time(),
            'thu_start' => $this->faker->time(),
            'thu_end' => $this->faker->time(),
            'fri_start' => $this->faker->time(),
            'fri_end' => $this->faker->time(),
            'sat_start' => $this->faker->time(),
            'sat_end' => $this->faker->time(),
            'email' => $this->faker->email(),
            'hotline' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'coordinate' => $this->faker->latitude() . ',' . $this->faker->longitude(),
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
            'safekeep_rate_id' => SafeKeepRate::inRandomOrder()->pluck('id')->first(),

        ];
    }
}
