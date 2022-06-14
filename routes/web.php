<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\ProdutosController;


// CRUD - Create    
Route::get('/cadastro-produto', [ProdutosController::class, 'cadastrarProduto']);
Route::post('/cadastro-produto/sucesso', [ProdutosController::class, 'store'])->name('sucesso');

// CRUD - Read
Route::get('/painel-produto', [ProdutosController::class, 'painel']);

// CRUD - Update
Route::get('/produto/editar/{id}', [ProdutosController::class, 'editar']);
Route::post('/painel-produto/{id}/editado', [ProdutosController::class, 'update'])->name('editado');;

// CRUD - Delete
Route::get('/produto/deletar/{id}', [ProdutosController::class, 'delete']);
Route::post('/painel-produto/{id}/excluido', [ProdutosController::class, 'destroy'])->name('excluido');

