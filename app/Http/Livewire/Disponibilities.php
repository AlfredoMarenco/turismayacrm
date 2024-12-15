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
    public $date=null;
    public $end_date=null;
    public $client = '';
    public $budget = '';
    public $unit = '';
    public $driver = '';
    public $budgets;
    public $comment = '';
    public $budget_selected;
    public $selectedDate;
    public $availabilitiesAll = null;
    /* public $availibities=[]; */
    public $listeners = [
        'setSelectedDate',
        'render'
    ];

    public function mount()
    {
        $this->availabilitiesAll = Availability::all();
    }


    public function setSelectedDate($value){
        $this->selectedDate = $value;
    }

    public function updatedClient($client){
        $this->budgets = Budget::where('user_id',$client)->get();
        $this->reset('budget','date','end_date');
    }


    public function updatedBudget($budget){
        $budget = Budget::find($budget);
        $this->budget_selected = $budget;
        $this->date = $budget->date;

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
            'title' => $this->budget_selected->name.' - '.$this->budget_selected->user->nameComplete(),
            'start' => $this->date,
            'comment' => $this->comment,
            'budget_id' => $this->budget_selected->id
        ]);
        $this->saveDate = false;
        $this->availabilitiesAll = Availability::all();
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