<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18,40),
            'phone' => $this->faker->phoneNumber(),
            'license_validity' => $this->faker->date('y-m-d'),
            'psychometric' => $this->faker->date('y-m-d')
        ];
    }
}
