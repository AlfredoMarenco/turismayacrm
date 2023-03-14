<?php

namespace App\Http\Livewire;

use App\Models\Unit;
use Livewire\Component;
use Livewire\WithPagination;

class Units extends Component
{
    use WithPagination;

    public $model;
    public $id_unit;
    public $plate;
    public $insurance_policy;
    public $mechanical_checks;
    public $smoke_checks;
    public $status = 1;

    public $editForm = [
        'model' => null,
        'id_unit' =>null,
        'plate' => null,
        'insurance_policy' => null,
        'mechanical_checks' => null,
        'smoke_checks' => null,
        'status' => null
    ];
    public $unit;

    public $modal_add_unit = false;
    public $modal_edit_unit = false;
    public $modal_delete_unit = false;
    public $paginate = 10;
    public $model_search;
    public $id_unit_search='';
    public $plate_search='';
    public $insurance_policy_search='';
    public $mechanical_checks_search='';
    public $smoke_checks_search='';




    public function addUnit(){
        Unit::create([
            'model' => $this->model,
            'id_unit' => $this->id_unit,
            'plate' => $this->plate,
            'insurance_policy' => $this->insurance_policy,
            'mechanical_checks' => $this->mechanical_checks,
            'smoke_checks' => $this->smoke_checks,
            'status' => $this->status
        ]);
        $this->modal_add_unit = false;
        $this->reset('model','id_unit','plate','insurance_policy','mechanical_checks','smoke_checks','status');
    }


    public function editUnit(Unit $unit){
        $this->unit = $unit;
        $this->modal_edit_unit = true;
        $this->editForm['model'] = $unit->model;
        $this->editForm['id_unit'] = $unit->id_unit;
        $this->editForm['plate'] = $unit->plate;
        $this->editForm['insurance_policy'] = $unit->insurance_policy;
        $this->editForm['mechanical_checks'] = $unit->mechanical_checks;
        $this->editForm['smoke_checks'] = $unit->smoke_checks;
        $this->editForm['status'] = $unit->status;
    }

    public function updateUnit(){
        $this->unit->update([
        'model' => $this->editForm['model'],
        'id_unit' => $this->editForm['id_unit'],
        'plate' => $this->editForm['plate'],
        'insurance_policy' => $this->editForm['insurance_policy'],
        'mechanical_checks' => $this->editForm['mechanical_checks'],
        'smoke_checks' => $this->editForm['smoke_checks'],
        'status' => $this->editForm['status'],
        ]);
        $this->modal_edit_unit = false;
    }

    public function modalDelete(Unit $unit){
        $this->unit = $unit;
        $this->modal_delete_unit = true;
    }

    public function deleteUnit(){
        $unit = Unit::find($this->unit->id);
        $unit->delete();
        $this->modal_delete_unit = false;
    }


    public function render()
    {   $units = Unit::paginate($this->paginate);

        if ($this->model_search) {
            $units = Unit::where('model','like','%'.$this->model_search.'%')->get();
        }

        if ($this->plate_search) {
            $units = Unit::where('plate','like','%'.$this->plate_search.'%')->get();
        }

        if ($this->id_unit_search) {
            $units = Unit::where('id_unit','like','%'.$this->id_unit_search.'%')->get();
        }

        return view('livewire.units',[
            'units' => $units,
        ]);
    }
}
