<?php

use App\Http\Controllers\PreaprobadoController;
use App\Http\Controllers\usuarioController;
use App\Models\preaprobado;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('sfiformulario/progreso', function () {
  return view('sfiformulario.progreso');
});

Route::get('sfiformulario/{id}/pdf',[PreaprobadoController::class,'pdf']);

/*

Route::get('sfiformulario/pdf', function () { 
    
    $pdf = PDF::loadView('sfiformulario.pdf');    
    return $pdf->stream('prueba.pdf');
   

   
  });

Route::get('sfiusuario/create',[usuarioController::class,'create']);
*/
Route::resource('sfiusuario', UsuarioController::class); 
Route::resource('sfiformulario', 'PreaprobadoController'); 

