<?php

namespace Database\Factories;

use App\Models\Hall;
use Illuminate\Database\Eloquent\Factories\Factory;

class HallFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hall::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'halls_category_id' => $this->faker->randomDigit,
            'title' => $this->faker->text,
            'images' => $this->faker->image($dir = public_path('upload/customer'),
            $width = 640, $height = 480),
            'description' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
