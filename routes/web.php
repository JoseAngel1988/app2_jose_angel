<?php

use App\Http\Controllers\AperturaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');


});

Route::get('/bienvenida', [AperturaController::class, 'bienvenida']);

Route :: resource('/productos', ProductoController::class);

//hola//
