<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = ['razao_social', 'nome_fantasia', 'cnpj', 'cidade', 'bairro', 'rua', 'numero'];

    public function faturamento(){
    	return $this->hasMany('App\Faturamento');
    }

}
