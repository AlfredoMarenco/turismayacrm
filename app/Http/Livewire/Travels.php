<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Travels extends Component
{
    public function render()
    {
        return view('livewire.travels')->layout('layouts.guest');
    }
}
