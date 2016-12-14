<?php
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];

	include("clases/Conexion.php");

	$conexion = new Conexion();


	$proceso = $conexion->consultaRetorno("SELECT * FROM encargado WHERE emailEncargado = '$email' AND passEmail = '$password'");
        $resultado = mysqli_fetch_array($proceso);
        if ($resultado != NULL) {
		$_SESSION['id']=$resultado[0];
		$_SESSION['usuario']=$resultado[1];
		$_SESSION['cargo']=$resultado[2];
                $_SESSION['codArea']= $resultado[5];
                $_SESSION['area_designada']=  asignarArea($resultado[5]);
                //prueba();

		header("Location:sistema.php");
	}
	else{
		header("Location:index.php");
	}

       
    function asignarArea($codigoArea){
        /*
        SELECT * FROM proyecto inner join area on proyecto.codArea = area.codArea where area.codArea= 'AA';
         *              */
        if($codigoArea === 'AA'){
            return 'Apadrinamiento';
        }else{
            if($codigoArea === 'ATV'){
                return 'Talleres de Vida';
            }else{
                return 'Hogar';
            }
        }
    }
    
    function prueba(){
        $conexion = new Conexion();
        $proceso = $conexion->consultaRetorno("SELECT codProyecto, nombreProyecto,objGralProyecto, objEspcProyecto FROM proyecto inner join area on proyecto.codArea = area.codArea where area.codArea= 'AA'");
        //$resultado = mysqli_fetch_array($proceso);
        $filas = array();
        $i= 0;
        while ($resultado = mysqli_fetch_array($proceso)) {
            $filas[$i] = $resultado;
            /*echo $resultado[1];echo"<br>";
            echo $resultado[2];echo"<br>";
            echo $resultado[3];echo"<br>";
            echo"---------------------------------";*/
            $i++;
        }
        //var_dump($filas);
    }

