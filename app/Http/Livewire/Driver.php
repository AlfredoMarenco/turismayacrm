<?php

namespace App\Http\Livewire;

use App\Models\Driver as ModelsDriver;
use Livewire\Component;
use Livewire\WithPagination;

class Driver extends Component
{
    use WithPagination;
    public $name;
    public $age;
    public $phone;
    public $license_validity;
    public $psychometric;
    public $driver;

    public $paginate=10;
    public $name_search;
    public $phone_search;

    public $formEdit = [
        'name' => null,
        'age' => null,
        'phone' => null,
        'license_validity' => null,
        'psychometric' => null
    ];

    public $add_driver_modal=false;
    public $edit_driver_modal=false;
    public $delete_driver_modal=false;

    public function addDriver(){
        ModelsDriver::create([
            'name' => $this->name,
            'age' => $this->age,
            'phone' => $this->phone,
            'license_validity' => $this->license_validity,
            'psychometric' => $this->psychometric
        ]);
        $this->reset('name','age','phone','license_validity','psychometric');
        $this->add_driver_modal=false;
    }

    public function selectDriver(ModelsDriver $driver){
        $this->driver = $driver;
        $this->formEdit['name'] = $driver->name;
        $this->formEdit['age'] = $driver->age;
        $this->formEdit['phone'] = $driver->phone;
        $this->formEdit['license_validity'] = $driver->license_validity;
        $this->formEdit['psychometric'] = $driver->psychometric;
        $this->edit_driver_modal = true;
    }

    public function updateDriver(){
        $this->driver->update([
            'name' => $this->formEdit['name'],
            'age' => $this->formEdit['age'],
            'phone' => $this->formEdit['phone'],
            'license_validity' => $this->formEdit['license_validity'],
            'psychometric' => $this->formEdit['psychometric'],
        ]);
        $this->edit_driver_modal = false;

    }

    public function updatedNameSearch(){
        $this->phone_search = '';
    }

    public function updatedPhoneSearch(){
        $this->name_search = '';
    }

    public function render()
    {
        if ($this->name_search != '') {
            $drivers = ModelsDriver::where('name','LIKE','%'.$this->name_search.'%')->orderBy('id','desc')->paginate($this->paginate);
        }else if($this->phone_search != ''){
            $drivers = ModelsDriver::where('phone','LIKE','%'.$this->phone_search.'%')->orderBy('id','desc')->paginate($this->paginate);
        } else {
            $drivers = ModelsDriver::orderBy('id','desc')->paginate($this->paginate);
        }

        return view('livewire.driver',[
            'drivers' => $drivers,
        ]);
    }
}
