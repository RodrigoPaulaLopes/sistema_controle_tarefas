<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InformacaoController;


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/entrar', [LoginController::class, 'entrar'])->name('entrar');
Route::get('/sair', [LoginController::class, 'sair'])->name('sair');
Route::get('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::post('/registrar', [LoginController::class, 'registrarInserir'])->name('registrar');
Route::get('/informacao', [InformacaoController::class, 'informacao'])->name('informacao');


Route::get('/home', [IndexController::class, 'index'])->name('index');
Route::get('/todos/{search?}',  [TodosController::class, 'todos'])->name('todos');


Route::get('/editar/{id}', [FormularioController::class, 'buscarPorId'])->name('editar');
Route::get('/excluir/{id}', [FormularioController::class, 'excluir'])->name('excluir');
Route::get('/finalizar/{id}', [FormularioController::class, 'finalizar'])->name('finalizar');
Route::get('/formulario', [FormularioController::class, 'formulario'])->name('formulario');
Route::post('/formulario', [FormularioController::class, 'inserir'])->name('formulario');