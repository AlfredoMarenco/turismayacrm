<?php

namespace Database\Factories;

use App\Models\Concept;
use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Itinerary>
 */
class ItineraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'time' => $this->faker->time('H:i:s','now'),
            'description' => $this->faker->paragraph(),
            'comments' => $this->faker->paragraph(),
            'concept_id' => Concept::all()->random()->id
        ];
    }
}