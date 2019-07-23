<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Pessoa;
use App\Interesse;
use App\PessoaInteresse;

class usuarioController extends Controller
{
    public function exibir(){
        $pessoas = Pessoas::all();

        foreach ($pessoas as $pessoa) {
           $interesses = $pessoa->interesse();
           $pessoa->interesses = $interesses;
        }

        return view('/',['pessoas' => $pessoas]);
    }

    
}
