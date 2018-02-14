@extends('main')

@section('title')
	Nueva Recepción de Equipo
@endsection

@section('stylesheet')	
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gfjseyr1y23c213xzdsjw2waizh25cnxtz88rgwmvtxmj00o"></script>
	{{-- <script src="{{ asset('js/jquery.tinymce.min.js') }}"></script> --}}
	<script>
		tinymce.init({ 
			selector:'textarea',
			plugins: 'table'
		});
	</script>
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Nuevo Ingreso</h1>	 			
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{  route('recepcion.index') }}" role="button">Ver Todos</a>	 			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>	 	
	 </div>
	</div>
@endsection

@section('content')
				
		<div class="row">
			<div class="col-12">
				@include('component.error')
				
			</div>
			<div class="clearfix"></div>
			@include('receptions.part.formcreate')

		</div>

@endsection
