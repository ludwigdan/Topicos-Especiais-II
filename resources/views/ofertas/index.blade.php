@extends('adminlte::default')

@section('contectheader_title')
Ofertas
@endsection

@section('content')
	<div class="container"˜>
		<h1>Ofertas</h1>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição</th>
					<th>Contrapartidas</th>
					<th>Ações</th>
				<tr>
			</thead>
			<tbody>
				@foreach($ofertas as $ofer)
					<tr>
						<td>{{ $ofer->id }}</td>
						<td>{{ $ofer->descricao}}
						<td>

							@foreach($ofer->contrapartida as $contra)
								<li>{{ "Fature R$".$contra->valor." em ".$contra->produto->descricao }} </li>
							@endforeach

						</td>
						<td>
							<a href="{{ route('ofertas.edit', ['id'=>$ofer->id])}}" class="btn-sm btn-sucess">Editar</a>
							<a href="{{ route('ofertas.destroy', ['id'=>$ofer->id])}}" class="btn-sm btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('ofertas.create') }}" class="btn-sm btn-info">Novo</a>
	</div>

@endsection 