<?php
    //echo "estamos aqui";
    //SELECT codProyecto, nombreProyecto,objGralProyecto, objEspcProyecto FROM proyecto inner join area on proyecto.codArea = area.codArea where area.codArea= 'AA';
    session_start();
    require ('clases/Conexion.php');
    $codArea = $_GET['area'];
    $conexion = new Conexion();
    $consulta = "SELECT codProyecto, nombreProyecto,objGralProyecto, objEspcProyecto FROM proyecto inner join area on proyecto.codArea = area.codArea where area.codArea= '".$codArea."'";
    $proceso = $conexion->consultaRetorno($consulta);
    $filas = array();
    $i = 0;
    while ($resultado = mysqli_fetch_assoc($proceso)){
        $filas[$i] = $resultado;
        $i++;
    }
    echo json_encode($filas);
    
