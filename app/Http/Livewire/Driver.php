<?php

namespace App\Http\Livewire;

use App\Models\Driver as ModelsDriver;
use Livewire\Component;

class Driver extends Component
{

    public $name;
    public $age;
    public $phone;
    public $license_validity;
    public $psychometric;
    public $driver;

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

    public function render()
    {
        return view('livewire.driver',[
            'drivers' => ModelsDriver::paginate(5),
        ]);
    }
}
