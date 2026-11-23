<?php

use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Páginas de Comunidades Especializadas
Route::prefix('comunidades')->name('comunidades.')->group(function () {
    Route::get('/consorcios-para-licitaciones', [ComunidadController::class, 'consorcios'])->name('consorcios');
    Route::get('/plantel-profesional', [ComunidadController::class, 'plantelProfesional'])->name('plantel-profesional');
    Route::get('/proveedores', [ComunidadController::class, 'proveedores'])->name('proveedores');
});

// Alias directos para mantener compatibilidad con URLs canónicas
Route::get('/consorcios-para-licitaciones', [ComunidadController::class, 'consorcios']);
Route::get('/plantel-profesional', [ComunidadController::class, 'plantelProfesional']);
Route::get('/proveedores', [ComunidadController::class, 'proveedores']);
