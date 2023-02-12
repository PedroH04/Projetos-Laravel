<?php

use App\Http\Controllers\FormularioIdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginPage;
use App\Http\Controllers\SiteControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllControllers;

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

//Route::get('/Home', HomeController::class);
Route::get('formulario/{$id}', FormularioIdController::class);


/**----------------- Banco de Dados Login/Cadrastro---------------------------*/

/*Controlador da Home*/
Route::get('/', HomeController::class)->name('HomeController');

/*Controlador do ID dos usuarios*/
Route::get('/User{id?}',[AllControllers::class,'UserView'])->name('AllControllers.UserView');

/*Controladores Do cadastro*/
Route::get('/Cadastro', [AllControllers::class,'CadastroView'])->name('AllControllers.Cadastroview');
Route::post('/Cadastro', [AllControllers::class,'CadastroForm'])->name('AllControllers.Cadastroform');


