<?php
    session_start();
    include('clases/Enrutador.php');
    if (isset($_SESSION['id'])) {
      echo "
      <script>
        console.log('Bienvenido');
      </script>
      ";
    }
    else{
      header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/usuario.ico">
	<title>Sistema Nuevos Pasos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


</head>
<body class="system-page">
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
	        <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="?">Nuevos Pasos Perú</a>
				</div>
	          	<div id="navbar" class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Qué quiere hacer hoy? <span class="caret"></span></a>
							<ul class="dropdown-menu">

                      			<li><a href="?cargar=ingresarPOA" id="irAPOA" data-area= "<?php echo $_SESSION['codArea']; ?>">Ingresar POA</a></li>
								<li><a href="#">Solicitar adelanto de dinero</a></li>
								<li><a href="?cargar=prueba">Solicitar orden de compra</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Rendiciones</li>
								<li><a href="#">Rendir adelanto de dinero</a></li>
								<li><a href="#">Rendir orden de compra</a></li>

							</ul>
						</li>
	            	</ul>
	            	<ul class="nav navbar-nav navbar-right">
						<li>

						<a href="">Área: <?php echo $_SESSION['area_designada']?> </a>

						</li>
						<li>
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
						  <img src="img/usuario.jpg" class="user-image" alt="">
						  <span class="hidden-xs" id="user_name"><?php echo $_SESSION['usuario']?></span>
						</a>
						<ul class="dropdown-menu">

						  <li class="user-header">
						    <img src="img/usuario.jpg" class="img-circle" alt="">
						    <p>
						      <?php echo $_SESSION['usuario']?>
						      <small><?php echo $_SESSION['cargo']?></small>
						    </p>
						  </li>

						  <li class="user-footer">
						    <div class="pull-left">
						      <a href="?cargar=editarDatos&id= <?php echo $_SESSION['id']; ?>" class="btn btn-default btn-flat">Editar Datos</a>
						    </div>
						    <div class="pull-right">
						      <a href="cerrarSesion.php" class="btn btn-default btn-flat">Salir</a>
						    </div>
						  </li>
						</ul>
						</li>
	            	</ul>
	          	</div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
      	</nav><!--/nav -->
	</div><!---/container -->

	<div class="container-fluid">
        <div class="row">

			<div class="col-lg-12 derecha">
                <!--<button  > dale</button>-->

				<?php
				$enrutador = new Enrutador();
					if($enrutador->validarGet(isset($_GET['cargar']))){
					$enrutador->cargarVista($_GET['cargar']);
					}
				?>

			</div><!--/.col-lg-12-->
        </div><!--/.row-->
    </div><!--/div
    <!--<footer>

    	<div id="footer">
    	<label class="label1">ASOCIACION NUEVOS PASOS</label><br>
    	<label class="label1">Sérvulo Gutierrez 575 Urb. Sto. Dominguito</label><br>
    	<label class="label1">Trujillo Perú</label><br>
    	<label class="label1">Teléfono +51-44-207393</label><br>
    	<label class="label1">www.nuevospasosperu.org</label><br>
    	<label class="label1">e-mail:administracion@nuevospasosperu.org</label><br>
 	</div>

    </footer>-->

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ingrePOA.js"></script>
    <script src="js/Activi.js"></script>
    
</body>

</html>