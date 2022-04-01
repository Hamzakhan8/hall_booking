<?php

namespace Database\Factories;

use App\Models\Transactions;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
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
            'amount' => $this->faker->randomElements(['1000', '2000', '4000']),
            'date' => $this->faker->date(),
            'card_cvc' => $this->faker->randomElements(['123', '456', '789']),
            'exp_month' => $this->faker->randomElements(['1', '2', '3', '4', '5']),
            'exp_year' => $this->faker->randomElements(['2023', '2024', '2025']),
            'card_last_4' => $this->faker->randomElements(['1234', '5678']),
        ];
    }
}
