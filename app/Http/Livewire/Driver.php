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

    public $add_driver_modal=false;

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

    public function render()
    {
        return view('livewire.driver',[
            'drivers' => ModelsDriver::paginate(5),
        ]);
    }
}
