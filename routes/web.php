<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\ProdutosController;


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

// CRUD - Create    
Route::get('/cadastro-produto', [ProdutosController::class, 'cadastrarProduto']);
Route::post('/cadastro-produto/sucesso', [ProdutosController::class, 'store'])->name('sucesso');

// CRUD - Read
Route::get('/painel-produto', [ProdutosController::class, 'painel']);

// CRUD - Update
Route::get('/produto/editar/{id}', [ProdutosController::class, 'editar']);
Route::post('/painel-produto/{id}/editado', [ProdutosController::class, 'update']);

// CRUD - Delete
Route::get('/produto/deletar/{id}', [ProdutosController::class, 'delete']);
Route::post('/painel-produto/{id}/excluido', [ProdutosController::class, 'destroy']);

