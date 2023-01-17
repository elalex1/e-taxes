<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\BarridoController;

use App\Http\Controllers\Ingresos\IngresosController;
use App\Http\Controllers\Egresos\EgresosController;
use App\Http\Controllers\Costos\CostosController;
use App\Http\Controllers\Pagos\PagosController;
use App\Http\Controllers\Nominas\NominasController;

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
  });
  
  //Reoptimized class loader:
  Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
  });
  
  //Route cache:
  Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
  });
  
  //Clear Route cache:
  Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
  });
  
  //Clear View cache:
  Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
  });
  
  //Clear Config cache:
  Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
  });

//================================================================================================
//                             Rutas Fuera del Middleware                                       //
//================================================================================================

Route::get('/', [LoginController::class, 'index'])->name('index')->middleware('guest');

Route::post('/login', [LoginController::class, 'Login'])->name('Login');
Route::post('/register', [RegisterController::class, 'Register'])->name('Register');
//Forgot password=================================================================================
Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request'); //Hace request de que se olvido el pass
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email'); 
Route::get('reset-password/{token}', [PasswordResetLinkController::class, 'newpassword'])->name('password.reset');
Route::post('reset-password', [PasswordResetLinkController::class, 'update'])->name('password.update');
Route::get('verificarcorreo{id}', [RegisterController::class, 'VerificarCorreo'])->name('VerificarCorreo');
Route::get('barrido{email}', [BarridoController::class, 'Verificado'])->name('Verificado');


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
//Ingresos========================================================================================
    Route::get('/Ingresos', [IngresosController::class, 'index'])->name('Ingresos');
//Egresos=========================================================================================
    Route::get('/Egresos', [EgresosController::class, 'index'])->name('Egresos');
//Costos Fijos====================================================================================
    Route::get('/Costos', [CostosController::class, 'index'])->name('Costos');
//Pagos===========================================================================================
    Route::get('/Pagos', [PagosController::class, 'index'])->name('Pagos');
//Nominas=========================================================================================
    Route::get('/Nominas', [NominasController::class, 'index'])->name('Nominas');

});