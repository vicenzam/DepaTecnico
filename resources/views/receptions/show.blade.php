@extends('main')

@section('title')
	Mostrar Ingresos de Equipos
@endsection

@section('stylesheet')	
	
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h2 class="display-5">
	 				Ingreso # 00{{ $reception->id }}
	 			</h2>
	 			<p class="estado">
	 				{{ $reception->estado }}
	 			</p>	 			
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

@section('contentshow')
				
	<div class="container-fluid">
		<div class="row documento__parent">
			<div class="documento">
				<div class="documento__header">
					<div class="documento__left">
						<img class="documento__header__img img-fluid" src="{{ asset('img/logo-horizontal.png') }}" alt="logo vicenzam">
					</div>
					<div class="documento__right">
						<div class="documento__header__texto">
								<strong>Télefono: </strong> 0988562240 <br>
								<strong>Email: </strong> felix@vicenzam.com <br>
								<strong>Dir: </strong> Calle 117 entre Av. 4 de Nov. y Av. 200							
						</div>
					</div>
				</div>
				<div class="documento__body">
		
					<div class="documento__body__head">
						<div class="documento__left">
							<h3 class="documento__title">Recepción de Equipos</h3>
						</div>
						<div class="documento__right">
							<div class="documento__id">
								# 00{{ $reception->id }}
							</div>
						</div>
						
					</div>
		
					<div class="documento__datos">
						<div class="documento__datos__left">
							<p><strong>Nombre: </strong> {{ $reception->client->nombre }}<br>
							<strong>Teléfono: </strong> {{ $reception->client->telefono }}</p>
						</div>
						<div class="documento__datos__right">
							<p>
								<strong>Fecha: </strong> {{ $reception->fecharecepcion->format('d-m-Y') }}
							</p>
						</div>
					</div>
		
					<div class="documento__detalle">
						<h5 class="documento__detalle__title">Descripción del Problema</h5>
						<div class="documento__detalle__texto">
							{!! $reception->problema !!}
						</div>
					</div>
		
					<div class="documento__detalle">
						<h5 class="documento__detalle__title">Equipos Ingresados</h5>
						<div class="documento__detalle__texto">
							{!! $reception->equipo !!}
						</div>
					</div>
		
					<div class="documento__detalle">
						<h5 class="documento__detalle__title">Observación</h5>
						<div class="documento__detalle__texto">
							{!! $reception->observacion !!}
						</div>
					</div>
				</div>
		
				<div class="documento__footer">
					
					<div class="documento__footer__left">
						{!! $reception->technical->nombre !!} <br>
						<span>Técnico Responsable</span>
					</div>
		
					<div class="documento__footer__right">
						Firma Cliente
					</div>
		
				</div>
		
				<div class="documento__accion">
					<a href="{{ route('recepcion.edit', $reception->id) }}" class="btn btn-primary">
						Editar
					</a>
					<input type="button" id="imprimir" name="imprimir" value="Imprimir" class="btn btn-success" onclick="window.print();">
				</div>
		
			</div>
		
		</div>
	</div>			

@endsection
