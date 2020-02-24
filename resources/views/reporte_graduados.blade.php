<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<header>
		<img style="margin-top:10px; margin-left: 10px; padding: 5px; float: left;" src="{{ asset('images/logo_uts.png') }}" width="130">
		<h1 style="float: left; margin-left: 5px; margin-top: 40px;" class="display-4">Reporte de Graduados</h1>
	</header>
	<div class="jumbotron jumbotron-fluid" style="background-color: #43DD21;">
		{{-- <button onclick="location.href='{{ url('login')}}'" style="float: right; margin-right: 10px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top">
		  Iniciar Sesión</button> --}}
		  <button onclick="location.href='{{ url('/reportes')}}'" style="float: right; margin-right: 10px;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top">
				Regresar</button>
	</div>
	<script type="text/javascript" src="graficas/googlechart.js"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        //mostrando gráfica de los datos
        var data = google.visualization.arrayToDataTable([
         ['Element', 'Density'],
            @foreach ($pastel as $pastels)
              ['{{ $pastels->descripcion}}',{{ $pastels->Graduados}}],
            @endforeach
        ]);
        var options = {
          title: 'Representación grafica de Graduados por Tipo de Programa'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

