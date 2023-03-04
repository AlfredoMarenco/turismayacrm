<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\User;
use Livewire\Component;

class Disponibilities extends Component
{

    public $saveDate=false;
    public $star_date;
    public $end_date;
    public $budget;



    public function render()
    {

        return view('livewire.disponibilities',[
            'budgets' => Budget::all(),
            'users' => User::all(),
        ]);
    }
}
