<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;

class Reports extends Component
{
    public $reportSelected = 0;
    public $start_date='';
    public $end_date='';
    public $budgets=null;
    public $clients = [];
    public $client_id='';

    public function mount()
    {
        $this->clients = User::whereHas('roles', function (Builder $query){
            $query->where('name','LIKE','User');
        })->orderBy('id','desc')->get();
    }

    public function updatedClientID()
    {
        $this->budgets = Budget::where('user_id',$this->client_id)->get();
    }

    public function servicespayed_vs_budgets()
    {
        $this->budgets = Budget::whereBetween('created_at', [$this->start_date, $this->end_date])->get();
    }
    public function render()
    {
        return view('livewire.reports')->layout('layouts.guest');
    }
}
