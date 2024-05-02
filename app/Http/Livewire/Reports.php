<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\Concept;
use App\Models\User;
use App\Models\Voucher;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Reports extends Component
{
    use WithPagination;

    public $reportSelected = 0;
    public $start_date='';
    public $end_date='';
    public $start_date2='';
    public $end_date2='';
    public $budgets=null;
    public $clients = [];
    public $vouchers = [];
    public $concepts;
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

    public function services_sheet()
    {
        $this->concepts = Concept::whereBetween('created_at', [$this->start_date2 , $this->end_date2])->get();
    }

    public function render()
    {
        return view('livewire.reports')->layout('layouts.guest');
    }
}
