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

		{!! Form::open(['url'=>'estabelecimentos/store']) !!}

			<div class="form-group">
				{!! Form::label('razao_social', 'Razão Social:') !!}
				{!! Form::text('razao_social', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
				{!! Form::text('nome_fantasia', null, ['class'=>'form-control']) !!}
			</div>	

			<div class="form-group">
				{!! Form::label('cnpj', 'CNPJ:') !!}
				{!! Form::text('cnpj', null, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('cidade', 'Cidade:') !!}
				{!! Form::text('cidade', null, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('bairro', 'Bairro:') !!}
				{!! Form::text('bairro', null, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('rua', 'Rua:') !!}
				{!! Form::text('rua', null, ['class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('numero', 'Número:') !!}
				{!! Form::text('numero', null, ['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Criar Estabelecimento', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection 