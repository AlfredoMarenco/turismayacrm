<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagoRechazado extends Component
{
    public function render()
    {
        return view('livewire.pago-rechazado')->layout('layouts.portal');
    }
}
