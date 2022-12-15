<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menusidebar extends Component
{
    public $itemSelect=1;
    public $text = "hola";


    public function render()
    {
        return view('livewire.menusidebar')->layout('layouts.guest');
    }
}
