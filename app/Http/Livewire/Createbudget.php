<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Createbudget extends Component
{
    public function render()
    {
        return view('livewire.createbudget')->layout('layouts.guest');
    }
}
