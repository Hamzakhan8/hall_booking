<?php

namespace Database\Factories;

use App\Models\Transactions;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionsFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transactions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaction_id' => $this->faker->uuid,
            'amount' => $this->faker->randomElement(['1000', '2000', '4000']),
            'date' => $this->faker->date($formate = 'Y-m-d', $max = 'now'),
            'card_cvc' => $this->faker->randomElement(['123', '456', '789']),
            'exp_month' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            'exp_year' => $this->faker->randomElement(['2023', '2024', '2025']),
            'card_last_4' => $this->faker->randomElement(['1234', '5678']),
        ];
    }
}
