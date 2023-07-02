<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Menusidebar extends Component
{
    public $itemSelect;

    public function mount(Request $request){
        if ($request->session()->get('itemSelect') == 2) {
            $this->itemSelect = 2;
        }else{
            $this->itemSelect = 1;
        }
    }


    public function updatedItemSelect( $value){
        if ($value == 2) {
            session(['itemSelect' => 2]);
            $this->itemSelect = 2;
            return redirect('/admin')->back();
        }else{
            session()->forget('itemSelect');
        }
    }


    public function render()
    {
        return view('livewire.menusidebar')->layout('layouts.guest');
    }
}
