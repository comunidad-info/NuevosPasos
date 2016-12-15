<?php  

    include('../clases/Conexion.php');

    class Articulo 
    {
        //Atributos
        private $detalle;
        private $unidadMedida;
        private $cantidad;
        private $precioUnitario;

        private $con;
        
        public function __construct(){
            $this->con = new Conexion();
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }
        public function listar(){
            $sql = "SELECT * FROM articulo";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
        }

        public function crear(){
            $sql = "INSERT INTO articulo (detalle, unidadMedida, cantidad, precioUnitario) VALUES ('{$this->detalle}', '{$this->unidadMedida}', '{$this->cantidad}', '{$this->precioUnitario}')";
            $this->con->consultaSimple($sql);
            return true;
        }
    
    }