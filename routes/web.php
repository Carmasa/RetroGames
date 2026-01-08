<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'index']);

// Ruta placeholder para la ficha (tu compañero puede reemplazarla por su controlador/vista)
Route::get('/juego/{id}', function ($id) {
    return "Ficha de juego #{$id} (pendiente de implementar)";
})->name('juego.show');
