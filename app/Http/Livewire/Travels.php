<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\Cancelation;
use App\Models\Payment;
use App\Models\Settlement;
use App\Models\Split;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Travels extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $name_search;
    public $status_search=1;
    public $dates;
    public $budget;

    public $type = '';
    public $value=0;
    public $description;

    public $editFormSettlement = [
        'type' => null,
        'value' => null,
        'description' => null
    ];

    public $settlement;

    public $balance=0;

    public $message;
    public $percentage_refund=0;
    public $refund = 0;
    public $total_paid = 0;
    public $modal_liquidate_travel = false;
    public $modal_edit_settlement = false;
    public $modal_delete_settlement = false;
    public $table_travels=true;
    public $modal_cancel_travel= false;

    public function mount(){
        $this->dates = new  Carbon();

    }

    public function selectedBudget(Budget $budget)
    {
        $this->table_travels = false;
        $this->modal_liquidate_travel = true;
        $this->budget = $budget;
        if ($budget->enable_tax) {
            $this->balance = $budget->totalWithOutTax()-$budget->totalSettlement();
        }else{
            $this->balance = $budget->totalWithTax()-$budget->totalSettlement();
        }
    }

    public function addSettlement()
    {
        $this->validate([
            'type' => 'required',
            'value' => 'required'
        ]);
        $settlement = Settlement::create([
            'type' => $this->type,
            'value' => $this->value,
            'description' => $this->description,
            'budget_id' => $this->budget->id
        ]);

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description');
    }

    public function editSettlement(Settlement $settlement)
    {
        $this->settlement = $settlement;
        $this->editFormSettlement['type'] = $settlement->type;
        $this->editFormSettlement['value'] = $settlement->value;
        $this->editFormSettlement['description'] = $settlement->description;

        $this->modal_edit_settlement = true;
    }

    public function updateSettlement()
    {
        $this->settlement->update([
            'type' => $this->editFormSettlement['type'],
            'value' => $this->editFormSettlement['value'],
            'description' => $this->editFormSettlement['description']
        ]);

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }

        $this->budget = Budget::where('id',$this->budget->id)->first();
        $this->modal_edit_settlement = false;
    }

    public function modalDeleteSettlement(Settlement $settlement)
    {
        $this->settlement = $settlement;
        $this->modal_delete_settlement = true;
    }

    public function deleteSettlement()
    {
        $this->settlement->delete();
        $this->budget = Budget::where('id',$this->budget->id)->first();
        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->modal_delete_settlement = false;
    }

    public function closeBudget(){
        $this->budget->update([
            'status' => 4
        ]);
        $this->modal_liquidate_travel = false;
        $this->table_travels = true;
    }

    public function modalCancelBudget(Budget $budget){
        $this->budget = $budget;
        $this->modal_cancel_travel = true;
        $payment = Payment::where('budget_id',$budget->id)->first();
        $splits = Split::where('payment_id',$payment->id)->where('status','2')->get();

        foreach ($splits as $split) {
            $this->total_paid = $this->total_paid+$split->amount;
        }

    }

    public function updatedPercentageRefund(){
        try {
            if (!$this->percentage_refund) {
                $this->refund = 0;
            }
            $this->refund = $this->total_paid*($this->percentage_refund/100);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function cancelBudget(){
        $this->validate([
            'message' => 'required'
        ]);
        Cancelation::create([
            'message' => $this->message,
            'percentage_refund' => $this->percentage_refund/100,
            'refund' => $this->refund,
            'budget_id' => $this->budget->id
        ]);
        $this->budget->update([
            'status' => 5,
        ]);

        $this->modal_cancel_travel = false;
        $this->table_travels = true;
    }

    public function render()
    {
        if ($this->name_search != '') {
            $travels = Budget::whereHas('user', function (Builder $query){
                $query->where('name','LIKE','%'.$this->name_search.'%');
            })->has('availability','>=',1)->paginate($this->paginate);
        }else if($this->status_search != ''){
            $travels = Budget::where('status','=',$this->status_search)->paginate($this->paginate);
        }
        else{
            $travels = Budget::has('availability','>=',1)->paginate($this->paginate);
        }



        return view('livewire.travels',[
            'travels' => $travels,
        ]);
    }
}
