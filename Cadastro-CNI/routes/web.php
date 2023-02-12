<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BancoDeDadosController;

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

Route::get('/', [BancoDeDadosController::class,'CadastroView'])->name('BancoDeDadosController.Cadastroview');
Route::post('/', [BancoDeDadosController::class,'CadastroForm'])->name('BancoDeDadosController.Cadastroform');