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

Route::get('/cadastro-produto', [ProdutosController::class, 'cadastrarProduto']);
Route::post('/cadastro-produto', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produto/vizualizar/{id}', [ProdutosController::class, 'vizualizar']);
