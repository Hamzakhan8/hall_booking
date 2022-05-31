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
            // 'avatar' => $this->text($maxNbChars = 100),
            'contact' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->text($maxNbChars = 100),
            'description' => $this->faker->text($maxNbChars = 100)
        ];
    }
}
