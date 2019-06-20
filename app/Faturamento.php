<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faturamento extends Model
{
    protected $fillable = [
    	'valor',
    	'estabelecimento_id',
    	'produto_id',
    	'periodo_id'
    ];

    public function estabelecimento(){
    	return $this->belongsTo('App\Estabelecimento');
    }

    public function periodo(){
    	return $this->belongsTo('App\Periodo');
    }

    public function produto(){
    	return $this->belongsTo('App\Produto');
    }

}
