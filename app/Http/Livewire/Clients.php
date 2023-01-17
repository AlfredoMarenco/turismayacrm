<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;


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
    public $client;
    public $paginate = 5;
    public $date;

    public $name_search='';
    public $email_search='';

    public $modal_added=false;
    public $detailsClient=false;
    public $addClient = false;
    public $tableClients = true;

    protected $listeners = [
        'closeAddClient'=>'closeAddClient',
        'render' => 'render'
    ];


    public function mount(){
            $this->date = Carbon::now()->format('D M Y');
    }

    public function updatingPaginate(){
        $this->resetPage();
    }

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

    public function showDetailsClient(User $client){
        $this->client = $client;
        $this->tableClients = false;
        $this->modal_added=false;
        $this->addClient=false;
        $this->detailsClient=true;

    }

    public function render()
    {
        if ($this->name_search != '') {
            $clients = User::where('name',$this->name_search)->paginate($this->paginate);
        }else{
            $clients = User::paginate($this->paginate);
        }

        return view('livewire.clients',[
            'clients' => $clients
        ]);
    }
}
