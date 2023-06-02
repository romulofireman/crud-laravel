<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('administradores', 'App\Http\Controllers\AdministradorController')->parameters([
    'administradores' => 'administradore',
]);

/*
Route::get('/administradores', [AdministradorController::class, 'index'])->name('administradores.index');
Route::get('/administradores/create', [AdministradorController::class, 'create'])->name('administradores.create');
Route::post('/administradores', [AdministradorController::class, 'store'])->name('administradores.store');
Route::get('/administradores/{administrador}', [AdministradorController::class, 'show'])->name('administradores.show');
Route::get('/administradores/{administrador}/edit', [AdministradorController::class, 'edit'])->name('administradores.edit');
Route::put('/administradores/{administrador}', [AdministradorController::class, 'update'])->name('administradores.update');
Route::delete('/administradores/{administrador}', [AdministradorController::class, 'destroy'])->name('administradores.destroy');
*/


