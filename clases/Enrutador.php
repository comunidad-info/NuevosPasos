<?php
	class Enrutador{

		public function cargarVista($vista){
			switch ($vista) {
				case 'ingresarPoa':
				include('vistas/'.$vista.'.php');
				break;

				case 'prueba':
				include('vistas/'.$vista.'.php');
				break;

				case 'Actividades':
				include('vistas/'.$vista.'.php');
				break;

				case 'ingresarPOA':
				include('vistas/'.$vista.'.php');
				break;

				case 'adelantoDinero':
				include('vistas/'.$vista.'.php');
				break;

				case 'ordenCompra':
				include('vistas/'.$vista.'.php');
				break;

				case 'rendicion':
				include('vistas/'.$vista.'.php');
				break;

				case 'ingresarpoav2':
				include('vistas/'.$vista.'.php');
				break;
			}
		}

		public function validarGET($variable){
			if (empty($variable)) {
				include('vistas/bienvenido.php');
			}
			else{
				return true;
			}
		}
	}
?>