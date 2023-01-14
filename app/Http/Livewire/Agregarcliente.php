<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Agregarcliente extends Component
{

    public $name;
    public $last_name;
    public $email;
    

    public function render()
    {
        return view('livewire.agregarcliente')->layout('layouts.app');
    }
}
