<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDois7Controller;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDois7Controller::class, 'retornarMaior']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/quatro',
 [ExercicioQuatroController::class , 'verificarNumero']);
 
 Route::post('exercicio/tres' ,[ExercicioTresController::class, 'media']);

 Route::post('exercicio/cinco' ,[ExercicioCincoController::class, 'verificar']);

 Route::post('exercicio/seis' ,[ExercicioSeisController::class, 'idade']);
