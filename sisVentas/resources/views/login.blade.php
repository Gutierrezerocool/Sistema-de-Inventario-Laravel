<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADVentas</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="{{asset('fonts.css')}}">



</head>
<body>
	
<!--	<div class="social hidden-sm hidden-xs">
		<ul>
			<li><a href="https://www.facebook.com/dentallamazonas" target="_blank" class="icon-facebook"></a></li>
			<li><a href="" target="_blank" class="icon-twitter"></a></li>
			<li><a href="" target="_blank" class="icon-instagram"></a></li>
		</ul>
	</div>


	<header>

	<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
		<nav>
			<ul>
				<li><a href="index.html"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
				<li><a href="#"><span class="segundo"><i class="icon icon-price-tag"></i></span>Información</a>
					<ul>
						<li><a href="pacienteinformado1.html">Paciente Informado 1</a></li>
						<li><a href="pacienteinformado2.html">Paciente Informado 2</a></li>
						<li><a href="pacienteinformado3.html">Paciente Informado 3</a></li>
					</ul>
				</li>
				<li><a href="gestioncita.php"><span class="tercero"><i class="icon icon-briefcase"></i></span>Gestionar Cita</a></li>
				<li><a href="registro.php"><span class="cuarto"><i class="icon icon-file-text"></i></span>Registro</a></li>
				<li><a href="contacto.php"><span class="quinto"><i class="icon icon-mail"></i></span>Contacto</a></li>
			</ul>
		</nav>

	</div>-->

	<!-- Menú Secundario-->

<!--	<div class=" container hidden-lg hidden-md hidden-sm col-xs-12">
		
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse fondobarrageneral">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a href="#" class="navbar-brand">Dent-all Amazonas </a>
					</div>

					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Inicio</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Información <span class="caret"></span>
							</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="pacienteinformado1.html">Paciente Informado 1</a></li>
									<li><a href="pacienteinformado2.html">Paciente Informado 2</a></li>
									<li><a href="pacienteinformado3.html">Paciente Informado 3</a></li>
								</ul>
							</li>
							<li><a href="gestioncita.php">Gestionar Cita</a></li>
							<li><a href="registro.php">Registro</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>			
					</div>
				</div>			
			</nav>
	</div>
	</header>-->

	<header></header>
	<br>

	<h1 class="text-center">Iniciar sesión para acceder a ADVentas</h1>

	<div class="container well achicar">
		<div class="row">
					<div class="col-xs-12">
						<img src="imagenes/icono.png" height="90" width="90" class="img-responsive marginbottom5 center-block">
					</div>
		</div>

		@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li style="margin-left: 5px;">{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

		<div class="">
			{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
				<div class="form-group">
					{!!Form::label('correo','Correo:')!!}
					{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo'])!!}
					<!--<input class="form-control" placeholder="Ingresa tu correo electrónico o nombre" id="email" name="email" required autofocus>-->
				</div>
				
				<div class="form-group">
					{!!Form::label('contrasena','Contraseña:')!!}
					{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
					<!--<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>-->
				</div>
				{!!Form::submit('Iniciar sesión',['class'=>'btn btn-block btn-primary'])!!}
				<!--<button class="btn btn-lg btn-primary  btn-block" name="enviar" type="submit">Iniciar sesión</button>-->
				
				<div class="checkbox">
							
					<!--<label class="checkbox">
				        <input type="checkbox" value="1"> No cerrar sesión
				    </label>-->
					<!--<p class="help-block"><a href="#">¿Olvidaste tu contraseña?</a></p>-->
				</div>
			{!!Form::close()!!}
	    </div>
	
	</div>

	

	<!--<footer>
		<div class="footer">
			<div class="centrariconos">
				<ul>
					<a href="https://www.facebook.com/dentallamazonas" target="_blank" class="icon-facebook blanco"></a>
					<a href="" target="_blank" class="icon-twitter blanco"></a>
					<a href="" target="_blank" class="icon-instagram blanco"></a>
				</ul>
			</div>
		</div>
	</footer>-->



	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
</body>
</html>