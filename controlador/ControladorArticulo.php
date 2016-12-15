<?php

    include('../modelo/Articulo.php');

    class ControladorArticulo {
        
        private $articulo;
        
        public function __construct() {
            $this->articulo = new Articulo();
        }
        
        public function listar(){
            $resultado = $this->articulo->listar();
            return $resultado;
        }

        public function crear($detalle, $unidadMedida, $cantidad, $precioUnitario){
            $this->articulo->set("detalle",$detalle);
            $this->articulo->set("unidadMedida",$unidadMedida);	
            $this->articulo->set("cantidad",$cantidad);
            $this->articulo->set("precioUnitario",$precioUnitario);
            $resultado = $this->articulo->crear();
            return $resultado;
        }
    }