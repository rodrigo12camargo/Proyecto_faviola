<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Redirigir la ruta raíz a la vista de registro
Route::get('/', function () {
    return redirect('/register');
});

// Mostrar formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Manejar el registro de usuarios
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Mostrar formulario de inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Manejar el inicio de sesión
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Ruta protegida para mostrar los horarios
Route::get('/schedule', function () {
    return view('schedule'); // Asegúrate de tener una vista llamada schedule.blade.php
})->middleware('auth')->name('schedule');
