<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Agregarcliente extends Component
{

    


    public function render()
    {
        return view('livewire.agregarcliente')->layout('layouts.app');
    }
}
