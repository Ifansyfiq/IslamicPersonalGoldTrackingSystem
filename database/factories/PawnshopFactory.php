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
            'arrahnu_type' => $this->faker->company(),
            'arrahnu_name' => $this->faker->company(),
            'margin' => $this->faker->numberBetween(70, 85),
            'loan_duration' => $this->faker->word(),
            'safekeep_rate1' => $this->faker->word(),
            'safekeep_rate2' => $this->faker->word(),
            'safekeep_rate3' => $this->faker->word(),
            'agent_name' => $this->faker->name(),
            'agent_contact_num' => $this->faker->phoneNumber(),
            'sun' => $this->faker->word(),
            'mon' => $this->faker->word(),
            'tue' => $this->faker->word(),
            'wed' => $this->faker->word(),
            'thu' => $this->faker->word(),
            'fri' => $this->faker->word(),
            'sat' => $this->faker->word(),
            'email' => $this->faker->email(),
            'hotline' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'website_link' => $this->faker->url(),
            'user_id' => User::inRandomOrder()->pluck('id')->first(),

        ];
    }
}
