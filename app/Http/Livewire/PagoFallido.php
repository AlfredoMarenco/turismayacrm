<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagoFallido extends Component
{
    public function render()
    {
        return view('livewire.pago-fallido')->layout('layouts.portal');
    }
}
