<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use Carbon\Carbon;
use Livewire\Component;

class Travels extends Component
{
    public $dates;
    public $budget;

    public $message;
    public $percentage_refund ;
    public $refund;
    public $total_paid;
    public $modal_liquidate_travel = false;
    public $table_travels=true;
    public $modal_cancel_travel= false;

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
    public $total_bus = 0;
    public $total_bus_real = 0;
    public $difference_bus = 0;

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
    public $net_rate = 0;
    public $tax = 0;
    public $total = 0;



    public $travel_name_real;
    public $start_date_real;
    public $end_date_real;

    //Real propierties Bus
    public $qty_bus_real = 1;
    public $km_bus_real = 0;
    public $passangers_bus_real = 1;
    public $laps_bus_real = 1;
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

    //Real Properties Pickup
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
        $this->table_travels = false;
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
        $this->net_rate =  $budget->net_rate ;
        $this->tax =  $budget->tax ;
        $this->total =  $budget->total ;

        $this->liters_bus = ($this->km_bus * $this->laps_bus)/($this->performance_bus);
        $this->disel_cost_bus = $this->disel_price_bus*$this->liters_bus;
        $this->total_cost_bus = $this->disel_cost_bus + $this->salary_bus + $this->per_diem_bus + $this->hotel_bus + $this->tax_burden_bus + $this->flor_rigth_bus + $this->booths_bus + $this->amenities_bus + $this->sublet_bus + $this->maintenance_bus;
        $this->utility_bus = $this->total_cost_bus * ($this->utility_percentage_bus/100);
        //Calculo para las camionetas
        $this->liters_pickup_real = ($this->km_pickup_real * $this->laps_pickup_real)/($this->performance_pickup_real);
        $this->disel_cost_pickup_real = $this->disel_price_pickup_real*$this->liters_pickup_real;
        $this->total_cost_pickup_real = $this->disel_cost_pickup_real + $this->salary_pickup_real + $this->per_diem_pickup_real + $this->hotel_pickup_real + $this->tax_burden_pickup_real + $this->flor_rigth_pickup_real + $this->booths_pickup_real + $this->amenities_pickup_real + $this->sublet_pickup_real + $this->maintenance_pickup_real;
        $this->utility_pickup_real = $this->total_cost_pickup_real * ($this->utility_percentage_pickup_real/100);

        $this->net_rate = (($this->qty_bus)*($this->utility_bus + $this->total_cost_bus));
        $this->tax = $this->net_rate *.16;
        $this->total = $this->tax + $this->net_rate;
    }



    public function updated(){
        //Calculo para los autobuses
        try {
            if ($this->km_bus_real != 0) {
                $this->maintenance_bus_real = 66.25;
                $this->tax_burden_bus_real = 40;
            }

            if ($this->km_pickup_real != 0) {
                $this->maintenance_pickup_real = 66.25;
                $this->tax_burden_pickup_real = 40;
            }


            $this->liters_bus_real = ($this->km_bus_real * $this->laps_bus_real)/($this->performance_bus_real);
            $this->disel_cost_bus_real = $this->disel_price_bus_real*$this->liters_bus_real;
            $this->total_cost_bus_real = $this->disel_cost_bus_real + $this->salary_bus_real + $this->per_diem_bus_real + $this->hotel_bus_real + $this->tax_burden_bus_real + $this->flor_rigth_bus_real + $this->booths_bus_real + $this->amenities_bus_real + $this->sublet_bus_real + $this->maintenance_bus_real;
            $this->utility_bus_real = $this->total_cost_bus_real * ($this->utility_percentage_bus_real/100);
            //Calculo para las camionetas
            $this->liters_pickup_real = ($this->km_pickup_real * $this->laps_pickup_real)/($this->performance_pickup_real);
            $this->disel_cost_pickup_real = $this->disel_price_pickup_real*$this->liters_pickup_real;
            $this->total_cost_pickup_real = $this->disel_cost_pickup_real + $this->salary_pickup_real + $this->per_diem_pickup_real + $this->hotel_pickup_real + $this->tax_burden_pickup_real + $this->flor_rigth_pickup_real + $this->booths_pickup_real + $this->amenities_pickup_real + $this->sublet_pickup_real + $this->maintenance_pickup_real;
            $this->utility_pickup_real = $this->total_cost_pickup_real * ($this->utility_percentage_pickup_real/100);

            $this->total_bus_real = (($this->qty_bus_real)*($this->utility_bus_real + $this->total_cost_bus_real))+(($this->qty_bus_real)*($this->utility_bus_real + $this->total_cost_bus_real)*(.16));
            $this->difference_bus = ($this->total) - ($this->total_bus_real);

        } catch (\Throwable $th) {

        }
    }


    public function closeBudget(){
        $this->budget->update([
            'status' => 4
        ]);
        $this->modal_liquidate_travel = false;
        $this->table_travels = true;
    }

    public function deleteBudget(Budget $budget){
        $this->budget = $budget;
        $this->modal_cancel_travel = true;

    }


    public function cancelBudget(){
        $this->budget->update([
            'status' => 4,
        ]);
    }

    public function render()
    {
        return view('livewire.travels',[
            'travels' => Budget::has('availability','>=',1)->get(),
        ]);
    }
}
