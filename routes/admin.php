<?php

use App\Http\Livewire\Detailclient;
use App\Http\Livewire\Disponibilities;
use App\Http\Livewire\Menusidebar;
use App\Models\Budget;
use App\Models\Driver;
use App\Models\Unit;
use App\Models\Vehicle;
use App\Models\Voucher;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['role:Admin'])->get('/', Menusidebar::class)->name('admin.index');
/* Route::get('disponibilities',Disponibilities::class)->name('disponibilities'); */

Route::get('/download/receipt/{budget}', function (Budget $budget) {
    $vehicles = Vehicle::where('budget_id',$budget->id)->get();
    $pdf = PDF::loadView('receipt',compact('vehicles','budget'));
    return $pdf->stream('receipt.pdf',compact('budget','vehicles'));
    //return view('receipt',compact('vehicles','budget'));
})->name('download.receipt');

Route::get('/download/voucher/{vehicle}', function (Vehicle $vehicle) {
    $voucher = Voucher::where('vehicle_id',$vehicle->id)->first();
        $unit = Unit::find($voucher->unit_id);
        $driver = Driver::find($voucher->driver_id);
        $pdf = PDF::loadView('voucher',compact('voucher','vehicle','unit','driver'));
        //return view('voucher',compact('voucher','vehicle','unit','driver'));
        return $pdf->download('voucher.pdf',compact('voucher','vehicle','unit','driver'));
})->name('download.voucher');

Route::get('/restablecer-contrasena', function () {
    return view('usuario.reset-password');
});
Route::get('/cuentas', function () {
    return view('usuario.cuentas');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/admin');
    })->name('dashboard');
});