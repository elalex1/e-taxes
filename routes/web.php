<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuariosController;

//================================================================================================
//                             Rutas Fuera del Middleware                                       //
//================================================================================================

Route::get('/', [LoginController::class, 'index'])->name('index')->middleware('guest');

Route::post('/login', [LoginController::class, 'Login'])->name('Login');
Route::post('/register', [RegisterController::class, 'Register'])->name('Register');

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request'); //Hace request de que se olvido el pass

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

Route::get('verificarcorreo', [RegisterController::class, 'VerificarCorreo'])->name('VerificarCorreo');

//===============================================================================================
//                            Rutas Dentro del Middleware                                      //   
//===============================================================================================

Route::middleware(['auth'])->group(function () {
    Route::get('/inicio', [LoginController::class, 'inicio'])->name('inicio');
    Route::get('/logout', [LoginController::class, 'Logout'])->name('Logout');
//Empresas========================================================================================
    Route::post('CrearEmpresa', [EmpresaController::class, 'CrearEmpresa'])->name('CrearEmpresa');
//Usuarios========================================================================================
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('Usuarios');
    Route::get('/ExportUsuarios', [UsuariosController::class, 'ExportUsuarios'])->name('ExportUsuarios');
});