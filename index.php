<?php
  session_start();   // Necesitamos una sesion

  if(isset($_SESSION['id'])){  // comparamos si existe
   header("Location:sistema.php"); // si existe, lo redireccionamos a sesion.php
  }
  else{
   session_destroy();  // si no existe, destruimos sesion
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/usuario.ico">
	<title>Login | Nuevos Pasos</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body class="login-page">
	<div class="login-box">
		<div class="login-title">
			<a href="">
				Asociación 
				<b>Nuevos Pasos</b>
			</a>
		</div>
		<!-- login-title -->
		<div class="login-body">
			<div>
				<form action="proceso.php" method="POST">
					<p align="center">Iniciar sesión</p>
					<div class="form-group has-feedback">
						<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<!-- div -->
					<div class="form-group has-feedback">
						<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
		        		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<!-- div -->
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
							<div class="checkbox">
				                <label>
				                 	<input type="checkbox" value="remember-me"> Recordarme
				                </label>
				            </div>
						</div>
						<!-- col-lg-8 -->
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
							<button class="btn btn-primary btn-block btn-flatt" type="submit">Iniciar</button>
						</div>
						<!-- col-lg-4 -->
					</div>
					<!-- row -->
				</form>	
			</div>
			<!-- form -->
			<a href="">Olvide mi contraseña</a><br>
		</div>
		<!-- login-body -->
	</div>
	<!-- login-box -->

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>