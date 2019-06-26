<div class="container-fluid">
	<h1>Faturamentos</h1>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Estabelecimento</th>
				<th>Produto</th>
				<th>Período</th>
				<th>Valor</th>
			</tr>
		</thead>
		<tbody>
			@foreach($faturamentos as $fat)
				<tr>
					<td>{{ $fat->id }}</td>
					<td>{{ $fat->estabelecimento->razao_social}}</td>
					<td>{{ $fat->produto->descricao }}</td>
					<td>{{ $fat->periodo->dt_inicio }}</td>		
					<td>{{ 'R$'.number_format($fat->valor, 2, ',', '.') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
