<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        // $fornecedores = ['Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3', 'Fornecedor 4', 'Fornecedor 5'];
        $fornecedores = [
            0 => [
                'nome'=> 'Sávio', 
                'status'=> 'N',
                'cnpj'=> '0',
                'ddd'=> '11', //Sao paulo (SP)
                'telefone'=> '111-111'
            ],

            1 => [
                'nome'=> 'Fornecedor 2',
                'status'=> 'S',       
                'ddd'=> '85', //Fortaleza (CE)
                'telefone'=> '222-222'
            ],
        
            2 => [
                'nome'=> 'Fornecedor 3',
                'status'=> 'S',       
                'ddd'=> '32', //Juiz de Fora (MG)
                'telefone'=> '333-333'
            ]
        ];


        // condicao ? se verdade : se falso;
        // condicao ? se verdade : (condicao ? se verdade : se false);

        $mensagem = isset($fornecedores[0]['cnpj']) ? 'Cnpj informado' : 'Cnpj não informado';
        echo $mensagem;


        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
