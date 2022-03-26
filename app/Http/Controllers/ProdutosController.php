<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function cadastrarProduto(){
        return view('cadastro-produto');
    }   

    public function store(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Cadastrado!";
    }
    
    public function vizualizar($id){
        $produto = Produto::findOrFail($id);

        return view('vizualizar', ['produto' => $produto]);
    }
}
