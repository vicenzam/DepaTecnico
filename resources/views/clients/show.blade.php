<div class="modal fade" id="showModalClient">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Mostrar Cliente</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
          		</button>
			</div>
			<div class="modal-body">
								
					<p>
						<h4>Nombre:</h4>
						@{{ fillClient.nombre }}
					</p>
					<hr>
					<p>
						<h4>Cédula:</h4>
						@{{ fillClient.cedula }}
					</p>
					<hr>	
					<p>
						<h4>Teléfono:</h4>
						@{{ fillClient.telefono }}
					</p>
					<hr>	
					<p>
						<h4>Email:</h4>
						@{{ fillClient.email }}
					</p>
					<hr>		
				</div>
									
			
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>