<?php

use App\Http\Controllers\ClientesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente/registrar',[ClientesController::class,'create'])->name('cliente.create');
Route::post('cliente/guardar',[ClientesController::class,'store'])->name('cliente.store');
Route::get('cliente/listar',[ClientesController::class,'index'])->name('cliente.index');
Route::get('cliente/{cliente}/editar',[ClientesController::class,'edit'])->name('cliente.edit');
Route::put('cliente/{cliente}/actualizar',[ClientesController::class,'update'])->name('cliente.update');
Route::get('cliente/{cliente}/mostrar',[ClientesController::class,'show'])->name('cliente.show');
Route::delete('cliente/{cliente}/eliminar',[ClientesController::class,'destroy'])->name('cliente.destroy');
