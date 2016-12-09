<?php
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];

	include("clases/Conexion.php");

	$conexion = new Conexion();

	$proceso = $conexion->consultaRetorno("SELECT * FROM usuario WHERE email = '$email' AND pass = '$password'");
	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['id']=$resultado[0];
		$_SESSION['usuario']=$resultado[1];
		$_SESSION['area_designada']=$resultado[4];
		$_SESSION['cargo']=$resultado[5];
		header("Location:sistema.php");
	}
	else{
		header("Location:index.php");
	}
?>