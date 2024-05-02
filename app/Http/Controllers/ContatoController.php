<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use Illuminate\Validation\Rule;

class ContatoController extends Controller
{
    public function contato(Request $request){

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // $contato->save();

        // print_r($contato->getAttributes());

        // $contato = new SiteContato();
        // $contato->fill($request->all());
        // $contato->save();

        // $contato->create($request->all());
        return view("site.contato");
    }

    public function salvar(Request $request){
        // $contato = new SiteContato();
        // $contato->create($request->all());
        //validação dos dados
        $request->validate([
            'nome'=>'required|min:4|max:40|string',
            'telefone'=>'required',
            'email'=>'required',
            'motivo_contato'=>'required',
            'mensagem'=>'required',
        ]);
        SiteContato::create($request->all());
    }
}
