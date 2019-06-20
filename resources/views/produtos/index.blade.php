@extends('adminlte::default')

@section('contectheader_title')
Produtos
@endsection

@section('content')
	<div class="container"˜>
		<h1>Produtos</h1>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição</th>
					<th>Ações</th>
				<tr>
			</thead>
			<tbody>
				@foreach($produtos as $prod)
					<tr>
						<td>{{ $prod->id }}</td>
						<td>{{ $prod->descricao }}</td>
						<td>
							<a href="{{ route('produtos.edit', ['id'=>$prod->id])}}" class="btn-sm btn-sucess">Editar</a>
							<a href="{{ route('produtos.destroy', ['id'=>$prod->id])}}" class="btn-sm btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('produtos.create') }}" class="btn-sm btn-info">Novo</a>
	</div>

@endsection 