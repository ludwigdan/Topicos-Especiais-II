@extends('adminlte::default')

@section('contectheader_title')
Faturamentos
@endsection

@section('content')

	<div class="container"˜>
		<h1>Faturamento {{ $faturamento->estabelecimento->razao_social}}</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url'=>"faturamentos/$faturamento->id/update", 'method' => 'put']) !!}

			<div class="form-group">
				{{ Form::hidden('estabelecimento_id', $faturamento->estabelecimento->id) }} 
			</div>

			<div class="form-group">
				{!! Form::label('produto_id', 'Produto:') !!}
				{{ Form::select('produto_id',
					\App\Produto::orderBy('descricao')->pluck('descricao', 'id')->toArray(),$faturamento->produto_id,['class'=>'form-control']
				) }} 
			</div>

			<div class="form-group">
				{!! Form::label('periodo_id', 'Periodo:') !!}
				{{ Form::select('periodo_id',
					\App\Periodo::orderBy('dt_inicio')->pluck('dt_inicio', 'id')->toArray(),$faturamento->periodo_id,['class'=>'form-control']
				) }} 
			</div>

			<div class="form-group">
				{!! Form::label('valor', 'Valor:') !!}
				{!! Form::text('valor', $faturamento->valor, ['class'=>'form-control']) !!}
			</div>	

			<div class="form-group">
				{!! Form::submit('Editar Faturamento', ['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection 