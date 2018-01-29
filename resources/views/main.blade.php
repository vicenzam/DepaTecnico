<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
	
	@yield('stylesheet')


	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styleprint.css') }}" media="print">

</head>
<body>
	
	@include('component.header')
	
	@yield('encabezado')


	<div class="container">
		@yield('content')
		
	</div>

	@yield('contentshow')

	<footer class="piepagina">
		Developed by VicenZam
	</footer>


	
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>
	
	@yield('scripts')

	<script src="{{ asset('js/vue.js') }}"></script>
	<script src="{{ asset('js/axios.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>