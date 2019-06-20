@extends('adminlte::default')

@section('contectheader_title')
Periodos
@endsection

@section('content')

	<div class="container"˜>
		<h1>Novo Periodo</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url'=>'periodos/store']) !!}

			<div class="form-group">
				{!! Form::label('dt_inicio', 'Data inicio:') !!}
				{!! Form::date(
					'dt_inicio',
					null,
					['class'=>'form-control']
				) !!}
			</div>

			<div class="form-group">
				{!! Form::label('dt_fim', 'Data fim:') !!}
				{!! Form::date(
					'dt_fim',
					null,
					['class'=>'form-control']
				) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Criar Periodo', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection 