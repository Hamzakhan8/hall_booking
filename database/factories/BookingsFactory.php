<?php

namespace Database\Factories;

use App\Models\Bookings;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_date' => $this->faker->date($formate = 'Y-m-d' , $max = 'now'),
            'checkin_date' => $this->faker->date($formate = 'Y-m-d' , $max = 'now'),
            'checkout_date' => $this->faker->date($formate = 'Y-m-d' , $max = 'now'),
        ];
    }
}
