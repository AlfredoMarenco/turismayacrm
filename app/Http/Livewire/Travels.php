<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use Carbon\Carbon;
use Livewire\Component;

class Travels extends Component
{
    public $dates;
    public $budget;
    public $modal_liquidate_travel = false;

    public $travel_name;
    public $start_date;
    public $end_date;
    public $qty_bus = 1;
    public $km_bus = 0;
    public $passangers_bus = 1;
    public $laps_bus = 0;
    public $performance_bus = 1;
    public $liters_bus = 0;
    public $disel_price_bus = 0;
    public $disel_cost_bus = 0;
    public $salary_bus = 0;
    public $per_diem_bus = 0;
    public $hotel_bus = 0;
    public $tax_burden_bus = 0;
    public $flor_rigth_bus = 0;
    public $booths_bus = 0;
    public $maintenance_bus = 0;
    public $amenities_bus = 0;
    public $sublet_bus = 0;
    public $total_cost_bus = 0;
    public $utility_percentage_bus = 1;
    public $utility_bus = 0;
    public $qty_pickup = 1;
    public $km_pickup = 0;
    public $passangers_pickup = 1;
    public $laps_pickup = 0;
    public $performance_pickup = 1;
    public $liters_pickup = 0;
    public $disel_price_pickup = 0;
    public $disel_cost_pickup = 0;
    public $salary_pickup = 0;
    public $per_diem_pickup = 0;
    public $hotel_pickup = 0;
    public $tax_burden_pickup = 0;
    public $flor_rigth_pickup = 0;
    public $booths_pickup = 0;
    public $maintenance_pickup = 0;
    public $amenities_pickup = 0;
    public $sublet_pickup = 0;
    public $total_cost_pickup = 0;
    public $utility_percentage_pickup = 1;
    public $utility_pickup = 0;
    public $net_rate_bus = 0;
    public $tax_bus = 0;
    public $total_bus = 0;



    //Real Propierty
    public $travel_name_real;
    public $start_date_real;
    public $end_date_real;
    public $qty_bus_real = 1;
    public $km_bus_real = 0;
    public $passangers_bus_real = 1;
    public $laps_bus_real = 0;
    public $performance_bus_real = 1;
    public $liters_bus_real = 0;
    public $disel_price_bus_real = 0;
    public $disel_cost_bus_real = 0;
    public $salary_bus_real = 0;
    public $per_diem_bus_real = 0;
    public $hotel_bus_real = 0;
    public $tax_burden_bus_real = 0;
    public $flor_rigth_bus_real = 0;
    public $booths_bus_real = 0;
    public $maintenance_bus_real = 0;
    public $amenities_bus_real = 0;
    public $sublet_bus_real = 0;
    public $total_cost_bus_real = 0;
    public $utility_percentage_bus_real = 1;
    public $utility_bus_real = 0;
    public $qty_pickup_real = 1;
    public $km_pickup_real = 0;
    public $passangers_pickup_real = 1;
    public $laps_pickup_real = 0;
    public $performance_pickup_real = 1;
    public $liters_pickup_real = 0;
    public $disel_price_pickup_real = 0;
    public $disel_cost_pickup_real = 0;
    public $salary_pickup_real = 0;
    public $per_diem_pickup_real = 0;
    public $hotel_pickup_real = 0;
    public $tax_burden_pickup_real = 0;
    public $flor_rigth_pickup_real = 0;
    public $booths_pickup_real = 0;
    public $maintenance_pickup_real = 0;
    public $amenities_pickup_real = 0;
    public $sublet_pickup_real = 0;
    public $total_cost_pickup_real = 0;
    public $utility_percentage_pickup_real = 1;
    public $utility_pickup_real = 0;
    public $net_rate_real_pickup = 0;
    public $tax_real_pickup = 0;
    public $total_real_pickup = 0;

    public function mount(){
        $this->dates = new  Carbon();

    }

    public function selectedBudget(Budget $budget){
        $this->modal_liquidate_travel = true;
        $this->budget = $budget;

        $this->travel_name =  $budget->travel_name ;
        $this->start_date =  $budget->start_date ;
        $this->end_date =  $budget->end_date ;
        $this->qty_bus =  $budget->qty_bus ;
        $this->km_bus =  $budget->km_bus ;
        $this->passangers_bus =  $budget->passangers_bus ;
        $this->laps_bus =  $budget->laps_bus ;
        $this->performance_bus =  $budget->performance_bus ;
        $this->liters_bus =  $budget->liters_bus ;
        $this->disel_price_bus =  $budget->disel_price_bus ;
        $this->disel_cost_bus =  $budget->disel_cost_bus ;
        $this->salary_bus =  $budget->salary_bus ;
        $this->per_diem_bus =  $budget->per_diem_bus ;
        $this->hotel_bus =  $budget->hotel_bus ;
        $this->tax_burden_bus =  $budget->tax_burden_bus ;
        $this->flor_rigth_bus =  $budget->flor_rigth_bus ;
        $this->booths_bus =  $budget->booths_bus ;
        $this->maintenance_bus =  $budget->maintenance_bus ;
        $this->amenities_bus =  $budget->amenities_bus ;
        $this->sublet_bus =  $budget->sublet_bus ;
        $this->total_cost_bus =  $budget->total_cost_bus ;
        $this->utility_percentage_bus =  $budget->utility_percentage_bus ;
        $this->utility_bus =  $budget->utility_bus ;
        $this->qty_pickup =  $budget->qty_pickup ;
        $this->km_pickup =  $budget->km_pickup ;
        $this->passangers_pickup =  $budget->passangers_pickup ;
        $this->laps_pickup =  $budget->laps_pickup ;
        $this->performance_pickup =  $budget->performance_pickup ;
        $this->liters_pickup =  $budget->liters_pickup ;
        $this->disel_price_pickup =  $budget->disel_price_pickup ;
        $this->disel_cost_pickup =  $budget->disel_cost_pickup ;
        $this->salary_pickup =  $budget->salary_pickup ;
        $this->per_diem_pickup =  $budget->per_diem_pickup ;
        $this->hotel_pickup =  $budget->hotel_pickup ;
        $this->tax_burden_pickup =  $budget->tax_burden_pickup ;
        $this->flor_rigth_pickup =  $budget->flor_rigth_pickup ;
        $this->booths_pickup =  $budget->booths_pickup ;
        $this->maintenance_pickup =  $budget->maintenance_pickup ;
        $this->amenities_pickup =  $budget->amenities_pickup ;
        $this->sublet_pickup =  $budget->sublet_pickup ;
        $this->total_cost_pickup =  $budget->total_cost_pickup ;
        $this->utility_percentage_pickup =  $budget->utility_percentage_pickup ;
        $this->utility_pickup =  $budget->utility_pickup ;
        $this->net_rate_bus =  $budget->net_rate ;
        $this->tax_bus =  $budget->tax ;
        $this->total_bus =  $budget->total ;
        $this->net_rate_bus =  $budget->net_rate ;
        $this->tax_bus =  $budget->tax ;
        $this->total =  $budget->total ;
    }


    public function render()
    {
        return view('livewire.travels',[
            'travels' => Budget::has('availability','>=',1)->get(),
        ]);
    }
}
