<?php

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

Route::get('/', [AllControllers::class, 'RegistrarCursosHome'])->name('AllControllers.RegistrarCursosHome');
Route::post('/', [AllControllers::class,'CadastrarCursos'])->name('AllControllers.CadastrarCursos');

Route::get('/cadastro/escolas', [AllControllers::class,'EscolasCadastroHome'])->name('AllControllers.EscolasCadastroHome');
Route::post('/cadastro/escolas', [AllControllers::class,'CadastrarEscolas'])->name('AllControllers.CadastrarEscolas');

