<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


// Ruta para la página de inicio
Route::get('/', function () {
    return view('fittracker_inicio');
});
Route::get('/inicio', [registroController::class, 'inicio'])->name('inicio');

// Ruta para la página de registro
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

// Ruta para la página de inicio de sesión
Route::get('/iniciar_sesion', function () {
    return view('iniciar_sesion');
})->name('iniciar_sesion');
Route::post('/registrarse', [TuControlador::class, 'registrar'])->name('registrar');


// Ruta para manejar el envío del formulario de registro
Route::post('/registrar', [registroController::class, 'store'])->name('registrar');

// Ruta para manejar el envío del formulario de inicio de sesión
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Archivo de autenticación (si es necesario)
require __DIR__.'/auth.php';
