<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio.index');
Route::get('/categorias', [InicioController::class, 'categorias'])->name('inicio.categorias');
Route::get('/contactanos', [InicioController::class, 'contactanos'])->name('inicio.contactanos');
