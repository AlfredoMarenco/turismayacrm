<?php

namespace Database\Factories;

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
            'date' => $this->faker->date('Y-m-d'),
            'description' => $this->faker->paragraph(),
            'comments' => $this->faker->paragraph(),
            'voucher_id' => Voucher::all()->random()->id
        ];
    }
}
