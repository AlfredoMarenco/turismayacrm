<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagoExitoso extends Component
{
    public function render()
    {
        return view('livewire.pago-exitoso')->layout('layouts.portal');
    }
}
