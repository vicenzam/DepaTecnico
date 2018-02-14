<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Nuevo Cliente</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
          		</button>
			</div>
			<div class="modal-body">
				<form action="POST" v-on:submit.prevent="createClient">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" v-model="newClient.nombre">
						<span v-for="error in errors"  class="text-danger">@{{ error.nombre }}</span>
					</div>
					<div class="form-group">
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido" class="form-control" v-model="newClient.apellido">
						<span v-for="error in errors"  class="text-danger">@{{ error.apellido }}</span>
					</div>
					<div class="form-group">
						<label for="cedula">Cedula</label>
						<input type="text" name="cedula" class="form-control" v-model="newClient.cedula">
						<span v-for="error in errors"  class="text-danger">@{{ error.cedula }}</span>
					</div>
					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" name="telefono" class="form-control" v-model="newClient.telefono">
						<span v-for="error in errors"  class="text-danger">@{{ error.telefono }}</span>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" v-model="newClient.email">
						<span v-for="error in errors"  class="text-danger">@{{ error.email }}</span>
					</div>
					<input type="submit" class="btn btn-primary" value="Guardar">
				</form>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>