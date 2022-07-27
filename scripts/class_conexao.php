<?php 

	class Conexao {
		private $user = 'root';
		private $db = 'seu_drink';
		private $host = 'localhost';
		private $senha = '';

		public function conectar() {
			try{;
				$conexao = new PDO("mysql:host=$this->host;dbname=$this->db","$this->user","$this->senha");
				return $conexao;
			}
			catch(PDOException $e){
				echo "<p> Erro:". $e->GetMessege() ."</p>";
			}
		}

	}


?>