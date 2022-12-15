<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Voucher extends Component
{
    public function render()
    {
        return view('livewire.voucher')->layout('layouts.guest');
    }
}
