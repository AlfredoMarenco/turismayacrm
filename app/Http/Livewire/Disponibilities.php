<?php

namespace App\Http\Livewire;

use App\Models\Availability;
use App\Models\Budget;
use App\Models\Driver;
use App\Models\Unit;
use App\Models\User;
use Livewire\Component;

class Disponibilities extends Component
{

    public $saveDate=false;
    public $start_date=null;
    public $end_date=null;
    public $client = '';
    public $budget = '';
    public $unit = '';
    public $driver = '';
    public $budgets;
    public $comment;
    public $budget_selected;
    public $selectedDate;
    /* public $availibities=[]; */
    public $listeners = [
        'setSelectedDate',
        'render'
    ];


    public function setSelectedDate($value){
        $this->selectedDate = $value;
    }

    public function updatedClient($client){
        $this->budgets = Budget::where('user_id',$client)->get();
        $this->reset('budget','start_date','end_date');
    }


    public function updatedBudget($budget){
        $budget = Budget::find($budget);
        $this->budget_selected = $budget;
        $this->start_date = $budget->start_date;
        $this->end_date = $budget->end_date;

    }

    public function updatedUnit($unit){
        if ($unit==-1) {
            $this->driver = 'proveedor';
        }
    }

    public function updatedSelectedDate(){
        /* $this->availibities = Availability::all(); */
    }

    public function addAvailability(){
        Availability::create([
            'title' => $this->budget_selected->name,
            'start' => $this->start_date,
            'end' => $this->end_date,
            'driver_id' => $this->driver,
            'unit_id' => $this->unit,
            'budget_id' => $this->budget_selected->id,
            'comment' => $this->comment
        ]);
        $this->saveDate = false;
    }

    public function render()
    {
        return view('livewire.disponibilities',[
            'users' => User::all(),
            'units' => Unit::all(),
            'drivers' => Driver::all(),
            'availabilitiesAll' => Availability::all(),
            'availabilities' => Availability::where('start',$this->selectedDate)->get()
        ]);
    }
}
