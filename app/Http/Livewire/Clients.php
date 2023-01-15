<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;

    public $addClient = false;
    public $name;
    public $last_name;
    public $email;
    public $city;
    public $password;
    public $phone;
    public $company;
    public $rfc;
    public $cif;
    public $comment;
    public $modal_added=false;
    public $detailsClient=false;
    public $client;
    public $paginate = 5;

    protected $listeners = [
        'closeAddClient'=>'closeAddClient',
        'render' => 'render'
    ];

    public function closeAddClient(){
        $this->addClient=false;
    }

    public function addClient(){
        $this->client = User::create([
            'name'=> $this->name,
            'last_name'=> $this->last_name,
            'email'=> $this->email,
            'city'=> $this->city,
            'password'=> Hash::make($this->password),
            'phone'=> $this->phone,
            'company'=> $this->company,
            'rfc' => $this->rfc,
            'cif' => $this->cif,
            'comment' => $this->comment
        ]);

        $this->reset('name','last_name','email','city','password','phone','company','rfc','cif','comment');
        $this->modal_added=true;
    }

    public function render()
    {
        return view('livewire.clients',[
            'clients' => User::paginate($this->paginate)
        ]);
    }
}
