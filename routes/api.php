<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WhatsAppConsultasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function (){
    Route::get('/consultar-telefono/{telefono}', [WhatsAppConsultasController::class, 'consultartelefono']);
    Route::get('/empleado-servicio/{servicio}/{telefono}', [WhatsAppConsultasController::class, 'empleadoservicio']);
    Route::post('/guardarencuesta', [WhatsAppConsultasController::class, 'guardarencuesta']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
