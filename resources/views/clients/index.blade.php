@extends('main')

@section('title')
	Clientes
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Clientes</h1>	 			
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#create" role="button">Nuevo Cliente</a>	 			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>	 	
	 </div>
	</div>
@endsection

@section('content')
				
		<div id="crud" class="row">
			<table class="table table-hover table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Apellido</th>
			      <th scope="col">Cédula</th>
			      <th scope="col">Teléfono</th>
			      <th scope="col">Email</th>
			      <th scope="col" colspan="3">&nbsp;</th>
			    </tr>
			  </thead>
			  <tbody>		  	
				    			
			    <tr v-for="client in clients">
			    	<td>@{{ client.id }}</td>
			    	<td>@{{ client.nombre }}</td>
			    	<td>@{{ client.apellido }}</td>
			    	<td>@{{ client.cedula }}</td>
			    	<td>@{{ client.telefono }}</td>
			    	<td>@{{ client.email }}</td>
			    	<td>
				      	<button class="btn btn-primary iconotabla" v-on:click.prevent="showClient(client)"
				      	><span class="fa fa-eye"></span> Ver</button>
				      </td>	
				      <td>
				      	<button class="btn btn-warning iconotabla" v-on:click.prevent="editClient(client)"><span class="fa fa-pencil"></span> Editar</button>
				      </td>
				      <td>
				      	<button class="btn btn-danger iconotabla" v-on:click.prevent="deleteClient(client)"><span class="fa fa-close"></span> Eliminar</button>
				      </td>
			    </tr>
			  </tbody>
			</table>

			<nav>
				<ul class="pagination">
					<li class="page-item" v-if="pagination.current_page > 1">
						<a class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">
							<span>Atras</span>
						</a>
					</li>
					<li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '' ]">
						<a class="page-link" href="#" @click.prevent="changePage(page)">
							@{{ page }}
						</a>
					</li>					
					<li class="page-item" v-if="pagination.current_page < pagination.last_page">
						<a class="page-link" href="#" @click.prevent="changePage(pagination.current_page + 1)">
							<span>Siguiente</span>
						</a>
					</li>
				</ul>
			</nav>
			
			<div>
				{{-- <pre>@{{ $data }}</pre> --}}
			</div>
			
			<div class="col-12">
				@include('clients.create')
				@include('clients.edit')
				@include('clients.show')
			</div>

		</div>


@endsection


