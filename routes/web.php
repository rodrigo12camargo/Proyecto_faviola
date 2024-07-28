<?php

use Illuminate\Support\Facades\Route;

// Redirigir la ruta raíz a la vista de registro
Route::get('/', function () {
    return redirect('/register');
});

// Mostrar formulario de registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Manejar el registro de usuarios
Route::post('/register', function () {
    // Aquí se puede manejar el registro si es necesario
    return redirect()->route('login')->with('success', 'Registro exitoso. Por favor, inicie sesión.');
})->name('register.post');

// Mostrar formulario de inicio de sesión
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Manejar el inicio de sesión y redirigir a la vista de horarios
Route::post('/login', function () {
    return redirect()->route('schedule');
})->name('login.post');

// Ruta para mostrar los horarios, sin middleware de autenticación
Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');
