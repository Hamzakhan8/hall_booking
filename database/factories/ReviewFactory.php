<?php

namespace Database\Factories;

use App\Models\Hall;
use App\Models\Reviews;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hall_id' => $this->faker->randomDigit,
            'reviews' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
        ];
    }
}
