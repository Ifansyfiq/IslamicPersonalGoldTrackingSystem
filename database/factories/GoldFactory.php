<?php

namespace Database\Factories;

use App\Models\GoldType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gold>
 */
class GoldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gold_name' => $this->faker->word(),
            'gold_purity' => $this->faker->word(),
            'weight' => $this->faker->randomDigitNotNull(),
            'purchase_from' => $this->faker->word(),
            'status' =>  $this->faker->randomElement(['Own(Keep)', 'Own(Wear)', 'Pawn', 'Renew Pawn', 'Sell', 'Lost', 'Other']),
            'buy_price' => $this->faker->randomFloat(2, 10, 500.00),
            'sell_price' => $this->faker->randomFloat(2, 10, 500.00),
            'spread' => $this->faker->randomDigitNotNull(),
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
            'goldtype_id' =>  GoldType::inRandomOrder()->pluck('id')->first(),
            
        ];
    }
}
