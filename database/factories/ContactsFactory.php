<?php

namespace Database\Factories;

use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'mobile' => $this->faker->e164PhoneNumber,
            'your_message' => $this->faker->text,
        ];
    }
}
