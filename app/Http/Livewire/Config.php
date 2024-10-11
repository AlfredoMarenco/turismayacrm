<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Config extends Component
{
    public $modal_add_user = false;
    public $modal_edit_user = false;
    public $addUser = true;

    public $name;
    public $last_name;
    public $email;
    public $password;
    public $phone;
    public $user;

    public $editForm = [
        'name' => null,
        'last_name' => null,
        'email' => null,
        'phone' => null,
        'password' => null
    ];

    public function storeUser(){
        User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
        ])->assignRole('Admin');
        $this->modal_add_user = false;
    }

    public function editUser(User $user){
        $this->user = $user;
        $this->editForm['name'] = $user->name;
        $this->editForm['last_name'] = $user->last_name;
        $this->editForm['email'] = $user->email;
        $this->editForm['phone'] = $user->phone;
        $this->modal_edit_user = true;
    }

    public function updateUser(){
        if ($this->password == null) {
            $this->user->update([
                'name' => $this->editForm['name'],
                'last_name' => $this->editForm['last_name'],
                'email' => $this->editForm['email'],
                'phone' => $this->editForm['phone'],
            ]);
        }else{
            $this->user->update([
                'name' => $this->editForm['name'],
                'last_name' => $this->editForm['last_name'],
                'email' => $this->editForm['email'],
                'phone' => $this->editForm['phone'],
                'password' => Hash::make($this->editForm['password']),
            ]);
        }

        $this->modal_edit_user = false;
    }

    public function render()
    {
        return view('livewire.config',[
            'users' => User::role('Admin')->paginate(10)
        ]);
    }
}