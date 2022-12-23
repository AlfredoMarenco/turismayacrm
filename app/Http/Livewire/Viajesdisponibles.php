<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Viajesdisponibles extends Component
{
    public function render()
    {
        return view('livewire.viajesdisponibles')->layout('layouts.perfil-usuario');
    }
}
