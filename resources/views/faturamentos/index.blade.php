@extends('adminlte::default')

@section('contectheader_title')
Faturamentos
@endsection

@section('content')
	<div class="container-fluid">
		@if(!$faturamentos->isEmpty())
			<h1>Faturamentos {{ $estabelecimento->razao_social }}</h1>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Código</th>
						<th>Produto</th>
						<th>Período</th>
						<th>Valor</th>
						<th>Ações</th>
					<tr>
				</thead>
				<tbody>
					@foreach($faturamentos as $fat)
						<tr>
							<td>{{ $fat->id }}</td>
							<td>{{ $fat->produto->descricao }}</td>
							<td>{{ $fat->periodo->dt_inicio }}</td>
							<td>{{ $fat->valor }}</td>
							<td>
								<a href="{{ route('faturamentos.edit', ['id'=>$fat->id])}}" class="btn-sm btn-sucess">Editar</a>
								<a href="{{ route('faturamentos.destroy', ['id'=>$fat->id, 'estabelecimento_id'=>$estabelecimento->id])}}" class="btn-sm btn-danger">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<h1> Estabelecimento {{ $estabelecimento->razao_social }} não possui faturamentos cadastrados</h1>
			
		@endif
		<br><br><a href="{{ route('faturamentos.create', ['id'=>$estabelecimento->id])}}" class="btn-sm btn-info">Novo</a>

	</div>

@endsection 