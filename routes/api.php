<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function(){
    return response()->json([
        'success' => true
    ]);
});*/
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/carrinho', [CarrinhoController::class, 'adiciona']);