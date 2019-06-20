@extends('adminlte::default')

@section('contectheader_title')
Estabelecimentos
@endsection

@section('content')

	<div class="container"˜>
		<h1>Novo Estabelecimento</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url'=>"estabelecimentos/$estabelecimento->id/update", 'method'=>'put']) !!}

			<div class="form-group">
				{!! Form::label('razao_social', 'Razão Social:') !!}
				{!! Form::text('razao_social', $estabelecimento->razao_social, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
				{!! Form::text('nome_fantasia', $estabelecimento->nome_fantasia, ['class'=>'form-control']) !!}
			</div>	

			<div class="form-group">
				{!! Form::label('cnpj', 'CNPJ:') !!}
				{!! Form::text('cnpj', $estabelecimento->cnpj, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('cidade', 'Cidade:') !!}
				{!! Form::text('cidade', $estabelecimento->cidade, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('bairro', 'Bairro:') !!}
				{!! Form::text('bairro', $estabelecimento->bairro, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('rua', 'Rua:') !!}
				{!! Form::text('rua', $estabelecimento->rua, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('numero', 'Número:') !!}
				{!! Form::text('numero', $estabelecimento->numero, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Editar Estabelecimento', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection 