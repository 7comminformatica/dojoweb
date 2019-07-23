<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;
use App\Interesse;
use App\PessoaInteresse;

class cadastroController extends Controller
{
    public function exibir(){
        return view('cadastro');
    }

    public function inserir(Request $request){

       $pessoa = new Pessoa;
       $pessoa->nome = $request->nome;
       $pessoa->email = $request->email;
       $pessoa->telefone = $request->telefone;
        
       $pessoa->save();

       $id = $pessoa->id;
       
       $pessoaInteresse = new PessoaInteresse;
       $interesses = $request->interesse;
      
       foreach ($interesses as $interesse) {
           $pessoaInteresse->pessoa_id =$id;
           $pessoaInteresse->interesse_id = $interesse;
           $pessoaInteresse->save();
        }
        
        return view('/')

    }
}
