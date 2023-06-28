<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Livewire\Menusidebar;
use App\Http\Livewire\Perfil;
use App\Models\User;
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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/clientes', function () {
    return view('crm.clientes');
});
/* Route::get('/login', function () {
    return view('usuario.login');
}); */
Route::get('/restablecer-contrasena', function () {
    return view('usuario.reset-password');
})->name('password.reset');

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


Route::get('/perfil', Perfil::class)->middleware('auth')->name('user.profile');
Route::get('/checkout',[CheckoutController::class,'success'])->name('success');
Route::any('/payment',[CheckoutController::class,'cancel'])->name('cancel');


