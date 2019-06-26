<div class="container-fluid">
	<h1>Maiores Faturamentos</h1>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Estabelecimento</th>
				<th>Valor</th>
			</tr>
		</thead>
		<tbody>
			@foreach($faturamentos as $fat)
				<tr>
					<td>{{ $fat->razao_social}}</td>
					<td>{{ 'R$'.number_format($fat->valor, 2, ',', '.') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
