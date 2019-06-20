<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faturamento;
use App\Estabelecimento;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaturamentoRequest;

class FaturamentoController extends Controller
{
    public function index($id){
    	$estabelecimento = Estabelecimento::find($id);
    	$faturamentos = Faturamento::where('estabelecimento_id', $id)->get();
    	return view('faturamentos.index', compact('faturamentos', 'estabelecimento'));
    }

    public function create($id){
    	$estabelecimento = Estabelecimento::find($id);
		return view('faturamentos.create', compact('estabelecimento'));

    }

    public function store(FaturamentoRequest $request){
    	$novo_faturamento = $request->all();
    	Faturamento::create($novo_faturamento);

    	return redirect('faturamentos/'.$request->estabelecimento_id);
    }
	
	public function destroy($id, $estabelecimento_id){
		Faturamento::find($id)->delete();
		return redirect('faturamentos/'.$estabelecimento_id);
	}
	
	public function edit($id){
		$faturamento = Faturamento::find($id);
		return view('faturamentos.edit', compact('faturamento'));
	}
	
	public function update(FaturamentoRequest $request, $id){
		$faturamento = Faturamento::find($id)->update($request->all());
		return redirect('faturamentos/'.$request->estabelecimento_id);
	}


}
