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
    return view('cadastro-produto');
});

Route::get('/cadastro-produto', [ProdutosController::class, 'cadastrarProduto']);
Route::post('/cadastro-produto', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produto/vizualizar/{id}', [ProdutosController::class, 'vizualizar']);
Route::get('/produto/editar/{id}', [ProdutosController::class, 'editar']);
Route::post('/produto/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produto/deletar/{id}', [ProdutosController::class, 'delete']);
Route::post('/produto/deletar/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');
Route::get('/painel-produtos', [ProdutosController::class, 'painel']);