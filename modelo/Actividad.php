<?php

include('../clases/Conexion.php');

class Actividad {
    //Atributos
    private $descripcion;
    private $indicador;
    private $meta;
    private $dineroTotal;
    
    function __construct() {
        $this->con = new Conexion();
    }
    
    public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

    public function get($atributo){
        return $this->$atributo;
    }
    
    public function crear(){
        $sql = "INSERT INTO articulo (detalle, unidadMedida, cantidad, precioUnitario) VALUES ('{$this->detalle}', '{$this->unidadMedida}', '{$this->cantidad}', '{$this->precioUnitario}')";
        $this->con->consultaSimple($sql);
        return true;
    }
}
