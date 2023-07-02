<?php

namespace Database\Factories;

use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Availability>
 */
class AvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $budget = Budget::all()->random();
        return [
            'title' => $budget->name,
            'start' => $budget->date,
            'comment' => $this->faker->paragraph(),
            'budget_id' => $budget->id
        ];
    }
}
