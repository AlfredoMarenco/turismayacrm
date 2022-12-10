<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menusidebar extends Component
{
    public $itemSelect=2;


    public function selectItem($item){
        $this->itemSelect = $item;
    }

    public function render()
    {
        return view('livewire.menusidebar')->layout('layouts.guest');
    }
}
