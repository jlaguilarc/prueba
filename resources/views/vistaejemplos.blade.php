<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo JSON</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="row">
 		<div class="container">
 			<div class="col-md-12">
	 			<form action="/guardar" method="POST">
				   <div class="card">
					  <div class="card-body">
					    <h3 class="card-title text-center">Información del Graduado</h3>
					    <div class="card-text">

					    	<div class="form-group row">
						    <label for="staticEmail" class="col-sm-2 col-form-label">nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="correo" name="correo" value="{{ $posts->datos[0]->PENG_PRIMERNOMBRE}}">
						    </div>
</body>
</html>