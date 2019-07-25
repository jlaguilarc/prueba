<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="jumbotron jumbotron-fluid" style="background-color: #43DD21">
	  <div class="container">
	    <h1 class="display-4">Encuesta Egresados</h1>
	  </div>
	</div>

	
		<form action="/preguntas" method="GET">
			<div class="row">
				<div class="text-center col-md-4 offset-md-4">
						
						<label>Cédula de Ciudadania</label>

						<input required="" type="text" name="cedula" class="form-control" placeholder="Digite la cédula del usuario" aria-label="Usuario" aria-describedby="basic-addon1">	

						<br>

						<label>Fecha de Expedición</label>
						<input required="" type="date" name="expedicion" class="form-control" placeholder="Fecha de Expedición" 
						>
						<br>
						@if ($error = Session::get('error'))
							<div class="alert alert-danger alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>	
								<strong>{{ $error }}</strong>
							</div>
						@endif
				</div>


				<div class="col-md-12 text-center">

					<br>
					<button type="submit" class="btn btn-info">Buscar</button>
				</div>
			</div>
		</form>
		
	



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
















