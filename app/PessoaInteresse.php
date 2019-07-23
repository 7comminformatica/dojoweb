<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaInteresse extends Model
{
    protected $table = 'pessoas_interesses';
    protected $fillable = ['pessoa_id', 'interesse_id'];


    public function nomeInteresse() {
        return $this->hasOne('App\Interesses');
    }
}
