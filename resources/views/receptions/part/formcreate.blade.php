<form action="{{ route('recepcion.store') }}" method="POST">

	{{ csrf_field() }}	
	
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="nombre_cliente">Cliente</label>

			<select name="client_id" id="client_id" class="form-control">	
				@foreach($clients as $client)
					<option value="{{ $client->id }}">{{ $client->nombre }} {{ $client->apellido }}</option>
				@endforeach
			</select>

		
		</div>	

		<div class="form-group col-sm-3">
			{{-- <label for="telefono">Teléfono</label>
			<input type="text" id="telefono" name="telefono" class="form-control"> --}}
		</div>	
		
		<div class="form-group col-sm-3">
			<label for="fecharecepcion">Fecha de Recepción</label>	
			<input type="date" id="fecharecepcion" name="fecharecepcion" class="form-control">
		</div>

		<hr class="col-12" >

		<div class="form-group col-sm-6">
			<label for="problema">Problema</label>
			<textarea name="problema" id="problema" cols="30" rows="8" class="form-control">{{ old('problema') }}</textarea>
		</div>

		<div class="form-group col-sm-6">
			<label for="equipo">Equipos Ingresados</label>
			<textarea name="equipo" id="equipo" cols="30" rows="8" class="form-control">{{ old('equipo') }}</textarea>
		</div>

		<div class="form-group col-sm-6">
			<label for="observacion">Observación</label>
			<textarea name="observacion" id="observacion" cols="30" rows="8" class="form-control">{{ old('observacion') }}</textarea>
		</div>
	
		<div class="col-sm-6">
			<div class="form-row">
				<div class="form-group col">
					<label for="technical_id">Técnico Responsable</label>		
					<select name="technical_id" id="technical_id" class="custom-select form-control">						
						@foreach($technicals as $technical)
							<option value="{{ $technical->id }}">{{ $technical->nombre }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col">
					<label for="estado">Estado</label>		
					<select name="estado" id="estado" class="custom-select form-control">			
						<option selected value="INGRESADO">INGRESADO</option>			
						<option value="REVISION">REVISION</option>	
						<option value="ENTREGADO">ENTREGADO</option>	
					</select>
				</div>

				<hr class="col-12" >	
				
				<div class="form-group col-sm-2">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>				
				
			</div>
		</div>
	</div>	
	
</form>