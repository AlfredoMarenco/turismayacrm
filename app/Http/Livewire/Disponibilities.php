<?php

namespace App\Http\Livewire;

use App\Models\Budget;
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

    public function updatedClient($client){
        $this->budgets = Budget::where('user_id',$client)->get();
        $this->reset('budget','start_date','end_date');
    }


    public function updatedBudget($budget){
        $budget = Budget::find($budget);
        $this->start_date = $budget->start_date;
        $this->end_date = $budget->end_date;

    }

    public function updatedUnit($unit){
        if ($unit==-1) {
            $this->driver = 'proveedor';
        }
    }

    public function render()
    {
        return view('livewire.disponibilities',[
            'users' => User::all(),
            'units' => Unit::all(),
        ]);
    }
}
