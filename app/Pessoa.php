<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
protected $table = 'pessoas';
    protected $fillable = [
        'nome', 'email', 'telefone'
    ];


public function interesses() {
    return $this->hasMany('App\PessoaInteresse');
}


}
