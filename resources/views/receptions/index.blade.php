@extends('main')

@section('title')
	Recepciones
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Ingresos de equipos</h1>	 			
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="{{ route('recepcion.create') }}" role="button">Nuevo Ingreso</a>	 			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>	 	
	 </div>
	</div>
@endsection

@section('content')
		
		

		<div id="crudReception" class="row">
			<div class="col-12">
				@include('component.info')				
			</div>
			<div class="clearfix"></div>
			<table id="tableReception" class="table table-hover table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Cliente</th>			      
			      <th scope="col">Fecha</th>			      
			      <th scope="col">Problema</th>			      
			      <th scope="col">Estado</th>			      
			      <th scope="col" colspan="2">&nbsp;</th>
			    </tr>
			  </thead>
			  <tbody>		  	
				@foreach($receptions as $reception)    			
			    <tr>
			    	<td>{{ $reception->id }}</td>
			    	<td>{{ $reception->client->nombre }}</td>			    	
			    	<td>{{ $reception->fecharecepcion->format('d-m-Y') }}</td>			    	
			    	<td>{!! $reception->problema !!}</td>			    	
			    	<td>{{ $reception->estado }}</td>			    	
			    	<td>
				      	<a href="{{ route('recepcion.show', $reception->id) }}" class="btn btn-primary iconotabla"
				      	><span class="fa fa-eye"></span></a>
				      </td>	
				      <td>
				      	<a href="{{ route('recepcion.edit', $reception->id) }}" class="btn btn-warning iconotabla"><span class="fa fa-pencil"></span></a>
				      </td>
				      {{-- <td>
				      	<button class="btn btn-danger iconotabla"><span class="fa fa-close"></span> Eliminar</button>
				      </td> --}}
			    </tr>
			    @endforeach
			  </tbody>
			</table>
			
			<div class="paginacion">
				{{-- {{ $receptions->render() }} --}}
			</div>

			<div class="col-12">

			</div>

		</div>


@endsection
