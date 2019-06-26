<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
//    Route::get('/link1', function ()    {
// 		Uses Auth Middleware
//    });
	
	/*
	Route::get('estabelecimentos','EstabelecimentoController@index');
	Route::get('estabelecimentos/create','EstabelecimentoController@create');
	Route::post('estabelecimentos/store','EstabelecimentoController@store');
	Route::get('estabelecimentos/{id}/destroy','EstabelecimentoController@destroy');

	Route::get('produtos','ProdutoController@index');
	Route::get('produtos/create','ProdutoController@create');
	Route::post('produtos/store','ProdutoController@store');
	Route::get('produtos/{id}/destroy','ProdutoController@destroy');
	Route::get('produtos/{id}/edit','ProdutoController@edit');
	Route::put('produtos/{id}/update','ProdutoController@update');

	Route::get('periodos','PeriodoController@index');
	Route::get('periodos/create','PeriodoController@create');
	Route::post('periodos/store','PeriodoController@store');
	Route::get('periodos/{id}/destroy','PeriodoController@destroy');
*/		
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('',		['as'=>'produtos', 'uses'=>'ProdutoController@index']);
	Route::get('create',		['as'=>'produtos.create', 'uses'=>'ProdutoController@create']);
	Route::get('{id}/destroy',		['as'=>'produtos.destroy', 'uses'=>'ProdutoController@destroy']);
	Route::get('{id}/edit',		['as'=>'produtos.edit', 'uses'=>'ProdutoController@edit']);
	Route::put('{id}/update',		['as'=>'produtos.update', 'uses'=>'ProdutoController@update']);
	Route::post('store',		['as'=>'produtos.store', 'uses'=>'ProdutoController@store']);
});

Route::group(['prefix'=>'periodos', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('',		['as'=>'periodos', 'uses'=>'PeriodoController@index']);
	Route::get('create',		['as'=>'periodos.create', 'uses'=>'PeriodoController@create']);
	Route::get('{id}/destroy',		['as'=>'periodos.destroy', 'uses'=>'PeriodoController@destroy']);
	Route::get('{id}/edit',		['as'=>'periodos.edit', 'uses'=>'PeriodoController@edit']);
	Route::put('{id}/update',		['as'=>'periodos.update', 'uses'=>'PeriodoController@update']);
	Route::post('store',		['as'=>'periodos.store', 'uses'=>'PeriodoController@store']);
});

Route::group(['prefix'=>'estabelecimentos', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('',		['as'=>'estabelecimentos', 'uses'=>'EstabelecimentoController@index']);
	Route::get('create',		['as'=>'estabelecimentos.create', 'uses'=>'EstabelecimentoController@create']);
	Route::get('{id}/destroy',		['as'=>'estabelecimentos.destroy', 'uses'=>'EstabelecimentoController@destroy']);
	Route::get('{id}/edit',		['as'=>'estabelecimentos.edit', 'uses'=>'EstabelecimentoController@edit']);
	Route::put('{id}/update',		['as'=>'estabelecimentos.update', 'uses'=>'EstabelecimentoController@update']);
	Route::post('store',		['as'=>'estabelecimentos.store', 'uses'=>'EstabelecimentoController@store']);
});


Route::group(['prefix'=>'faturamentos', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('{id}',		['as'=>'faturamentos', 'uses'=>'FaturamentoController@index']);
	Route::get('{id}/create',		['as'=>'faturamentos.create', 'uses'=>'FaturamentoController@create']);
	Route::get('{id}/{estabelecimento_id}/destroy',		['as'=>'faturamentos.destroy', 'uses'=>'FaturamentoController@destroy']);
	Route::get('{id}/edit',		['as'=>'faturamentos.edit', 'uses'=>'FaturamentoController@edit']);
	Route::put('{id}/update',		['as'=>'faturamentos.update', 'uses'=>'FaturamentoController@update']);
	Route::post('store',		['as'=>'faturamentos.store', 'uses'=>'FaturamentoController@store']);
	Route::get('relatorioFull', ['as'=>'faturamentos.relatorioFull', 'uses'=>'FaturamentoController@geraRelatorioFull']);
	Route::get('relatorioMaioresFaturamentos', ['as'=>'faturamentos.relatorioMaioresFaturamentos', 'uses'=>'FaturamentoController@geraRelatorioMaioresFaturamentos']);

});

Route::group(['prefix'=>'ofertas', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('',		['as'=>'ofertas', 'uses'=>'OfertaController@index']);
	Route::get('create',		['as'=>'ofertas.create', 'uses'=>'OfertaController@createmaster']);
	Route::post('masterdetail',		['as'=>'ofertas.masterdetail', 'uses'=>'OfertaController@masterdetail']);
	Route::get('{id}/edit',		['as'=>'ofertas.edit', 'uses'=>'OfertaController@edit']);
	Route::put('{id}/update',		['as'=>'ofertas.update', 'uses'=>'OfertaController@update']);
	Route::get('{id}/destroy',		['as'=>'ofertas.destroy', 'uses'=>'OfertaController@destroy']);

});
