<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Partidas extends Component
{
    public function render()
    {
        return view('livewire.partidas')->layout('layouts.portal');
    }
}
