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
    public $budget_id = '';

    public $type = '';
    public $value=0;
    public $description;
    public $description2;
    public $description3;
    public $description4;
    public $description5;
    public $description6;
    public $description7;
    public $description8;
    public $description9;
    public $description10;


    public $disel_cost;
    public $salary;
    public $per_diem;
    public $hotel;
    public $tax_burden;
    public $flor_rigth;
    public $booths;
    public $maintenance;
    public $amenities;
    public $sublet;


    public $disel_cost_settlement;
    public $salary_settlement;
    public $per_diem_settlement;
    public $hotel_settlement;
    public $tax_burden_settlement;
    public $flor_rigth_settlement;
    public $booths_settlement;
    public $maintenance_settlement;
    public $amenities_settlement;
    public $sublet_settlement;


    public $disel_cost_settlement_bool=false;
    public $salary_settlement_bool=false;
    public $per_diem_settlement_bool=false;
    public $hotel_settlement_bool=false;
    public $tax_burden_settlement_bool=false;
    public $flor_rigth_settlement_bool=false;
    public $booths_settlement_bool=false;
    public $maintenance_settlement_bool=false;
    public $amenities_settlement_bool=false;
    public $sublet_settlement_bool=false;


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
        $settlements = $budget->settlements;
        foreach ($settlements as $settlement) {
            switch ($settlement->type) {
                case '1':
                    $this->disel_cost_settlement = $settlement;
                    $this->disel_cost_settlement_bool = true;
                    break;
                case '2':
                    $this->salary_settlement = $settlement;
                    $this->salary_settlement_bool = true;
                    break;
                case '3':
                    $this->per_diem_settlement = $settlement;
                    $this->per_diem_settlement_bool = true;
                    break;
                case '4':
                    $this->hotel_settlement = $settlement;
                    $this->hotel_settlement_bool = true;
                    break;
                case '5':
                    $this->tax_burden_settlement = $settlement;
                    $this->tax_burden_settlement_bool = true;
                    break;
                case '6':
                    $this->flor_rigth_settlement = $settlement;
                    $this->flor_rigth_settlement_bool = true;
                    break;
                case '7':
                    $this->booths_settlement = $settlement;
                    $this->booths_settlement_bool = true;
                    break;
                case '8':
                    $this->maintenance_settlement = $settlement;
                    $this->maintenance_settlement_bool = true;
                    break;
                case '9':
                    $this->amenities_settlement = $settlement;
                    $this->amenities_settlement_bool = true;
                    break;
                case '10':
                    $this->sublet_settlement = $settlement;
                    $this->sublet_settlement_bool = true;
                    break;
            }
        }
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

    public function editSettlement($value)
    {
        $settlement = Settlement::find($value);
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
        $this->budget = Budget::where('id',$this->budget->id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }

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


    public function addDiselCost()
    {
        $this->validate([
            'disel_cost' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 1,
            'value' => $this->disel_cost,
            'description' => $this->description,
            'budget_id' => $this->budget->id
        ]);

        $this->disel_cost_settlement = $settlement;
        $this->disel_cost_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description');
    }


    public function addSalary()
    {
        $this->validate([
            'salary' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 2,
            'value' => $this->salary,
            'description' => $this->description2,
            'budget_id' => $this->budget->id
        ]);

        $this->salary_settlement = $settlement;
        $this->salary_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description2');
    }

    public function addPerDiem()
    {
        $this->validate([
            'per_diem' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 3,
            'value' => $this->per_diem,
            'description' => $this->description3,
            'budget_id' => $this->budget->id
        ]);

        $this->per_diem_settlement = $settlement;
        $this->per_diem_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description3');
    }

    public function addHotel()
    {
        $this->validate([
            'hotel' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 4,
            'value' => $this->hotel,
            'description' => $this->description4,
            'budget_id' => $this->budget->id
        ]);

        $this->hotel_settlement = $settlement;
        $this->hotel_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description4');
    }

    public function addTaxBurden()
    {
        $this->validate([
            'tax_burden' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 5,
            'value' => $this->tax_burden,
            'description' => $this->description5,
            'budget_id' => $this->budget->id
        ]);

        $this->tax_burden_settlement = $settlement;
        $this->tax_burden_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description5');
    }

    public function addFlorRigth()
    {
        $this->validate([
            'flor_rigth' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 6,
            'value' => $this->flor_rigth,
            'description' => $this->description6,
            'budget_id' => $this->budget->id
        ]);

        $this->flor_rigth_settlement = $settlement;
        $this->flor_rigth_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description6');
    }

    public function addBooths()
    {
        $this->validate([
            'booths' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 7,
            'value' => $this->booths,
            'description' => $this->description7,
            'budget_id' => $this->budget->id
        ]);

        $this->booths_settlement = $settlement;
        $this->booths_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description7');
    }

    public function addMaintenance()
    {
        $this->validate([
            'maintenance' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 8,
            'value' => $this->maintenance,
            'description' => $this->description8,
            'budget_id' => $this->budget->id
        ]);

        $this->maintenance_settlement = $settlement;
        $this->maintenance_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description8');
    }

    public function addAmenities()
    {
        $this->validate([
            'amenities' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 9,
            'value' => $this->amenities,
            'description' => $this->description9,
            'budget_id' => $this->budget->id
        ]);

        $this->amenities_settlement = $settlement;
        $this->amenities_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description9');
    }

    public function addSublet()
    {
        $this->validate([
            'sublet' => 'required'
        ]);

        $settlement = Settlement::create([
            'type' => 10,
            'value' => $this->sublet,
            'description' => $this->description10,
            'budget_id' => $this->budget->id
        ]);

        $this->sublet_settlement = $settlement;
        $this->sublet_settlement_bool = true;

        $this->budget = Budget::where('id',$settlement->budget_id)->first();

        if ($this->budget->enable_tax) {
            $this->balance = $this->budget->totalWithOutTax()-$this->budget->totalSettlement();
        }else{
            $this->balance = $this->budget->totalWithTax()-$this->budget->totalSettlement();
        }
        $this->reset('type','value','description10');
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
        }else if ($this->budget_id != '') {
            $travels = Budget::where('id','LIKE',$this->budget_id)->where('status','=',$this->status_search)->paginate($this->paginate);
        }else if($this->status_search != ''){
            $travels = Budget::where('status','=',$this->status_search)->paginate($this->paginate);
        }else{
            $travels = Budget::has('availability','>=',1)->paginate($this->paginate);
        }



        return view('livewire.travels',[
            'travels' => $travels,
        ]);
    }
}
