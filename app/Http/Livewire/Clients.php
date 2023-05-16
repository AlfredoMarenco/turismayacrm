<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\Concept;
use App\Models\User;
use App\Models\Voucher;
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
    public $budget;

    public $voucher_date;
    public $voucher_time;
    public $voucher_vehicle;
    public $voucher_service;
    public $voucher_note;
    public $budget_comment;


    public $formEdit = [
        'name' => null,
        'last_name' => null,
        'email' => null,
        'city' => null,
        'password' => null,
        'phone' => null,
        'company' => null,
        'city' => null,
        'comment' => null,
    ];


    public $paginate = 5;
    public $date;

    public $travel_name;
    public $start_date;
    public $end_date;
    public $qty_bus = 1;
    public $km_bus = 0;
    public $passangers_bus = 1;
    public $laps_bus = 0;
    public $performance_bus = 1;
    public $liters_bus = 0;
    public $disel_price_bus = 0;
    public $disel_cost_bus = 0;
    public $salary_bus = 0;
    public $per_diem_bus = 0;
    public $hotel_bus = 0;
    public $tax_burden_bus = 0;
    public $flor_rigth_bus = 0;
    public $booths_bus = 0;
    public $maintenance_bus = 0;
    public $amenities_bus = 0;
    public $sublet_bus = 0;
    public $total_cost_bus = 0;
    public $utility_percentage_bus = 1;
    public $utility_bus = 0;
    public $qty_pickup = 1;
    public $km_pickup = 0;
    public $passangers_pickup = 1;
    public $laps_pickup = 0;
    public $performance_pickup = 1;
    public $liters_pickup = 0;
    public $disel_price_pickup = 0;
    public $disel_cost_pickup = 0;
    public $salary_pickup = 0;
    public $per_diem_pickup = 0;
    public $hotel_pickup = 0;
    public $tax_burden_pickup = 0;
    public $flor_rigth_pickup = 0;
    public $booths_pickup = 0;
    public $maintenance_pickup = 0;
    public $amenities_pickup = 0;
    public $sublet_pickup = 0;
    public $total_cost_pickup = 0;
    public $utility_percentage_pickup = 1;
    public $utility_pickup = 0;
    public $net_rate = 0;
    public $tax = 0;
    public $total = 0;
    public $budgets=[];
    public $concepts=[];
    public $vouchers=[];

    public $name_search='';
    public $email_search='';

    public $createBudget = false;
    public $modal_added = false;
    public $detailsClient = false;
    public $addClient = false;
    public $tableClients = true;
    public $modalDeleting = false;
    public $editing = false;
    public $createVoucher = false;
    public $addItem = false;
    public $formBudget=false;


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

    public function createBudget($status){
        $this->budget = Budget::create([
            'user_id' => $this->client->id,
            'status' => $status,
        ]);
        $this->detailsClient=false;
        $this->createBudget = true;
    }

    public function editBudget(Budget $budget){
        $this->budget = $budget;
        $this->concepts = Concept::where('budget_id',$this->budget->id)->get();
        $this->detailsClient=false;
        $this->createBudget = true;
    }

    //Calculo de los costos
    public function updated(){
        //Calculo para los autobuses
        try {
            if ($this->km_bus != 0) {
                $this->maintenance_bus = 66.25;
                $this->tax_burden_bus = 40;
            }

            if ($this->km_pickup != 0) {
                $this->maintenance_pickup = 66.25;
                $this->tax_burden_pickup = 40;
            }


            $this->liters_bus = ($this->km_bus * $this->laps_bus)/($this->performance_bus);
            $this->disel_cost_bus = $this->disel_price_bus*$this->liters_bus;
            $this->total_cost_bus = $this->disel_cost_bus + $this->salary_bus + $this->per_diem_bus + $this->hotel_bus + $this->tax_burden_bus + $this->flor_rigth_bus + $this->booths_bus + $this->amenities_bus + $this->sublet_bus + $this->maintenance_bus;
            $this->utility_bus = $this->total_cost_bus * ($this->utility_percentage_bus/100);
            //Calculo para las camionetas
            $this->liters_pickup = ($this->km_pickup * $this->laps_pickup)/($this->performance_pickup);
            $this->disel_cost_pickup = $this->disel_price_pickup*$this->liters_pickup;
            $this->total_cost_pickup = $this->disel_cost_pickup + $this->salary_pickup + $this->per_diem_pickup + $this->hotel_pickup + $this->tax_burden_pickup + $this->flor_rigth_pickup + $this->booths_pickup + $this->amenities_pickup + $this->sublet_pickup + $this->maintenance_pickup;
            $this->utility_pickup = $this->total_cost_pickup * ($this->utility_percentage_pickup/100);

            $this->net_rate = (($this->qty_bus)*($this->utility_bus + $this->total_cost_bus)) + (($this->qty_pickup)*($this->utility_pickup + $this->total_cost_pickup));
            $this->tax = $this->net_rate *.16;
            $this->total = $this->tax + $this->net_rate;
        } catch (\Throwable $th) {

        }
    }

    //Creacion de cotizaciones

    public function addBudget(){
        Concept::create([
            'name' => $this->travel_name,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'budget_id' => $this->budget->id,
            'qty_bus' => $this->qty_bus,
            'km_bus' => $this->km_bus,
            'passangers_bus' => $this->passangers_bus,
            'laps_bus' => $this->laps_bus,
            'performance_bus' => $this->performance_bus,
            'liters_bus' => $this->liters_bus,
            'disel_price_bus' => $this->disel_price_bus,
            'disel_cost_bus' => $this->disel_cost_bus,
            'salary_bus' => $this->salary_bus,
            'per_diem_bus' => $this->per_diem_bus,
            'hotel_bus' => $this->hotel_bus,
            'tax_burden_bus' => $this->tax_burden_bus,
            'flor_rigth_bus' => $this->flor_rigth_bus,
            'booths_bus' => $this->booths_bus,
            'maintenance_bus' => $this->maintenance_bus,
            'amenities_bus' => $this->amenities_bus,
            'sublet_bus' => $this->sublet_bus,
            'total_cost_bus' => $this->total_cost_bus,
            'utility_percentage_bus' => $this->utility_percentage_bus,
            'utility_bus' => $this->utility_bus,
            'qty_pickup' => $this->qty_pickup,
            'km_pickup' => $this->km_pickup,
            'passangers_pickup' => $this->passangers_pickup,
            'laps_pickup' => $this->laps_pickup,
            'performance_pickup' => $this->performance_pickup,
            'liters_pickup' => $this->liters_pickup,
            'disel_price_pickup' => $this->disel_price_pickup,
            'disel_cost_pickup' => $this->disel_cost_pickup,
            'salary_pickup' => $this->salary_pickup,
            'per_diem_pickup' => $this->per_diem_pickup,
            'hotel_pickup' => $this->hotel_pickup,
            'tax_burden_pickup' => $this->tax_burden_pickup,
            'flor_rigth_pickup' => $this->flor_rigth_pickup,
            'booths_pickup' => $this->booths_pickup,
            'maintenance_pickup' => $this->maintenance_pickup,
            'amenities_pickup' => $this->amenities_pickup,
            'sublet_pickup' => $this->sublet_pickup,
            'total_cost_pickup' => $this->total_cost_pickup,
            'utility_percentage_pickup' => $this->utility_percentage_pickup,
            'utility_pickup' => $this->utility_pickup,
            'net_rate' => $this->net_rate,
            'tax' => $this->tax,
            'total' => $this->total
        ]);
        $this->concepts = Concept::where('budget_id',$this->budget->id)->get();
        // $this->detailsClient=true;
        $this->formBudget = false;
    }

    public function addClient(){
        $this->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

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
        $this->addClient=false;
    }

    public function showDetailsClient(User $client){
        $this->client = $client;
        $this->budgets = $client->budgets;
        $this->tableClients = false;
        $this->modal_added=false;
        $this->addClient=false;
        $this->detailsClient=true;

    }

    public function editClient(){
        $this->editing = true;
        $this->formEdit['name'] = $this->client->name;
        $this->formEdit['phone'] = $this->client->phone;
        $this->formEdit['email'] = $this->client->email;
        $this->formEdit['password'] = '';
        $this->formEdit['company'] = $this->client->company;
        $this->formEdit['city'] = $this->client->city;
        $this->formEdit['comment'] = $this->client->comment;
    }


    public function updateClient(){
        $client = $this->client->update([
            'name' => $this->formEdit['name'],
            'phone' => $this->formEdit['phone'],
            'email' => $this->formEdit['email'],
            'password' => $this->formEdit['password'],
            'company' => $this->formEdit['company'],
            'city' => $this->formEdit['city'],
            'comment' => $this->formEdit['comment']
        ]);

        $this->client = User::find($client);
        $this->reset('formEdit');
        $this->editing = false;
    }


    public function deletingClient(User $client){
        $this->client = $client;
        $this->modalDeleting = true;
    }

    public function deleteClient(User $client){
        User::destroy($client->id);
        $this->client = null;
        $this->resetPage();
        $this->modalDeleting = false;
        $this->emit('render');
    }


    public function createVoucher(Budget $budget){
        $this->budget = $budget;
        $this->vouchers = $budget->vouchers;
        $this->budget_comment = $budget->comment;
        $this->createVoucher = true;
        $this->detailsClient = false;
    }

    public function addVoucher(){
        Voucher::create([
            'date' => $this->voucher_date,
            'time' => $this->voucher_time,
            'vehicle' => $this->voucher_vehicle,
            'service' => $this->voucher_service,
            'note' => $this->voucher_note,
            'budget_id' => $this->budget->id,
        ]);

        $this->vouchers = Voucher::where('budget_id',$this->budget->id)->get();
        $this->reset('voucher_date','voucher_time','voucher_vehicle','voucher_service','voucher_note');
    }

    public function addCommentBudget(){
        $this->budget->update([
            'comment' => $this->budget_comment
        ]);
        $this->vouchers = Voucher::where('budget_id',$this->budget->id)->get();
    }

    public function render()
    {
        if ($this->name_search != '') {
            $clients = User::where('name',$this->name_search)->orderBy('id','asc')->paginate($this->paginate);
        }else{
            $clients = User::orderBy('id','desc')->paginate($this->paginate);
        }

        return view('livewire.clients',[
            'clients' => $clients
        ]);
    }
}
