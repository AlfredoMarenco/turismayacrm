<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\Concept;
use App\Models\Discount;
use App\Models\Driver;
use App\Models\Itinerary;
use App\Models\Unit;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
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
    public $concept;
    public $discount;
    public $voucher;

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

    public $formEditItineraries = [];

    public $paginate = 5;
    public $budget_date;
    public $vehicle_type=1;
    public $vehicle_pax=0;
    public $vehicle;
    public $budget_name;

    public $date;
    public $description;
    public $km = 0;
    public $admin_expense = 550;
    public $laps = 0;
    public $performance = 1;
    public $liters = 0;
    public $disel_price = 0;
    public $disel_cost = 0;
    public $salary = 0;
    public $per_diem = 0;
    public $hotel = 0;
    public $tax_burden = 79.23;
    public $flor_rigth = 0;
    public $booths = 0;
    public $maintenance = 272.82;
    public $amenities = 0;
    public $sublet = 0;
    public $total_cost = 0;
    public $utility_percentage = 1;
    public $utility = 0;
    public $net_rate = 0;
    public $tax = 0;
    public $total = 0;

    public $amount=0;


    public $voucherType="";
    public $voucher_type_selected;

    public $unit_id="";
    public $driver_id="";
    public $driver_name;
    public $driver_phone;
    public $unit;
    public $observations;

    public $editVehicleForm = [
        'vehicle_type' => null,
        'vehicle_pax' => null
    ];


    public $editConceptForm = [
        'date' => null,
        'description' => null,
        'km' => null,
        'admin_expense' => null,
        'laps' => null,
        'performance' => null,
        'liters' => null,
        'disel_price' => null,
        'disel_cost' => null,
        'salary' => null,
        'per_diem' => null,
        'hotel' => null,
        'tax_burden' => null,
        'flor_rigth' => null,
        'booths' => null,
        'maintenance' => null,
        'amenities' => null,
        'sublet' => null,
        'total_cost' => null,
        'utility_percentage' => null,
        'utility' => null,
        'net_rate' => null,
        'tax' => null,
        'total' => null
    ];

    public $editDiscountForm = [
        'amount' => null
    ];

    public $budgets=[];
    public $concepts=[];
    public $vouchers=[];
    public $vehicles=[];
    public $drivers=[];
    public $units=[];
    public $itineraries=[];
    public $array_itineraries=[];

    public $name_search='';
    public $email_search='';
    public $phone_search='';


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
    public $modal_create_budget=false;
    public $modal_create_vehicle=false;
    public $modal_edit_vehicle=false;
    public $modal_create_concept=false;
    public $modal_edit_concept=false;
    public $modal_create_discount=false;
    public $modal_edit_discount=false;
    public $modal_create_voucher=false;
    public $modal_confirm_vehicle_delete=false;
    public $modal_view_itineraries=false;


    protected $listeners = [
        'closeAddClient'=>'closeAddClient',
        'render' => 'render'
    ];


    public function mount(){
            $this->date = Carbon::now()->toFormattedDateString();
    }

    public function navBar($value)
    {
        switch ($value) {
            case '1':
                $this->reset('detailsClient','tableClients','createBudget');
                break;
            case '2':
                $this->detailsClient=true;
                $this->reset('createBudget');
                break;
            default:
                # code...
                break;
        }
    }

    public function updatingPaginate(){
        $this->resetPage();
    }

    public function closeAddClient(){
        $this->addClient=false;
    }

    public function modalCreateBudget(){
        /* $this->detailsClient=false; */
        $this->modal_create_budget = true;
    }

    public function createBudget(){
        $this->validate([
            'budget_name' => 'required',
            'budget_date' => 'required'
        ]);
        $this->budget = Budget::create([
            'name' =>  $this->budget_name,
            'date' => $this->budget_date,
            'user_id' => $this->client->id,
            'status' => 0,
        ]);
        $this->budgets = Budget::where('user_id',$this->client->id)->get();
        $this->modal_create_budget = false;
        $this->detailsClient=false;
        $this->createBudget = true;
    }

    public function changeEnableTax($value){
        $this->budget->update([
            'enable_tax' => $value
        ]);
        $this->budget = Budget::find($this->budget->id);
    }

    public function createVehicle(){
        Vehicle::create([
            'type' => $this->vehicle_type,
            'pax' => $this->vehicle_pax,
            'budget_id' => $this->budget->id,
        ]);
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
        $this->modal_create_vehicle = false;
    }

    public function editVehicle(Vehicle $vehicle){
        $this->modal_edit_vehicle = true;
        $this->vehicle = $vehicle;
        $this->editVehicleForm['vehicle_type'] = $vehicle->type;
        $this->editVehicleForm['vehicle_pax'] = $vehicle->pax;

    }

    public function updateVehicle(){
        $this->vehicle->update([
            'type' => $this->editVehicleForm['vehicle_type'],
            'pax' => $this->editVehicleForm['vehicle_pax'],
        ]);
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
        $this->modal_edit_vehicle = false;
    }

    public function modalDeleteVehicle(Vehicle $vehicle){
        $this->modal_confirm_vehicle_delete = true;
        $this->vehicle = $vehicle;
    }

    public function deleteVehicle(){
        $this->vehicle->delete();
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
        $this->modal_confirm_vehicle_delete = false;
    }

    public function copyVehicle(Vehicle $vehicle){

        $newVehicle = Vehicle::create([
            'type' => $vehicle->type,
            'pax' => $vehicle->pax,
            'budget_id' => $this->budget->id,
        ]);

        foreach ($vehicle->concepts as $concept) {
            Concept::create([
                'date' => $concept->date,
                'description' => $concept->description,
                'admin_expense' => $concept->admin_expense,
                'vehicle_id' => $newVehicle->id,
                'km' => $concept->km,
                'laps' => $concept->laps,
                'performance' => $concept->performance,
                'liters' => $concept->liters,
                'disel_price' => $concept->disel_price,
                'disel_cost' => $concept->disel_cost,
                'salary' => $concept->salary,
                'per_diem' => $concept->per_diem,
                'hotel' => $concept->hotel,
                'tax_burden' => $concept->tax_burden,
                'flor_rigth' => $concept->flor_rigth,
                'booths' => $concept->booths,
                'maintenance' => $concept->maintenance,
                'amenities' => $concept->amenities,
                'sublet' => $concept->sublet,
                'total_cost' => $concept->total_cost,
                'utility_percentage' => $concept->utility_percentage,
                'utility' => $concept->utility,
                'net_rate' => $concept->net_rate,
                'tax' => $concept->tax,
                'total' => $concept->total
            ]);
        }

        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
    }

    public function editBudget(Budget $budget){
        $this->budget = $budget;
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
        /* $this->concepts = Concept::where('vehicles_id',$this->budget->id)->get(); */
        $this->detailsClient=false;
        $this->createBudget = true;
    }

    public function modalCreateConcept(Vehicle $vehicle){
        $this->vehicle = $vehicle;
        $this->modal_create_concept = true;
    }

    public function addConcept(){
        Concept::create([
            'date' => $this->date,
            'description' => $this->description,
            'admin_expense' => $this->admin_expense,
            'vehicle_id' => $this->vehicle->id,
            'km' => $this->km,
            'laps' => $this->laps,
            'performance' => $this->performance,
            'liters' => $this->liters,
            'disel_price' => $this->disel_price,
            'disel_cost' => $this->disel_cost,
            'salary' => $this->salary,
            'per_diem' => $this->per_diem,
            'hotel' => $this->hotel,
            'tax_burden' => $this->tax_burden,
            'flor_rigth' => $this->flor_rigth,
            'booths' => $this->booths,
            'maintenance' => $this->maintenance,
            'amenities' => $this->amenities,
            'sublet' => $this->sublet,
            'total_cost' => $this->total_cost,
            'utility_percentage' => $this->utility_percentage,
            'utility' => $this->utility,
            'net_rate' => $this->net_rate,
            'tax' => $this->tax,
            'total' => $this->total
        ]);
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
        $this->concepts = Concept::where('vehicle_id',$this->vehicle->id)->get();
        $this->modal_create_concept = false;
    }
    public function editConcept(Concept $concept){
        $this->reset('editConceptForm');
        $this->concept = $concept;
        $this->modal_edit_concept = true;
        $this->editConceptForm['date'] = $concept->date;
        $this->editConceptForm['description'] = $concept->description;
        $this->editConceptForm['admin_expense'] = $concept->admin_expense;
        $this->editConceptForm['vehicle_id'] = $concept->vehicle->id;
        $this->editConceptForm['km'] = $concept->km;
        $this->editConceptForm['laps'] = $concept->laps;
        $this->editConceptForm['performance'] = $concept->performance;
        $this->editConceptForm['liters'] = $concept->liters;
        $this->editConceptForm['disel_price'] = $concept->disel_price;
        $this->editConceptForm['disel_cost'] = $concept->disel_cost;
        $this->editConceptForm['salary'] = $concept->salary;
        $this->editConceptForm['per_diem'] = $concept->per_diem;
        $this->editConceptForm['hotel'] = $concept->hotel;
        $this->editConceptForm['tax_burden'] = $concept->tax_burden;
        $this->editConceptForm['flor_rigth'] = $concept->flor_rigth;
        $this->editConceptForm['booths'] = $concept->booths;
        $this->editConceptForm['maintenance'] = $concept->maintenance;
        $this->editConceptForm['amenities'] = $concept->amenities;
        $this->editConceptForm['sublet'] = $concept->sublet;
        $this->editConceptForm['total_cost'] = $concept->total_cost;
        $this->editConceptForm['utility_percentage'] = $concept->utility_percentage;
        $this->editConceptForm['utility'] = $concept->utility;
        $this->editConceptForm['net_rate'] = $concept->net_rate;
        $this->editConceptForm['tax'] = $concept->tax;
        $this->editConceptForm['total'] = $concept->total;
    }

    public function updateConcept(){
        $this->concept->update([
        'date' => $this->editConceptForm['date'],
        'description' => $this->editConceptForm['description'],
        'admin_expense' => $this->editConceptForm['admin_expense'],
        'km' => $this->editConceptForm['km'],
        'laps' => $this->editConceptForm['laps'],
        'performance' => $this->editConceptForm['performance'],
        'liters' => $this->editConceptForm['liters'],
        'disel_price' => $this->editConceptForm['disel_price'],
        'disel_cost' => $this->editConceptForm['disel_cost'],
        'salary' => $this->editConceptForm['salary'],
        'per_diem' => $this->editConceptForm['per_diem'],
        'hotel' => $this->editConceptForm['hotel'],
        'tax_burden' => $this->editConceptForm['tax_burden'],
        'flor_rigth' => $this->editConceptForm['flor_rigth'],
        'booths' => $this->editConceptForm['booths'],
        'maintenance' => $this->editConceptForm['maintenance'],
        'amenities' => $this->editConceptForm['amenities'],
        'sublet' => $this->editConceptForm['sublet'],
        'total_cost' => $this->editConceptForm['total_cost'],
        'utility_percentage' => $this->editConceptForm['utility_percentage'],
        'utility' => $this->editConceptForm['utility'],
        'net_rate' => $this->editConceptForm['net_rate'],
        'tax' => $this->editConceptForm['tax'],
        'total' => $this->editConceptForm['total'],
        ]);
        $this->modal_edit_concept = false;
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
    }

    public function deleteConcept(Concept $concept){
        $concept->delete();
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
    }

    public function createDiscount(){
        Discount::create([
            'amount' => $this->amount/100,
            'budget_id' => $this->budget->id
        ]);
    }

    public function editDiscount(){
        $this->modal_edit_discount = true;
        $this->editDiscountForm['amount'] = $this->budget->discount->amount*100;
    }

    public function updateDiscount(){
        $this->modal_edit_discount = false;
        $this->budget->discount->update([
            'amount' => $this->editDiscountForm['amount']/100,
        ]);
    }

    //Calculo de los costos
    public function updated(){
        //Calculo para los autobuses
        try {
            $this->liters = ($this->km * $this->laps)/($this->performance);
            $this->disel_cost = $this->disel_price*$this->liters;
            $this->total_cost = $this->disel_cost + $this->salary + $this->per_diem + $this->hotel + $this->tax_burden + $this->flor_rigth + $this->booths + $this->amenities + $this->sublet + $this->maintenance + $this->admin_expense;
            $this->utility = $this->total_cost * ($this->utility_percentage/100);
            $this->net_rate = (($this->utility + $this->total_cost));
            $this->tax = $this->net_rate *.16;
            $this->total = $this->tax + $this->net_rate;


            if ($this->modal_edit_concept) {
                $this->editConceptForm['liters'] = ($this->editConceptForm['km'] * $this->editConceptForm['laps'])/($this->editConceptForm['performance']);
                $this->editConceptForm['disel_cost'] = $this->editConceptForm['disel_price']*$this->editConceptForm['liters'];
                $this->editConceptForm['total_cost'] = $this->editConceptForm['disel_cost'] + $this->editConceptForm['salary'] + $this->editConceptForm['per_diem'] + $this->editConceptForm['hotel'] + $this->editConceptForm['tax_burden'] + $this->editConceptForm['flor_rigth'] + $this->editConceptForm['booths'] + $this->editConceptForm['amenities'] + $this->editConceptForm['sublet'] + $this->editConceptForm['maintenance'] + $this->editConceptForm['admin_expense'];
                $this->editConceptForm['utility'] = $this->editConceptForm['total_cost'] * ($this->editConceptForm['utility_percentage']/100);
                $this->editConceptForm['net_rate'] = (($this->editConceptForm['utility'] + $this->editConceptForm['total_cost']));
                $this->editConceptForm['tax'] = $this->editConceptForm['net_rate'] *.16;
                $this->editConceptForm['total'] = $this->editConceptForm['tax'] + $this->editConceptForm['net_rate'];
            }
        } catch (\Throwable $th) {

        }
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

        $this->client->assignRole('User');

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
        $this->formEdit['password'] = $this->client->password;
        $this->formEdit['company'] = $this->client->company;
        $this->formEdit['city'] = $this->client->city;
        $this->formEdit['comment'] = $this->client->comment;
    }

    public function updateClient(){
        $client = $this->client->update([
            'name' => $this->formEdit['name'],
            'phone' => $this->formEdit['phone'],
            'email' => $this->formEdit['email'],
            'password' => Hash::make($this->formEdit['password']),
            'company' => $this->formEdit['company'],
            'city' => $this->formEdit['city'],
            'comment' => $this->formEdit['comment']
        ]);

        $this->client = User::find($this->client->id);
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
        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
        /* $this->concepts = Concept::where('vehicles_id',$this->budget->id)->get(); */
        $this->detailsClient=false;
        $this->createBudget = true;
        /* $this->vouchers = $budget->vouchers;
        $this->budget_comment = $budget->comment;
        $this->createVoucher = true;
        $this->detailsClient = false; */
    }

    public function modalCreateVoucher(Vehicle $vehicle){
        $this->modal_create_voucher = true;
        $this->vehicle = $vehicle;

    }

    public function updatedVoucherType($voucherType){
        if ($voucherType == 1) {
            $this->drivers = Driver::all();
            $this->units = Unit::where('status','1')->get();
        }
        $this->voucher_type_selected = $voucherType;
    }

    public function addVoucher(){

        if ($this->voucher_type_selected == 0) {
            $voucher = Voucher::create([
                'type' => $this->voucher_type_selected,
                'driver_name' => $this->driver_name,
                'driver_phone' => $this->driver_phone,
                'vehicle_id' => $this->vehicle->id,
                'unit' => $this->unit,
                'observations' => $this->observations

            ]);
        }else{
            $voucher = Voucher::create([
                'type' => $this->voucher_type_selected,
                'driver_name' => $this->driver_name,
                'vehicle_id' => $this->vehicle->id,
                'driver_id' => $this->driver_id,
                'unit_id' => $this->unit_id,
                'observations' => $this->observations
            ]);
        }

        foreach ($this->vehicle->concepts as $concept) {
            Itinerary::create([
                'date' => $concept->date,
                'description' => $concept->description,
                'voucher_id' => $voucher->id
            ]);
        }
        $this->modal_create_voucher = false;

        $this->modalEditVoucher($this->vehicle);
        /* $this->itineraries = Itinerary::where('voucher_id',$voucher->id)->get();
        foreach ($this->itineraries as $itinerary) {
            $this->array_itineraries += ["comments.$itinerary->id" => $itinerary->comments,];
            $this->array_itineraries += ["id.$itinerary->id" => $itinerary->id];
        }
        $this->modal_view_itineraries = true; */

        /* $this->itineraries = $voucher->itineraries; */

        $this->vehicles = Vehicle::where('budget_id',$this->budget->id)->get();
    }

    public function modalEditVoucher(Vehicle $vehicle){
        $this->reset('array_itineraries');
        $this->voucher = Voucher::where('vehicle_id',$vehicle->id)->first();
        $this->itineraries = Itinerary::where('voucher_id',$this->voucher->id)->get();
        foreach ($this->itineraries as $itinerary) {
            $this->array_itineraries += ["comments.$itinerary->id" => $itinerary->comments,];
        }
        $this->modal_view_itineraries = true;
    }

    public function updateAllItineraries(){
        foreach ($this->itineraries as $itinerary) {
            /* dd($this->array_itineraries["comments.".$itinerary->id]); */
            $itinerary->update([
                'comments' => $this->array_itineraries["comments.".$itinerary->id]
            ]);
        }

        $this->reset('array_itineraries');
        $this->modal_view_itineraries = false;
    }

    public function addCommentBudget(){
        $this->budget->update([
            'comment' => $this->budget_comment
        ]);
        $this->vouchers = Voucher::where('budget_id',$this->budget->id)->get();
    }

    public function downloadReceipt(Budget $budget){

        return redirect()->route('download.receipt',compact('budget'));
    }

    public function downloadVoucher(Vehicle $vehicle){

        return redirect()->route('download.voucher',compact('vehicle'));
    }

    public function updatingNameSearch()
    {
        $this->reset('email_search','phone_search');
        $this->resetPage();
    }

    public function updatingEmailSearch()
    {
        $this->reset('name_search','phone_search');
        $this->resetPage();
    }

    public function updatingPhoneSearch()
    {
        $this->reset('name_search','email_search');
        $this->resetPage();
    }

    public function render(){
        if ($this->name_search != '') {
            $clients = User::whereHas('roles', function (Builder $query){
                $query->where('name','LIKE','User');
            })->where('name','LIKE','%'.$this->name_search.'%')->orderBy('id','asc')->paginate($this->paginate);
        }else if ($this->email_search != '') {
            $clients = User::whereHas('roles', function (Builder $query){
                $query->where('name','LIKE','User');
            })->where('email','LIKE','%'.$this->email_search.'%')->orderBy('id','asc')->paginate($this->paginate);
        }else if ($this->phone_search != '') {
            $clients = User::whereHas('roles', function (Builder $query){
                $query->where('name','LIKE','User');
            })->where('phone','LIKE','%'.$this->phone_search.'%')->orderBy('id','asc')->paginate($this->paginate);
        }else{
            $clients = User::whereHas('roles', function (Builder $query){
                $query->where('name','LIKE','User');
            })->orderBy('id','desc')->paginate($this->paginate);
        }

        return view('livewire.clients',[
            'clients' => $clients
        ]);
    }
}
