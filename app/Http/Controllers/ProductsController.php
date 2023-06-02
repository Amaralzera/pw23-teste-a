<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
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
            'quantify' => 'required|integer|min:0'

        ]);

        Produto::create($dados);
        return redirect()->route('produtos');
    }

    public function edit(Produto $produto){
        dd($produto);
    }

    public function view(Produto $produto){
        return view('produtos.view',[
            'prod' => $produto,
        ]);

    }
}
