@extends('adminlte::default')

@section('contectheader_title')
Faturamentos
@endsection

@section('content')

	<div class="container"˜>
		<h1>Novo Faturamento {{ $estabelecimento->razao_social}}</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url'=>'faturamentos/store']) !!}

			<div class="form-group">
				{{ Form::hidden('estabelecimento_id', $estabelecimento->id) }} 
			</div>

			<div class="form-group">
				{!! Form::label('produto_id', 'Produto:') !!}
				{{ Form::select('produto_id',\App\Produto::orderBy('descricao')->pluck('descricao', 'id')->toArray(),null,['class'=>'form-control']
				) }} 
			</div>

			<div class="form-group">
				{!! Form::label('periodo_id', 'Periodo:') !!}
				{{ Form::select('periodo_id',
					\App\Periodo::orderBy('dt_inicio')->pluck('dt_inicio', 'id')->toArray(),null,['class'=>'form-control']
				) }} 
			</div>

			<div class="form-group">
				{!! Form::label('valor', 'Valor:') !!}
				{!! Form::text('valor', null, ['class'=>'form-control']) !!}
			</div>	

			<div class="form-group">
				{!! Form::submit('Criar Faturamento', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection 