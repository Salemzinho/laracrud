<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

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

    public function editar($id){
        $produto = Produto::findOrFail($id);

        return view('editar', ['produto' => $produto]);
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);

        return view('delete', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Produto Atualizado";
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Excluido";
    }

    public function painel(){
        $produto = Produto::get();

        return view('painel-produtos', ['produto' => $produto]) ;
    }
}
