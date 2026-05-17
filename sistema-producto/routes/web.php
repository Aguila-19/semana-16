<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insertar', [ProductoController::class, 'insertar']);

Route::get('/mostrar', [ProductoController::class, 'mostrar']);

Route::get('/actualizar', [ProductoController::class, 'actualizar']);

Route::get('/eliminar', [ProductoController::class, 'eliminar']);