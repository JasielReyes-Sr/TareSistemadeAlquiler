<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AlquilerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}/equipos', [CategoriaController::class, 'equipos']);

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}/registros', [ClienteController::class, 'registros']);

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/{id}/registros', [EmpleadoController::class, 'registros']);

Route::get('/equipos', [EquipoController::class, 'index']);
Route::get('/equipos/{id}/categoria', [EquipoController::class, 'categoria']);
Route::get('/equipos/{id}/alquileres', [EquipoController::class, 'alquileres']);

Route::get('/registros', [RegistroController::class, 'index']);
Route::get('/registros/{id}/cliente', [RegistroController::class, 'cliente']);
Route::get('/registros/{id}/empleado', [RegistroController::class, 'empleado']);
Route::get('/registros/{id}/alquileres', [RegistroController::class, 'alquileres']);

Route::get('/alquileres', [AlquilerController::class, 'index']);
Route::get('/alquileres/{id}/registro', [AlquilerController::class, 'registro']);
Route::get('/alquileres/{id}/equipo', [AlquilerController::class, 'equipo']);