<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<header>
		<img style="margin-top:10px; margin-left: 10px; padding: 5px; float: left;" src="{{ asset('images/logo_uts.png') }}" width="130">
		<h1 style="float: left; margin-left: 5px; margin-top: 40px;" class="display-4">Encuesta Momento Cero</h1>
	</header>
	<div class="jumbotron jumbotron-fluid" style="background-color: #43DD21;">
		<button onclick="location.href='{{ url('login')}}'" style="float: right; margin-right: 10px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top">
  		Iniciar Sesión</button>
	</div>

	<div class="row">
 		<div class="container">
 			<div class="col-md-12">
	 			<form action="/guardar" method="POST">

	 			  @foreach($usuario as $user)
				   <div class="card">
					  <div class="card-body">
					    <h3 class="card-title text-center">Información del Graduado</h3>
					    <div class="card-text">

					    	<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="correo" name="correo" value="{{ $user->correo }}">
						    </div>
						    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $user->nombre }}">
						    </div>
						    <label for="staticEmail" class="col-sm-2 col-form-label">Teléfono</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $user->ceulular }}">
						    </div>
						    <label for="staticEmail" class="col-sm-2 col-form-label">Cédula</label>
						    <div class="col-sm-10">
						      <input type="text" name="cedula" class="form-control" id="cedula" value="{{ $user->idEstudiante }}">
						    </div>
						    <label for="staticEmail" class="col-sm-2 col-form-label">Programa</label>
						    <div class="col-sm-10">

						      <select name="idPrograma" class="form-control">

						      	@foreach($programas as $programa)

						      		@if( $user->programa->idPrograma == $programa->idPrograma)
						      			@php
						      				$selected = 'selected';
						      			@endphp
						      		@else
						      			@php
						      				$selected = '';
						      			@endphp

						      		@endif
						      		<option {{$selected}} value="{{ $programa->idPrograma }}">{{$programa->descripcion}}</option>
						      	@endforeach
						      	
						      </select>
						      
						    </div>
						    <label for="staticEmail" class="col-sm-2 col-form-label">Estado</label>
						    <div class="col-sm-10">
						      <select name="idEstado" class="form-control">

						      	@foreach($estados as $estado)

						      		@if( $user->estado->idEstado == $estado->idEstado)
						      			@php
						      				$selected = 'selected';
						      			@endphp
						      		@else
						      			@php
						      				$selected = '';
						      			@endphp

						      		@endif
						      		<option {{$selected}} value="{{ $estado->idEstado }}">{{$estado->descripcion}}</option>
						      	@endforeach
						      	
						      </select>
						    </div>
						  </div>
					    </div>
					    
					  </div>
					</div>
	 			  	
				    
		 		  @endforeach



		 		  <br>
		 		  <div class="card">
		 		  	@foreach($categorias as $categoria)
		 		  	<div class="card-title">
		 		  		<h3>{{$categoria->descripcion}}</h3>
		 		  	</div>
		 		  	<div class="card-body">
		 		  		@foreach($categoria->preguntas as $pregunta)
						  <div class="form-group row">

						    <label for="titulo" class="col-sm-12 col-form-label">{{ $pregunta->titulo }}</label>

					  	  </div>

					  		@foreach($pregunta->respuestas as $respuesta)
					  		<div class="form-check">
						  		<input class="form-check-input" type="radio" name="{{$pregunta->idPregunta}}" id="exampleRadios1" value="{{ $respuesta->respuesta}} ">
								<label class="form-check-label" for="exampleRadios1">
									{{ $respuesta->respuesta}}   
								</label>
							</div>
					  			
					  		@endforeach					  
				   
				  @endforeach
				  </div>
			  	  @endforeach

			  	  		@csrf
			  	  		<button class="btn btn-info" type="submit">Guardar</button>
		 		  	</div>
		 		  </div>

	 			</form> 		

 			
 		</div>
			
 		</div>
 			
	</div>

	<br>
	<br>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

