<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header>
		<img style="margin-top:10px; margin-left: 10px; padding: 5px; float: left;" src="{{ asset('images/logo_uts.png') }}" width="130">
		<h1 style="float: left; margin-left: 5px; margin-top: 40px;" class="display-4">Panel Administrativo</h1>
	</header>
    <div class="jumbotron jumbotron-fluid" style="background-color: #43DD21;">
        <button onclick="location.href='{{ url('logout')}}'" style="float: right; margin-right: 10px;" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top">
			Cerrar Sesión</button>
	</div>

  <div style="padding-top: 0px; margin-top:  -33px;" class="container-fluid">
    <div class="row min-vh-100">
        <aside class="col-12 col-md-2 p-0 bg-dark">
            <div class="container-fluid">
  
      <div class="list-group">
        
        <a class="list-group-item" data-remote="true" href="#" id="categoria_14" style="padding-left: 25px;">
          <span class="fa fa-bomb fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Adulto</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_1" style="padding-left: 25px;">
          <span class="fa fa-cutlery fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Alimentação</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_2" style="padding-left: 25px;">
          <span class="fa fa-automobile fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Automotivo</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_3" style="padding-left: 25px;">
          <span class="fa fa-female fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Beleza</span>
        </a>

        <a class="list-group-item" data-remote="true" href="#sub_categoria_4" id="categoria_4" data-toggle="collapse" data-parent="#sub_categoria_4" style="padding-left: 25px;">
          <span class="fa fa-shopping-cart fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Compras</span>
          <span class="menu-ico-collapse"><i class="fa fa-chevron-down"></i></span>
        </a>

        <div class="collapse list-group-submenu" id="sub_categoria_4">
          <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos1</a>
          <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos2</a>
          <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos3</a>
          <a href="#" class="list-group-item sub-item" data-parent="#sub_categoria_4" style="padding-left: 78px;">SubSubPos4</a>
        </div>

        <a class="list-group-item" data-remote="true" href="#" id="categoria_6" style="padding-left: 25px;">
          <span class="fa fa-graduation-cap fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Educação</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_7" style="padding-left: 25px;">
          <span class="fa fa-gamepad fa-lg  fa-fw"></span>
          <span style="margin-left: 25px;">Entretenimeto</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_8" style="padding-left: 25px;">
          <span class="fa fa-futbol-o fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Lazer</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_13" style="padding-left: 25px;">
          <span class="fa fa-beer fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Night</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_9" style="padding-left: 25px;">
          <span class="fa fa-heart fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Saúde</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_10" style="padding-left: 25px;">
          <span class="fa fa-lock fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Seguros</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_11" style="padding-left: 25px;">
          <span class="fa fa-wrench fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Serviços</span>
        </a>
        <a class="list-group-item" data-remote="true" href="#" id="categoria_12" style="padding-left: 25px;">
          <span class="fa fa-suitcase fa-lg fa-fw"></span>
          <span style="margin-left: 25px;">Viagem e Turismo</span>
        </a></div>
    </div>
  
        </aside>
        <main class="col bg-faded py-3">
            <div class="container">
        <div class="row">
            <div class="text-center col-md-3">
                <div class="card border border-dark">
                    <div class="card-body">
                      <h3 class="card-title">Información Reportes</h3>
                      <p>
                          <i class="fas fa-address-book fa-3x"></i>
                      </p>
  
                      <button onclick="location.href='{{ url('/reportes')}}'" type="button" class="btn btn-info"> Reportes </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
        </main>
    </div>
</div>
    
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
















