<?php

namespace Database\Seeders;

use App\Models\Availability;
use App\Models\Budget;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budgets = Budget::all();

        foreach ($budgets as $budget) {
            Availability::create([
                'title' => $budget->name,
                'start' => Carbon::parse($budget->date)->format('Y-m-d'),
                'budget_id' => $budget->id
            ]);
        }


        /* Availability::factory(20)->create(); */
    }
}
