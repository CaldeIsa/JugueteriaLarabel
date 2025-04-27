<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('home');
});

Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);
