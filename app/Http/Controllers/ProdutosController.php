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

        return view ('cadastro-produto');
    }

    public function editar($id){
        $produto = Produto::findOrFail($id);

        return view('editar', ['produto' => $produto]);
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);

        return view('deletar', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        $produto = Produto::get();

        return view('painel-produto', ['produto' => $produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        $produto = Produto::get();

        return view ('painel-produto', ['produto' => $produto]);
    }

    public function painel(){
        $produto = Produto::get();

        return view('painel-produto', ['produto' => $produto]) ;
    }
}
