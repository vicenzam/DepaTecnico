<form action="{{ route('recepcion.update', [ 'reception' => $reception->id]) }}" method="POST">

	{{ csrf_field() }}
	{{ method_field('PUT') }}	
	
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="nombre_cliente">Cliente</label>
			<select name="client_id" id="client_id" class="form-control">	
				<option selected value="{{ $reception->client_id }}">{{ $reception->client->nombre }} {{ $reception->client->apellido }} >> TEL: {{ $reception->client->telefono }} #{{ $reception->client_id }}</option>					
				@foreach($clients as $client)
					@if( $reception->client_id != $client->id )
						<option value="{{ $client->id }}">{{ $client->nombre }} {{ $client->apellido }} >> TEL: {{ $client->telefono }} #{{ $client->id }}</option>
					@endif
				@endforeach
			</select>
		</div>	

		<div class="form-group col-sm-3">
			{{-- <label for="telefono">Teléfono</label>
			<input type="text" id="telefono" name="telefono" class="form-control" value="{{ $reception->telefono }}"> --}}
		</div>	
		
		<div class="form-group col-sm-3">
			<label for="fecharecepcion">Fecha</label>	
			<input type="date" id="fecharecepcion" name="fecharecepcion" class="form-control" value="{{ $reception->fecharecepcion->toDateString() }}">
		</div>

		<hr class="col-12" >

		<div class="form-group col-sm-6">
			<label for="problema">Problema</label>
			<textarea name="problema" id="problema" cols="30" rows="8" class="form-control">{!! $reception->problema !!}</textarea>
		</div>

		<div class="form-group col-sm-6">
			<label for="equipo">Equipos Ingresados</label>
			<textarea name="equipo" id="equipo" cols="30" rows="8" class="form-control" >{!! $reception->equipo !!}</textarea>
		</div>

		<div class="form-group col-sm-6">
			<label for="observacion">Observación</label>
			<textarea name="observacion" id="observacion" cols="30" rows="8" class="form-control">{!! $reception->observacion !!}</textarea>
		</div>

		<div class="form-group col-sm-6">
			<label for="solucion">Solución</label>
			<textarea name="solucion" id="solucion" cols="30" rows="8" class="form-control">{!! $reception->solucion !!}</textarea>
		</div>
	
		<div class="col-sm-6">
			<div class="form-row">
				<div class="form-group col">
					<label for="technical_id">Técnico Responsable</label>		
					<select name="technical_id" id="technical_id" class="custom-select form-control">	
						<option selected value="{{ $reception->technical_id }}">{{ $reception->technical->nombre }}</option>					
						@foreach($technicals as $technical)
							@if( $reception->technical_id != $technical->id )
								<option value="{{ $technical->id }}">{{ $technical->nombre }}</option>
							@endif
						@endforeach
					</select>
				</div>

				<div class="form-group col">
					<label for="estado">Estado</label>		
					<select name="estado" id="estado" class="custom-select form-control">
						@if($reception->estado == 'INGRESADO')
							<option selected value="{{ $reception->estado }}">{{ $reception->estado }}</option>			
							<option value="REVISION">REVISION</option>
							<option value="ENTREGADO">ENTREGADO</option>
						@elseif($reception->estado == 'REVISION')
							<option selected value="{{ $reception->estado }}">{{ $reception->estado }}</option>
							<option value="INGRESADO">INGRESADO</option>
							<option value="ENTREGADO">ENTREGADO</option>
						@else
							<option selected value="{{ $reception->estado }}">{{ $reception->estado }}</option>
							<option value="INGRESADO">INGRESADO</option>
							<option value="REVISION">REVISION</option>
						@endif		
						
					</select>
				</div>

				<hr class="col-12" >	
				
				<div class="form-group col-sm-2">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>			
				
			</div>
		</div>
	</div>	
	
</form>