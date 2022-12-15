<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menusidebar extends Component
{
    public $itemSelect=4;
    public $text = "hola";


    public function render()
    {
        return view('livewire.menusidebar')->layout('layouts.guest');
    }
}
