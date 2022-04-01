<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'avatar' => $this->faker->image($dir = public_path('storage/profile_img'),
            $width = 640, $height = 480),
            'contact' => $this->faker->randomElement(['03323847766',
            '02213456782', '00023438877']),
            'address' => $this->faker->text($maxNbChars = 100),
            'description' => $this->faker->text($maxNbChars = 100)
        ];
    }
}
