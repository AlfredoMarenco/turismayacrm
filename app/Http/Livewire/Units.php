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

    public $modal_add_unit = false;
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
        ]);
        $this->modal_add_unit = false;
    }


    public function render()
    {   $units = Unit::paginate($this->paginate);

        if ($this->model_search) {
            $units = Unit::where('model','like',$this->model_search)->get();
        }

        if ($this->plate_search) {
            $units = Unit::where('plate','%like%',$this->plate_search)->get();
        }

        return view('livewire.units',[
            'units' => $units,
        ]);
    }
}
