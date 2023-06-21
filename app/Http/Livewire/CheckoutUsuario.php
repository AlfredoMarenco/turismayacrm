<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutUsuario extends Component
{
    public function render()
    {
        return view('livewire.checkout-usuario')->layout('layouts.portal');
    }
}
