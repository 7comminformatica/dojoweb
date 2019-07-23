<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Pessoa;
use App\Interesse;
use App\PessoaInteresse;

class usuarioController extends Controller
{
    public function exibir(){

        $pessoas = Pessoa::all();

        foreach ($pessoas as $pessoa) {
           $interesses = $pessoa->interesses();
           $pessoa->interesses = $interesses;
        }



        return view('index')->with('pessoas',$pessoas);
    }

    
}
