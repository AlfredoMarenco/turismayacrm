<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Disponibilities extends Component
{
    public function render()
    {
        return view('livewire.disponibilities')->layout('layouts.guest');
    }
}
