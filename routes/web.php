<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
use App\Http\Controllers\SesionController;

Route::get('/', function () {
    return view('home');
});
//aqui se crean las rutas para el login y el registro
Route::get('/login', [SesionController::class, 'create'])
->middleware('throttle:5,1')
->name('login.index');

Route::post('/login', [SesionController::class, 'store'])
->name('login.store');

Route::get('/register', [registroController::class, 'create'])
->name('register.index');

Route::post('/register', [registroController::class, 'store'])
->name('register.store');

Route::get('/dashboard', [SesionController::class, 'dashboard'])
->name('dashboard');




