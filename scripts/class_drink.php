<?php 
	
	class Drink {

		private $bebida;
		private $bebida_adicional;
		private $suco_fruta;
		private $suco_fruta_adicional;
		private $ingrediente;
		private $ingrediente_adicional_1;
		private $ingrediente_adicional_2;

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function __get($atributo){
			return $this->$atributo;
		}

	}



 ?>