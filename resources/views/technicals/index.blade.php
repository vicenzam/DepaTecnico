@extends('main')

@section('title')
	Técnicos
@endsection

@section('encabezado')
	<div class="encabezado">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-6">
	 			<h1 class="display-4">Técnicos</h1>	 			
	 		</div>
	 		<div class="col-6 d-flex justify-content-end align-items-center">
	 			<div class="encabezado__right">
	 	  			<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#createModalTechnical" role="button">Nuevo Técnico</a>	 			
	 			</div>
	 		</div>
	 		<hr class="my-4">	 	
	 	</div>	 	
	 </div>
	</div>
@endsection

@section('content')
				
		<div id="crudtecnico" class="row">
			<table class="table table-hover table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>			      
			      <th scope="col" colspan="3">&nbsp;</th>
			    </tr>
			  </thead>
			  <tbody>		  	
				    			
			    <tr v-for="technical in technicals">
			    	<td>@{{ technical.id }}</td>
			    	<td>@{{ technical.nombre }}</td>			    	
			    	<td>
				      	<button class="btn btn-primary iconotabla" v-on:click.prevent="showTechnical(technical)"
				      	><span class="fa fa-eye"></span> Ver</button>
				      </td>	
				      <td>
				      	<button class="btn btn-warning iconotabla" v-on:click.prevent="editTechnical(technical)"><span class="fa fa-pencil"></span> Editar</button>
				      </td>
				      <td>
				      	<button class="btn btn-danger iconotabla" v-on:click.prevent="deleteTechnical(technical)"><span class="fa fa-close"></span> Eliminar</button>
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
			
			<div class="col-12">
				@include('technicals.show')
				@include('technicals.edit')
				@include('technicals.create')				
			</div>

		</div>


@endsection


