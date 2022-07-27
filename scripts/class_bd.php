<?php 

	class Bd {

		private $conexao;
		private $drink;

		public function __construct($conexao, $drink) {
			$this->conexao = $conexao->conectar();
			$this->drink = $drink;
		}

		public function procuraDrink() {
			
			/*$query = `
			SELECT 
				bebida, bebida_adicional, suco_fruta, suco_fruta_adicional, ingrediente, ingrediente_adicional_1, ingrediente_adicional_2 
			FROM 
				drinks 
			WHERE 
				bebida like '%:bebida%' or 
				bebida like '%:bebida_adicional%' or 
				bebida_adicional like '%:bebida%' or 
				bebida_adicional like '%:bebida_adicional%' or 
				suco_fruta like '%:suco_fruta%' or 
				suco_fruta like '%:suco_fruta_adicional%' or 
				suco_fruta_adicional like '%:suco_fruta%' or 
				suco_fruta_adicional like '%:suco_fruta_adicional%' or 
				ingrediente like '%:ingrediente%' or 
				ingrediente like '%:ingrediente_adicional_1%' or 
				ingrediente like '%:ingrediente_adicional_2%' or 
				ingrediente_adicional_1 like '%:ingrediente%' or 
				ingrediente_adicional_1 like '%:ingrediente_adicional_1%' or 
				ingrediente_adicional_1 like '%:ingrediente_adicional_2%' or ingrediente_adicional_2 like '%:ingrediente%' or
				ingrediente_adicional_2 like '%:ingrediente_adicional_1%' or
				ingrediente_adicional_2 like '%:ingrediente_adicional_2%'`;*/

			$query = "select * from drinks where bebida like :bebida or 
				bebida like :bebida_adicional or 
				bebida_adicional like :bebida or 
				bebida_adicional like :bebida_adicional or 
				suco_fruta like :suco_fruta or 
				suco_fruta like :suco_fruta_adicional or 
				suco_fruta_adicional like :suco_fruta or 
				suco_fruta_adicional like :suco_fruta_adicional or 
				ingrediente like :ingrediente or 
				ingrediente like :ingrediente_adicional_1 or 
				ingrediente like :ingrediente_adicional_2 or 
				ingrediente_adicional_1 like :ingrediente or 
				ingrediente_adicional_1 like :ingrediente_adicional_1 or 
				ingrediente_adicional_1 like :ingrediente_adicional_2 or ingrediente_adicional_2 like '%:ingrediente%' or
				ingrediente_adicional_2 like :ingrediente_adicional_1 or
				ingrediente_adicional_2 like :ingrediente_adicional_2";

			$stmt = $this->conexao->prepare($query);

			$bebida = '%' . $this->drink->__get('bebida') . '%' ;
			$bebida_adicional = '%' . $this->drink->__get('bebida_adicional') . '%' ;
			$suco_fruta = '%' . $this->drink->__get('suco_fruta') . '%' ;
			$suco_fruta_adicional = '%' . $this->drink->__get('suco_fruta_adicional') . '%' ;
			$ingrediente = '%' . $this->drink->__get('ingrediente') . '%' ;
			$ingrediente_adicional_1 = '%' . $this->drink->__get('ingrediente_adicional_1') . '%' ;
			$ingrediente_adicional_2 = '%' . $this->drink->__get('ingrediente_adicional_2') . '%' ;
			
			$stmt->bindValue(':bebida', $bebida);
			$stmt->bindValue(':bebida_adicional', $bebida_adicional);
			$stmt->bindValue(':suco_fruta', $suco_fruta);
			$stmt->bindValue(':suco_fruta_adicional', $suco_fruta_adicional);	
			$stmt->bindValue(':ingrediente', $ingrediente);
			$stmt->bindValue(':ingrediente_adicional_1', $ingrediente_adicional_1);
			$stmt->bindValue(':ingrediente_adicional_2', $ingrediente_adicional_2);
			
			$stmt->execute();

			return $stmt->fetchAll(PDO:: FETCH_OBJ);		



		}

		public function teste() {
			echo '<pre>';
			print_r($this->drink);
			echo '</pre>';



		}

	}



?>