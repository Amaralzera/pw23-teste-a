<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    public function index(){
        //$prods = Produto::onlyTrashed()->get();
        $prods = Produto::all();
        return view('produtos.index', [
            'prods' => $prods,
        ]);

    }

    public function add(){
        return view('produtos.add');
    }

    public function addSave(Request $form) {
        //dd($form);
        $dados = $form->validate([
            'name' => 'required|unique:produtos|min:3',
            'price' => 'required|numeric|min:0',
            'quantify' => 'required|integer|min:0',

        ]);

        Produto::create($dados);
        return redirect()->route('produtos')->with('sucesso', 'Produto inserido com sucesso');
    }

    public function edit(Produto $produto){
        return view('produtos.add',[
            'prod' => $produto,
        ]);
    }

    public function view(Produto $produto){
        return view('produtos.view',[
            'prod' => $produto,
        ]);

    }

    public function editSave(Request $form, Produto $produto){
        $dados = $form->validate([

        'name' => [
            'required',
            Rule::unique('produtos')->ignore($produto->id),
            'min:3',
        ],
        'price' => 'required|numeric|min:0',
        'quantify' => 'required|integer|min:0'

        ]);
        $produto->fill($dados)->save();
        return redirect()->route('produtos')->with('sucesso', 'Produto alterado com sucesso');


}
public function delete(Produto $produto){
    return view('produtos.delete', [
        'prod' => $produto,
    ]);
}

public function deleteForReal(produto $produto){
    $produto->delete();
    return redirect()->route('produtos')->with('sucesso, Produto apagado!');
}

}
