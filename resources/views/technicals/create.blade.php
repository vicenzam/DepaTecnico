<div class="modal fade" id="createModalTechnical">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Nuevo Técnico</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
          		</button>
			</div>
			<div class="modal-body">
				<form action="POST" v-on:submit.prevent="createTechnical">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" v-model="newTechnical.nombre">
						<span v-for="error in errors"  class="text-danger">@{{ error.nombre }}</span>
					</div>					
					<input type="submit" class="btn btn-primary" value="Guardar">
				</form>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>