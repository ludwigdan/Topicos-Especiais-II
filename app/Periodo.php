<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = ['dt_inicio', 'dt_fim'];

    public function faturamento(){
    	return $this->hasMany('App\Faturamento');
    }
    
}
