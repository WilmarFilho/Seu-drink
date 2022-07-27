<?php 
		
	require "../scripts/class_drink.php";
	require "../scripts/class_conexao.php";
	require "../scripts/class_bd.php";


	if(isset($_GET['busca']) and $_GET['busca'] == 'sim') {

		if(isset($_POST['bebida'])) {
			

			$conexao = new Conexao();
			
			$drink = new Drink();
			
			$drink->__set('bebida', $_POST['bebida']);
			$drink->__set('bebida_adicional', $_POST['bebida_adicional']);
			$drink->__set('suco_fruta', $_POST['suco_fruta']);
			$drink->__set('suco_fruta_adicional', $_POST['suco_fruta_adicional']);
			$drink->__set('ingrediente', $_POST['ingrediente']);
			$drink->__set('ingrediente_adicional_1', $_POST['ingrediente_adicional_1']);
			$drink->__set('ingrediente_adicional_2', $_POST['ingrediente_adicional_2']);

			$bd = new Bd($conexao, $drink);
			

			$drinks =  $bd->procuraDrink();
			


		}

		

	}


?>