<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdutoResource;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate();
        return ProdutoResource::collection($produtos);
    }
    
}
