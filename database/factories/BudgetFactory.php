<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'date' => $this->faker->date(),
            'status' => $this->faker->numberBetween(0,1),
            'enable_tax' => $this->faker->numberBetween(0,1),
            'user_id' => User::all()->random()->id ,
            'comment' => $this->faker->paragraph() ,
            'status_voucher' => $this->faker->numberBetween(0,1),
        ];
    }
}
