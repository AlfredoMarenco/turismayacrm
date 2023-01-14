<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Clients extends Component
{

    public $addClient = false;

    protected $listeners = ['closeAddClient'=>'closeAddClient'];

    public function closeAddClient(){
        $this->addClient=false;
    }


    public function render()
    {
        return view('livewire.clients',[
            'clients' => User::all()
        ]);
    }
}
