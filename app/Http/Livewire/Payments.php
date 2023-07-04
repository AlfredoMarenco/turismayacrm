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
        'payment_type' => '',
        'comment' => null,
    ];

    public $budget_of_payment;
    public $totalBudget;
    public $difference;


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
        $this->budget_of_payment = Budget::find($payment->budget_id);
        if ($this->budget_of_payment->enable_tax) {
            $this->totalBudget = $this->budget_of_payment->totalWithTax();
        }else{
            $this->totalBudget = $this->budget_of_payment->totalWithOutTax();
        }
        $this->splits = Split::where('payment_id',$payment->id)->get();
        $this->view_payments=false;
        $this->view_details_payment = true;
    }

    public function addSplit(){

        $this->validate([
            'description' => 'required',
            'amount' => 'required'
        ]);
        $this->difference;
        if ($this->budget_of_payment->enable_tax) {
            $this->totalBudget = $this->budget_of_payment->totalWithTax();
        }else{
            $this->totalBudget = $this->budget_of_payment->totalWithOutTax();
        }

        $total_splits = 0;

        foreach ($this->splits as $split) {
            $total_splits = $total_splits+$split->amount;
        }

        $this->difference = $this->totalBudget-($total_splits+$this->amount);


        if ($this->amount > 0 && $this->difference >= 0) {
            Split::create([
                'description' => $this->description,
                'amount' => $this->amount,
                'payment_id' => $this->payment->id
            ]);
            $this->add_split_modal = false;
            $this->splits = Split::where('payment_id',$this->payment->id)->get();
            $this->reset('amount','description');
        }else if($this->difference < 0){
                session()->flash('message','La sumatoria de las solicitudes no puede ser mayor al total presupuestado');
        }else
        {
            session()->flash('message','El valor debe ser mayor a 0');
        }


    }

    public function editSplit(Split $split){
        $this->edit_split_modal = true;
        $this->split = $split;
        $this->editForm['description'] = $split->description;
        $this->editForm['amount'] = $split->amount;
    }


    public function updateSplit(){
        $this->difference = 0;
        if ($this->budget_of_payment->enable_tax) {
            $this->totalBudget = $this->budget_of_payment->totalWithOutTax();
        }else{
            $this->totalBudget = $this->budget_of_payment->totalWithTax();
        }

        $total_splits = 0;

        foreach ($this->splits as $split) {
            $total_splits = $total_splits+$split->amount;
        }

        $this->difference = $this->totalBudget-($total_splits+$this->editForm['amount'] );


        if ($this->editForm['amount'] > 0 && $this->difference >= 0) {
            $this->split->update([
                'description' => $this->editForm['description'],
                'amount' => $this->editForm['amount']
            ]);
        $this->edit_split_modal = false;
        $this->splits = Split::where('payment_id',$this->payment->id)->get();
        }else if($this->difference < 0){
            session()->flash('message2','La sumatoria de las solicitudes no puede ser mayor al total presupuestado');
            /* $this->reset('difference'); */
        }else{
            session()->flash('message2','El valor debe ser mayor a 0');
        }

        $this->editForm['amount']=0;

    }

    public function editStatusSplit(Split $split){
        $this->edit_status_split_modal = true;
        $this->split = $split;

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
        $payments = Payment::orderBy('id','desc')->paginate(10);
        return view('livewire.payments',[
            'users' => User::whereHas('roles', function (Builder $query){
                            $query->where('name','LIKE','User');
                        })->get(),
            'budgets' => $this->budgets,
            'payments' => $payments,
        ]);

    }
}
