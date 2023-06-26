<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\Payment;
use App\Models\Split;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Payments extends Component
{
    use WithPagination;
    
    public $client = '';
    public $budget = '';
    public $start_date;
    public $end_date;
    public $description;
    public $amount = 0;
    public $channel = 1;

    public $editForm = [
        'description' => null,
        'amount' => null,
        'status' => null,
        'payment_type' => null,
        'comment' => null,
    ];


    public $budgets = null;
    public $payment;
    public $split;
    public $splits=[];

    public $view_payments=true;
    public $view_details_payment=false;

    public $add_pay_modal = false;
    public $add_split_modal = false;

    public $edit_split_modal=false;
    public $edit_status_split_modal=false;


    public function updatedClient($client){
        $this->budgets = Budget::where('user_id','=',$client)->doesntHave('payment')->get();
    }

    public function updatedBudget($budget){
        $budget_select = Budget::find($budget);
        $this->start_date = $budget_select->date;
    }

    public function addPayment(){
        Payment::create([
            'budget_id' => $this->budget,
            'channel' => $this->channel
        ]);
        $this->reset('client','budget','start_date','end_date','budgets','add_pay_modal');
    }

    public function view_details_payments(Payment $payment){
        $this->payment = $payment;
        $this->splits = Split::where('payment_id',$payment->id)->get();
        $this->view_payments=false;
        $this->view_details_payment = true;
    }

    public function addSplit(){
        Split::create([
            'description' => $this->description,
            'amount' => $this->amount,
            'payment_id' => $this->payment->id
        ]);
        $this->add_split_modal = false;
        $this->splits = Split::where('payment_id',$this->payment->id)->get();
    }

    public function editSplit(Split $split){
        $this->edit_split_modal = true;
        $this->split = $split;
        $this->editForm['description'] = $split->description;
        $this->editForm['amount'] = $split->amount;
    }

    public function editStatusSplit(Split $split){
        $this->edit_status_split_modal = true;
        $this->split = $split;

    }

    public function updateSplit(){
        $this->split->update([
            'description' => $this->editForm['description'],
            'amount' => $this->editForm['amount']
        ]);
        $this->edit_split_modal = false;
        $this->splits = Split::where('payment_id',$this->payment->id)->get();
    }

    public function updateStatusSplit(){
        $this->split->update([
            'status' => 2,
            'payment_type' => $this->editForm['payment_type'],
            'comment' => $this->editForm['comment']
        ]);
        $budget = Budget::find($this->split->payment->budget_id);
        $budget->update([
            'status' => 1
        ]);
        $this->edit_status_split_modal = false;
        $this->splits = Split::where('payment_id',$this->payment->id)->get();
    }

    public function render()
    {
        return view('livewire.payments',[
            'users' => User::whereHas('roles', function (Builder $query){
                            $query->where('name','LIKE','User');
                        })->get(),
            'budgets' => $this->budgets,
            'payments' => Payment::paginate(10),
        ]);

    }
}
