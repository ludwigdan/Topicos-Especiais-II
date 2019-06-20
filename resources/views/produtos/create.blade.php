@extends('adminlte::default')

@section('contectheader_title')
Produtos
@endsection

@section('content')

	<div class="container"˜>
		<h1>Novo Produto</h1>
		
		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url'=>'produtos/store']) !!}

			<div class="form-group">
				{!! Form::label('descricao', 'Descrição:') !!}
				{!! Form::text('descricao', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection 