<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastname(),
            'identification' => $this->faker->ean13(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'manager' => 0,
            'country' => "",
            'cityBirth' => "    "
        ];
    }
}
