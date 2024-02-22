<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\GenerarQRController;
use App\Http\Livewire\Dependencias\IndexDependencias;
use App\Http\Livewire\Colaboradores\IndexColaboradores;

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

Route::get('/dependencias', IndexDependencias::class)->name('dependencias');
Route::get('/colaboradores', IndexColaboradores::class)->name('colaboradores');
Route::get('/generar-qr/{empleado}', [GenerarQRController::class, 'generarQR'])->name('generar-qr');
Route::get('/reporte-dependencia/{dependencia}',[ReportesController::class, 'reportedependencia'])->name('reporte-dependencia');
Route::get('/reporte-colaborador/{empleado}',[ReportesController::class, 'reportecolaborador'])->name('reporte-colaborador');
Route::get('/',[InicioController::class, 'inicio'])->name('inicio');

Route::get('/plantilla', function (){
    return view('plantilla');
});

/*Route::get('/', function () {
    return view('welcome');
})->name('inicio');*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
