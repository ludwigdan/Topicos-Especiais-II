<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeriodoRequest;

class PeriodoController extends Controller
{
    public function index(){
    	$periodos = Periodo::all();
    	return view('periodos.index', ['periodos'=>$periodos]);
    }

    public function create(){
    	return view('periodos.create');
    }

    public function store(PeriodoRequest $request){
    	$novo_periodo = $request->all();
    	Periodo::create($novo_periodo);

    	return redirect('periodos');
    }
	
	public function destroy($id){
		Periodo::find($id)->delete();
		return redirect('periodos');
	}
    
    public function edit($id){
        $periodo = Periodo::find($id);
        return view('periodos.edit', compact('periodo'));
    }
    
    public function update(PeriodoRequest $request, $id){
        $periodo = Periodo::find($id)->update($request->all());
        return redirect('periodos');
    }
}
