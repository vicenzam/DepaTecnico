@if(session('info'))
	
	<div class="alert alert-info" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
		</button>
		{{ session('info') }}
	</div>

@endif