<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['descricao'];

    public function faturamento(){
    	return $this->hasMany('App\Faturamento');
    }
    
}
