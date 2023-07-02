<?php

namespace Database\Factories;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model' => $this->faker->word(),
            'id_unit' => $this->faker->numberBetween(1,20),
            'plate' => $this->faker->bothify('?????-#####'),
            'insurance_policy' => $this->faker->date('Y-m-d'),
            'mechanical_checks' => $this->faker->date('Y-m-d'),
            'smoke_checks' => $this->faker->date('Y-m-d'),
            'status' => $this->faker->randomElement([Unit::ACTIVE,Unit::MANTENICE,Unit::INACTIVE]),
        ];
    }
}
