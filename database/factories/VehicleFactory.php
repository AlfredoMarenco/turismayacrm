<?php

namespace Database\Factories;

use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'type' => $this->faker->numberBetween(1,2),
                'pax' => $this->faker->numberBetween(1,30),
                'budget_id' => Budget::all()->random()->id,
            ];
    }
}
