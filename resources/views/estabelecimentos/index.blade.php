@extends('adminlte::default')

@section('contectheader_title')
Estabelecimentos
@endsection

@section('content')
	<div class="container"˜>
		<h1>Estabelecimentos</h1>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Razão Social</th>
					<th>Nome Fantasia</th>
					<th>CNPJ</th>
					<th>Cidade</th>
					<th>Bairro</th>
					<th>Rua</th>
					<th>Número</th>
					<th>Ações</th>
				<tr>
			</thead>
			<tbody>
				@foreach($estabelecimentos as $estab)
					<tr>
						<td>{{ $estab->id }}</td>
						<td>{{ $estab->razao_social }}</td>
						<td>{{ $estab->nome_fantasia }}</td>
						<td>{{ $estab->cnpj }}</td>
						<td>{{ $estab->cidade }}</td>
						<td>{{ $estab->bairro }}</td>
						<td>{{ $estab->rua }}</td>
						<td>{{ $estab->numero }}</td>
						<td>
							<a href="{{ route('faturamentos', ['id'=>$estab->id])}}" class="btn-sm btn-sucess">Faturamento</a>
							<a href="{{ route('estabelecimentos.edit', ['id'=>$estab->id])}}" class="btn-sm btn-sucess">Editar</a>
							<a href="{{ route('estabelecimentos.destroy', ['id'=>$estab->id])}}" class="btn-sm btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('estabelecimentos.create') }}" class="btn-sm btn-info">Novo</a>
	</div>

@endsection 