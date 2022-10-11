<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about']);

Route::controller(EstadoController::class)->group(function(){
    Route::get('/estado/listar', 'index')->name('estado.index');
    Route::get('/estado/inserir', 'inserirIndex')->name('estado.inserir.index');
    Route::post('/estado/inserir', 'inserir')->name('estado.inserir');
    Route::post('/estado/alterar', 'alterar')->name('estado.alterar');
    Route::post('/estado/excluir', 'excluir')->name('estado.excluir');
});

Route::controller(CidadeController::class)->group(function(){
    Route::get('/cidade/listar', 'index')->name('cidade.index');
    Route::get('/cidade/inserir', 'inserirIndex')->name('cidade.inserir.index');
    Route::post('/cidade/inserir', 'inserir')->name('cidade.inserir');
    Route::post('/cidade/alterar', 'alterar')->name('cidade.alterar');
    Route::post('/cidade/excluir', 'excluir')->name('cidade.excluir');
});