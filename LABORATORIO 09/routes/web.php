<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\TiendaController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tienda', [TiendaController::class, 'index']);
Route::get('/tienda/create', [TiendaController::class, 'create']);
Route::get('/tienda/{post}', [TiendaController::class, 'show']);

Route::get('/demo', function () {
    return "Aquí se muestra el contenido de Demo";
});

Route::get('/contenido/{post}/{categoria}', function ($post, $categoria) {
    return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
});

Route::get('/lista/{post}/{categoria?}', function ($post, $categoria = 'hogar') {
    return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
});
