@extends('adminlte::default')

@section('contectheader_title')
Periodo
@endsection

@section('content')
	<div class="container"˜>
		<h1>Periodo</h1>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Data Inicio</th>
					<th>Data Fim</th>
					<th>Ações</th>
				<tr>
			</thead>
			<tbody>
				@foreach($periodos as $per)
					<tr>
						<td>{{ $per->id }}</td>
						<td>{{ $per->dt_inicio }}</td>
						<td>{{ $per->dt_fim }}</td>
						<td>
							<a href="{{ route('periodos.edit', ['id'=>$per->id])}}" class="btn-sm btn-sucess">Editar</a>
							<a href="{{ route('periodos.destroy', ['id'=>$per->id])}}" class="btn-sm btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('periodos.create') }}" class="btn-sm btn-info">Novo</a>
	</div>

@endsection 