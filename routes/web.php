<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\SesionController;

// Ruta de inicio de sesión
Route::get('/login', [SesionController::class, 'create'])
    ->middleware(['guest', 'throttle:5,1'])
    ->name('login');

Route::post('/login', [SesionController::class, 'store'])
    ->name('login.store');

// Ruta de registro
Route::get('/register', [registroController::class, 'create'])
    ->middleware(['guest', 'throttle:5,1'])
    ->name('register.index');

Route::post('/register', [registroController::class, 'store'])
    ->name('register.store');

// Rut0as protegidas para usuarios autenticados:
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/dashboard', [SesionController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

// La ruta de logout también se protege:
Route::get('/logout', [SesionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');