<?php 
	require "controler.php";
?>


<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>Home</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap4 -->
		<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
		<script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script> <!-- Icones -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<script>
		
			$(document).ready(function() {
			    $('.meu-select').select2({
			    	placeholder: "Selecione oque voce tem!",
    				allowClear: true
			    });
			});

		</script>
		
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		
		

		


	</head>

	
	
	<body >

		<main class="container-fluid">

			<header class="">
				
				<div class="navegacao row">
					
					<div class="mx-auto col-md-6 col-9 d-flex justify-content-center">
						<a href="index.php"><img src="imagens/logo.png"  class="img-fluid "></a>
					</div>

				</div>

			</header>

			<section id="conteudo" class=" row	 mt-5 py-5 ">

				
				
					<div class="col-md-6 col-12 text-center row animacao mx-auto" >
						<div class="texto col-12 mx-auto ">
							<h2>Sem ideia do que beber ?</h2>
							<h3>Oque você tem ?</h3>
						</div>
						
						<div class="col-10 mx-auto">
							<form method="POST" action="index.php?busca=sim">

								<div class="form-row">
									
									<div class="col-md-6 col-12">
										<label>Bebida</label>
										<select class="form-control meu-select" name="bebida">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Gin</option>
											<option>Vodka</option>
											<option>Tequila</option>
											<option>Whisky</option>
										</select>
									</div>

									<div class="col-md-6 col-12">
										<label>Bebida Adicional</label>
										<select class="form-control meu-select" name="bebida_adicional">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Gin</option>
											<option>Vodka</option>
											<option>Tequila</option>
											<option>Whisky</option>
										</select>
									</div>

									<div class="col-md-6 col-12">
										<label>Suco ou Fruta</label>
										<select class="form-control meu-select" name="suco_fruta">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Morango</option>
											<option>Abacaxi</option>
											<option>Limão</option>
											<option>Maracuja</option>
										</select>
									</div>

									<div class="col-md-6 col-12 mx-auto">
										<label>Suco ou Fruta Adicional</label>
										<select class="form-control meu-select" name="suco_fruta_adicional">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Morango</option>
											<option>Abacaxi</option>
											<option>Limão</option>
											<option>Maracuja</option>
										</select>
									</div>

									<div class="col-md-6 col-12 mx-auto">
										<label>Ingrediente</label>
										<select class="form-control meu-select" name="ingrediente">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Leite condensado</option>
											<option>Açucar</option>
											<option>Halls</option>
											<option>Sal</option>
										</select>
									</div>

									<div class="col-md-6 col-12 mx-auto">
										<label>Ingrediente Adicional</label>
										<select class="form-control meu-select" name="ingrediente_adicional_1">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Leite condensado</option>
											<option>Açucar</option>
											<option>Halls</option>
											<option>Sal</option>
										</select>
									</div>

									<div class="col-md-6 col-12 mx-auto">
										<label>Ingrediente Adicional</label>
										<select class="form-control meu-select" name="ingrediente_adicional_2">
											<option></option>
											<option value="*">Nenhum(a)</option>
											<option>Leite condensado</option>
											<option>Açucar</option>
											<option>Halls</option>
											<option>Sal</option>
										</select>
									</div>

									

								</div>

								<button type="submit" class="btn btn-outline-warning mt-5">Procurar</button>
								
							</form>
						</div>
					</div>

					<div class="col-md-6 col-12 animacao">
						<img src="imagens/d3.jpg" class="img-fluid img">
					</div>

				

			</section>

			
			<section id="conteudo" class="row my-5  py-5">
				
				
					
					<div class="col-12 text-center ">
						<h2 class="texto">Nossas sugestões</h2>
					</div>

					<div class="col-8 mx-auto mt-4" >

						<div id="carousel" class="carousel slide " data-ride="carousel">
							
							<div class="carousel-inner">
								
								<div class="carousel-item active">
									<div class="row">
										<div class="col-4">
											
											<img src="imagens/lagoaazul.jpg" class="img-drink" height="400">
										</div>
										<div class="col-4">
											<img src="imagens/lagoaazul.jpg" height="400" >
										</div>
										<div class="col-4">
											<img src="imagens/lagoaazul.jpg" height="400" >
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<img src="imagens/lagoaazul.jpg" width="100%" height="400">
								</div>

								<div class="carousel-item">
									<img src="imagens/lagoaazul.jpg" width="100%" height="400">
								</div>

							</div>

							<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
						    </a>
						  	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
						  	</a>


						</div>

					</div>

				

			</section>

			<footer id="rodape">
				<article class="row">
					<div class="col-6 text-center">
						<p>dadsada</p>			
					</div>
					<div class="col-6 text-center">
						<img src="imagens/logo.png" class="img-fluid ">
					</div>				
				</article>
			</footer>

		</main>


		<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   		
   		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>

</html>