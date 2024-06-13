<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function adiciona(Request $request)
    {
        //dd($request);
        $carrinho = Session::get('carrinho',[]);
        
        $item = [
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco')
        ];
        $carrinho[] = $item;
        Session::put('carrinho', $carrinho);

        return response()->json(['message' => 'Item added to cart', 'carrinho' => $carrinho]);
    }
}
