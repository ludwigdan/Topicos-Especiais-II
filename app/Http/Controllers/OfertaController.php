<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Contrapartida;
use App\Http\Requests\OfertaRequest;

class OfertaController extends Controller
{
    public function index(){
        $ofertas = Oferta::all();
        return view('ofertas.index', ['ofertas'=>$ofertas]);
    }

    public function createmaster(){
    	return view('ofertas.masterdetail');
    }

    public function masterdetail(OfertaRequest $request){
    	$oferta = Oferta::create([
    			'descricao' => $request->get('descricao')
    		]);

        $produtos = $request->produtos;
        $valores = $request->valores;

    	foreach($produtos as $key => $value){
    		Contrapartida::create([
                'oferta_id' => $oferta->id,
                'produto_id' => $produtos[$key],
                'valor' => $valores[$key]
    		]);
    	}

    	return redirect()->route('ofertas');
    }
	
	public function edit($id){
		$oferta = Oferta::find($id);
		return view('ofertas.edit', compact('oferta'));
	}
	
	public function update(OfertaRequest $request, $id){
		$oferta = Oferta::find($id)->update($request->all());
		Contrapartida::where('oferta_id', $id)->delete();       
		$produtos = $request->produtos;
        $valores = $request->valores;
		
    	foreach($produtos as $key => $value){
    		Contrapartida::create([
                'oferta_id' => $id,
                'produto_id' => $produtos[$key],
                'valor' => $valores[$key]
    		]);
    	}		
		
		return redirect('ofertas');
	}
	
	public function destroy($id){
		Contrapartida::where('oferta_id', $id)->delete();
		Oferta::find($id)->delete();	
		return redirect('ofertas');
	}	
}
