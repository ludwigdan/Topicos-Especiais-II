<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
    	'descricao'
    ];

    public function contrapartida(){
    	return $this->hasMany('App\Contrapartida');
    }

}
