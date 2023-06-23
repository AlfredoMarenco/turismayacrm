<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concept>
 */
class ConceptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $km = $this->faker->numberBetween(1, 100);
        $laps = $this->faker->numberBetween(1,20);
        $performance = $this->faker->numberBetween(4,6);
        $liters = ($km*$laps)/($performance);
        $admin_expense = 550;
        $disel_price = 22.5;
        $tax_burden = 79.23;
        $maintenace = 272.82;
        $disel_cost = $disel_price*$liters;
        $salary = $this->faker->numberBetween(0, 3000);
        $per_diem = $this->faker->numberBetween(0, 3000);
        $hotel = $this->faker->numberBetween(0, 3000);
        $flor_rigth = $this->faker->numberBetween(0, 600);
        $booths = $this->faker->numberBetween(0, 10);
        $amenities = $this->faker->numberBetween(0, 3000);
        $sublet = $this->faker->numberBetween(0, 3000);
        $total_cost = $disel_cost+$salary+$per_diem+$hotel+$tax_burden+$flor_rigth+$booths+$amenities+$sublet+$maintenace+$admin_expense;
        $utility_percentage = $this->faker->numberBetween(100, 200);
        $utility = $total_cost * ($utility_percentage/100);
        $net_rate = (($utility + $total_cost));
        $tax = $net_rate *.16;
        $total = $tax + $net_rate;

        return [
            'date' => $this->faker->date('Y-m-d'),
            'description' => $this->faker->paragraph(),
            'km' => $km,
            'admin_expense' => $admin_expense,
            'laps' => $laps,
            'performance' => $performance,
            'liters' => $liters,
            'disel_price' => $disel_price,
            'disel_cost' => $disel_cost,
            'salary' => $salary,
            'per_diem' => $per_diem,
            'hotel' => $hotel,
            'tax_burden' => $tax_burden,
            'flor_rigth' => $flor_rigth,
            'booths' => $booths,
            'maintenance' => $maintenace,
            'amenities' => $amenities,
            'sublet' => $sublet,
            'total_cost' => $total_cost,
            'utility_percentage' => $utility_percentage,
            'utility' => $utility,
            'net_rate' => $net_rate,
            'tax' => $tax,
            'total' => $total,
            'vehicle_id' => Vehicle::all()->random()->id,

        ];
    }
}
