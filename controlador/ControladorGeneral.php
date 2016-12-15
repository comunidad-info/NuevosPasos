<?php
    include('../controlador/ControladorArticulo.php');
    $campo1=$_POST["campo1"];
    $campo2=$_POST["campo2"];
    $campo3=$_POST["campo3"];
    $campo4=$_POST["campo4"];
    
    $controladorArticulo = new ControladorArticulo();
    
    $r = $controladorArticulo->crear($campo1, $campo2, $campo3, $campo4);
    
    