<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Unit;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->numberBetween(0,1);

        if ($type) {
            return [
                'driver_name' => $this->faker->name(),
                'driver_phone' => $this->faker->phoneNumber(),
                'unit' => $this->faker->sentence(2,true),
                'observations' => $this->faker->paragraph(),
                /* 'driver_id' => Driver::all()->random()->id,
                'unit_id' => Unit::all()->random()->id, */
                'vehicle_id' => Vehicle::all()->random()->id,
            ];
        }else{
            return [
                /* 'driver_name' => $this->faker->name(),
                'driver_phone' => $this->faker->phoneNumber(),
                'unit' => $this->faker->sentence(2,true), */
                'observations' => $this->faker->paragraph(),
                'driver_id' => Driver::all()->random()->id,
                'unit_id' => Unit::all()->random()->id,
                'vehicle_id' => Vehicle::all()->random()->id,
            ];
        }
    }
}
