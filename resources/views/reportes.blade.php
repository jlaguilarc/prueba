<!DOCTYPE html>
<html>
<head>
	<title>Reportes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

	<div class="jumbotron jumbotron-fluid" style="background-color: black">
	  <div class="container">
		<h1 class="display-4" style="color: white">Reportes</h1>
		<button onclick="location.href='{{ url('/administrativo')}}'" style="float: right;" type="button" class="btn btn-danger"> Regresar </button>
	  </div>
	</div>

	<div class="container">

		<div class="row mt-4">
			<div class="col-md-4 text-center">
				<div class="card" >
				  <div class="card-body">
				    <h3 class="card-title">General</h3>
				    <p>
				    	<i class="fas fa-paste fa-3x"></i>
				    </p>

				    <a href="#" class="link btn btn-primary" data-toggle="modal" data-target="#modalReporte" data-info="general">Ver</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="card">
				  <div class="card-body">
				    <h3 class="card-title">Programa</h3>
				    <p>
				    	<i class="fas fa-clipboard-list fa-3x"></i>
				    </p>

				    <a href="#" class="link btn btn-primary" data-info="programa">Ver</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="card">
				  <div class="card-body">
				    <h3 class="card-title">Graduados</h3>
				    <p>
				    	<i class="fas fa-graduation-cap fa-3x"></i>
				    </p>
				    <a href="#" class="link btn btn-primary" data-info="graduados">Ver</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4 text-center mt-4">
				<div class="card">
				  <div class="card-body">
				    <h3 class="card-title">Empleabilidad</h3>
				    <p>
				    	<i class="fas fa-briefcase fa-3x"></i>
				    </p>

				    <a href="#" class="link btn btn-primary" data-info="empleo">Ver</a>
				  </div>
				</div>
			</div>
		</div>
		
	</div>


	<div class="modal modal-fade bd-example-modal-lg" id="modalReporte" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title">Información Reporte</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="body-modal">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript">

		
		$('#modalReporte').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			let sitio = button.data('info')

			console.log('entre al modal');
			$.ajax({
				method: 'POST',
				data: {
			        "_token": "{{ csrf_token() }}",
		        },
				url: '/reportes/' + sitio,
				success: function(respuesta) {
					console.log(respuesta);
			
					let objetoRespuesta = Object.entries(respuesta);

					console.log(objetoRespuesta);


					let modal = $(this);
					$('#body-modal').empty();
					$('#body-modal').append('<h4 class="text-center">Graduados</h5>');

					for (const [label, valor] of objetoRespuesta) {

						
				
						$('#body-modal').append(`
							<div class="row">
									<div class="col-md-9">
										<h5>${label}</h5>
									</div>
									<div class="col-md-3">
										<span class="badge badge-primary"> ${valor}</span>
									</div>
							</div>
							
							
						`);
						
					}	
				},
				error: function() {
			        console.log("No se ha podido obtener la información");
			    }
			});
			
		})
	</script>
</body>
</html>