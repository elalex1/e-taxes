<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

//================================================================================================
//                             Rutas Fuera del Middleware                                       //
//================================================================================================

Route::get('/', [LoginController::class, 'index'])->name('index')->middleware('guest');

Route::post('/login', [LoginController::class, 'Login'])->name('Login');
Route::post('/register', [RegisterController::class, 'Register'])->name('Register');

//===============================================================================================
//                            Rutas Dentro del Middleware                                      //   
//===============================================================================================

Route::middleware(['auth'])->group(function () {
    Route::get('/inicio', [LoginController::class, 'inicio'])->name('inicio');
    Route::post('/logout', [LoginController::class, 'Logout'])->name('Logout');
});