<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' => $this->faker->numberBetween($min = 0, $max = 2),
            'address' => $this->faker->address,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
        ];
    }
}
