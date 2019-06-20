@extends('adminlte::default')

@section('contectheader_title')
Ofertas
@endsection

@section('content')

	<div class="container-fluid">
		<h1>Nova Oferta</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url'=>'ofertas/masterdetail']) !!}

			<div class="form-group">
				{!! Form::label('descricao', 'Descrição:') !!}
				{!! Form::text('descricao', null, ['class'=>'form-control']) !!}
			</div>

			<hr/>

			<h4>Contrapartidas</h4>

			<div class="input_fields_wrap"></div>
			<br>
			
			<input class="add_field_button btn btn-sucess" type="button" value="Adicionar Contrapartida">

			<br>

			<hr/>

			<div class="form-group">
				{!! Form::submit('Criar Oferta', ['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}
	</div>

@endsection 

@section('dyn_scripts')
	<script>
		$(document).ready(function(){
			var wrapper		=	$(".input_fields_wrap");
			var add_button  =	$(".add_field_button");

			var x = 0;

			$(add_button).click(function(e){
				x++;
				var newField = 
				'<div>'+
					'<div class="form-group row">'+
						'<div class="col-sm-4 col-form-label"> {!! Form::label("produto_id", "Produto") !!} </div>'+
						'<div class="col-sm-4 col-form-label"> {!! Form::label("valor", "Valor") !!} </div>'+
						'<div class="col-sm-4 col-form-label">  </div>'+
					'</div>'+
					'<div class="form-group row">'+
						'<div class="col-sm-4 col-form-label"> {{ Form::select("produtos[]",\App\Produto::orderBy("descricao")->pluck("descricao", "id")->toArray(),null,["class"=>"form-control"]) }} </div>'+
						'<div class="col-sm-4 col-form-label"> {!! Form::text("valores[]", null, ["class"=>"form-control"]) !!} </div>'+
						'<div type="button" name="remover" class="col-sm-1 col-form-label remove_field btn btn-danger btn-circle">Excluir</div>'+				
					'</div>'+
				'</div>'
				;

				$(wrapper).append(newField);

			});

			$(document).on("click",'div[name^=remover]', function(e){
				$(this).parent().parent('div').remove(); x--;
			});

		});
	</script>
@endsection