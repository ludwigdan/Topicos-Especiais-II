<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrapartida extends Model
{
    protected $fillable = [
    	'valor', 'produto_id', 'oferta_id'
    ];

    public function oferta(){
    	return $this->belongsTo('App\Oferta');
    }

    public function produto(){
    	return $this->belongsTo('App\Produto');
    }

}
