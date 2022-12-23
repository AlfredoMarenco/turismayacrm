<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sincontenido extends Component
{
    public function render()
    {
        return view('livewire.sincontenido')->layout('layouts.perfil-usuario');
    }
}
