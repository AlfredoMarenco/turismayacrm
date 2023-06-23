<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Split;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Split>
 */
class SplitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->paragraph(),
            'amount' => $this->faker->randomFloat(2,1000,9000),
            'status' => $this->faker->randomElement([Split::PENDIENTE,Split::PAGADO]),
            'payment_type' => $this->faker->randomElement([Split::EFECTIVO,Split::TRANSFERENCIA,Split::CREDITO,Split::PAYPAL,Split::LICITACION]),
            'comment' => $this->faker->paragraph(),
            'payment_id' => Payment::all()->random()->id,
        ];
    }
}
