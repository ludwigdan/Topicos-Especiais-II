<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;
use App\Http\Controllers\Controller;
use App\Faturamento;
use App\Http\Requests\EstabelecimentoRequest;

class EstabelecimentoController extends Controller
{
    public function index(){
    	$estabelecimentos = Estabelecimento::all();
    	return view('estabelecimentos.index', ['estabelecimentos'=>$estabelecimentos]);
    }

    public function create(){
    	return view('estabelecimentos.create');
    }

    public function store(EstabelecimentoRequest $request){
    	$novo_estabelecimento = $request->all();
    	Estabelecimento::create($novo_estabelecimento);

    	return redirect('estabelecimentos');
    }

	public function destroy($id){
		Faturamento::where('estabelecimento_id', $id)->delete();
		Estabelecimento::find($id)->delete();	
		return redirect('estabelecimentos');
	}	

    public function edit($id){
        $estabelecimento = Estabelecimento::find($id);
        return view('estabelecimentos.edit', compact('estabelecimento'));
    }
    
    public function update(EstabelecimentoRequest $request, $id){
        $estabelecimento = Estabelecimento::find($id)->update($request->all());
        return redirect('estabelecimentos');
    }
	
}
