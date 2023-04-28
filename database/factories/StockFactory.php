<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => Item::all()->random()->id,
            'user_id' =>  User::all()->random()->id,
            'quantity' => fake()->numberBetween(0, 100),
            'type' => fake()->randomElement(['sale', 'purchase']),
        ];
    }
}
