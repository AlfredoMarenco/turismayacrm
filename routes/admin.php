<?php

use App\Http\Livewire\Detailclient;
use App\Http\Livewire\Disponibilities;
use App\Http\Livewire\Menusidebar;
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

Route::get('/', Menusidebar::class)->name('admin.index');
/* Route::get('disponibilities',Disponibilities::class)->name('disponibilities'); */

Route::get('/clientes', function () {
    $pdf = PDF::loadView('voucher');
    return $pdf->stream();
    /* return view('voucher'); */
});

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
