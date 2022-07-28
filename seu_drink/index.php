 <?php 
	require "controler.php";

	



?>


<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>Encontre seu drink !</title>
		<link rel="icon" href="imagens/favicon1.png">
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

			    
			    if($(location).attr('href') == 'http://localhost/seudrink/seu_drink/index.php?busca=sim') {
			   
				    $('html, body').animate({
				    	scrollTop: 800
				    }, 600);

				}



			});

			
		</script>
		
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		
		

		


	</head>

	
	
	<body>

		<main class="container-fluid">

			<header class="">
				
				<div class="navegacao row fixed-top">
					
					<div class="mx-auto col-md-6 col-9 d-flex justify-content-center">
						<a href="index.php"><img src="imagens/logo.png"  class="img-fluid "></a>
					</div>

				</div>

			</header>

			<section id="conteudo" class=" topo row	 py-5 " style="margin-top: 200px">

				
				
					<div class="col-md-6 col-12 text-center row animacao mx-auto" >
						<div class="texto col-12 mx-auto ">
							<h2>Sem ideia do que beber ?</h2>
							<h3>Oque você tem ?</h3>
						</div>
						
						<div class="col-10 mx-auto form">
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

								<button type="submit"  class="btn btn-outline-warning mt-5">Procurar</button>
								
							</form>
						</div>
					</div>

					<div class="col-md-6 col-12 animacao">
						<img src="imagens/d5.jpg" class="img-fluid img">
					</div>

				

			</section>

			<?php if(isset($drinks) and !empty($drinks)) { ?>

				<section id="conteudo_drinks" class="row my-5 py-5 justify-content-around">

					<h2 class="titulo_conteudo col-12 text-center mb-5">Drinks que você pode fazer !</h2>
					
					<?php foreach ($drinks as $indice => $drink) { ?>
						
						<?php 

							$preparo = explode('*', $drink->preparo) ;
							
							$preparo[1] =  isset($preparo[1]) ? $preparo[1] : '' ;
							$preparo[2] =  isset($preparo[2]) ? $preparo[2] : '' ;
							$preparo[3] =  isset($preparo[3]) ? $preparo[3] : '' ;
							$preparo[4] =  isset($preparo[4]) ? $preparo[4] : '' ;
							$preparo[5] =  isset($preparo[5]) ? $preparo[5] : '' ;
							$preparo[6] =  isset($preparo[6]) ? $preparo[6] : '' ;
							
						?>

						<div class="card col-md-5 col-10 card-custom mt-4">
							
								
								
								<img src="<?=$drink->img?>" class="img-fluid card-img-top">
								

							

							<div class="card-body">
								<h2 class="text-capitalize text-center card-title"><?=$drink->nome?></h2>

								<div class="card-text row justify-content-center">

									<div class="col-md-6 mt-3">
										<h3 class="text-center ">Ingredientes:</h3>

										<ul class="list-group text-capitalize">

											<?php if($drink->bebida !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->bebida?></li>
											<?php } ?>

											<?php if($drink->bebida_adicional !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->bebida_adicional?></li>
											<?php } ?>

											<?php if($drink->suco_fruta !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->suco_fruta?></li>
											<?php } ?>

											<?php if($drink->suco_fruta_adicional !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->suco_fruta_adicional?></li>
											<?php } ?>

											<?php if($drink->ingrediente !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->ingrediente?></li>
											<?php } ?>

											<?php if($drink->ingrediente_adicional_1 !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->ingrediente_adicional_1?></li>
											<?php } ?>

											<?php if($drink->ingrediente_adicional_2 !== 'ND') { ?>
												<li class="list-group-item"><?=$drink->ingrediente_adicional_2?></li>
											<?php } ?>

										</ul>
									</div>

									<div class="col-md-6 mt-3">

										<h3 class="text-center ">Como fazer:</h3>
										<ol class="list-group text-capitalize">

											<?php if($preparo[0] !== '') { ?>
												<li class="list-group-item"><?=$preparo[0]?></li>
											<?php } ?>
											
											<?php if($preparo[1] !== '') { ?>
												<li class="list-group-item"><?=$preparo[1]?></li>
											<?php } ?>


											<?php if($preparo[2] !== '') { ?>
												<li class="list-group-item"><?=$preparo[2]?></li>
											<?php } ?>

											<?php if($preparo[3] !== '') { ?>
												<li class="list-group-item"><?=$preparo[3]?></li>
											<?php } ?>

											<?php if($preparo[4] !== '') { ?>
												<li class="list-group-item"><?=$preparo[4]?></li>
											<?php } ?>

											<?php if($preparo[5] !== '') { ?>
												<li class="list-group-item"><?=$preparo[5]?></li>
											<?php } ?>

											<?php if($preparo[6] !== '') { ?>
												<li class="list-group-item"><?=$preparo[6]?></li>
											<?php } ?>

										</ol>

									</div>

								</div>

							</div>
						</div>

					<?php } ?>


				</section>

			<?php  } ?>

			<?php if(isset($drinks) and empty($drinks)) { ?>

				<section id="conteudo" class="row my-5 py-5">

					<h1>Sem drink</h1>
					<button class="btn btn-outline-warning" onclick="window.location.href='index.php'">Procurar de novo</button>

				</section>

			<?php  } ?>

			
			<section id="conteudo" class="sugestao row mt-5 mb-5  py-5">
				
				
					
					<div class="col-12 text-center ">
						<h2 class="texto">Nossas sugestões</h2>
					</div>

					<div class="col-md-10 col-12 mx-auto mt-4" >

						<div id="carousel" class="carousel slide " data-ride="carousel">
							
							<div class="carousel-inner">
								
								<div class="carousel-item active">
									<div class="row">
										<div class="col-4" style="padding: 0px">
											
											<img src="imagens/drinks/pinacolada.png" class="img-drink" height="400" width="100%">
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/caipirinhadelimao.jpg" height="400" width="100%" >
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/margarida.jpg" height="400" width="100%">
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<div class="row">
										<div class="col-4" style="padding: 0px">
											
											<img src="imagens/drinks/sangria.jpg" class="img-drink" height="400" width="100%">
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/gintonica.jpg" height="400" width="100%" >
										</div>
										<div class="col-4" style="padding: 0px">
											<img src="imagens/drinks/caipirinhademorango.jpg" height="400" width="100%">
										</div>
									</div>
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

			<footer id="rodape" class="row">
				<article class="col-12 row align-items-center justify-content-center">
					<div class="col-4 text-center">
						<h2>Sobre:</h2>
						<p>Web service criado e desenvolvido de forma autonoma</p>		
					</div>
					<div class="col-4 text-center">
						<h2>Navegação:</h2>
						<ul class="nav justify-content-center">
							<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
							<li class="nav-item"><a class="nav-link">teste</a></li>
							<li class="nav-item"><a class="nav-link">teste</a></li>
						</ul>
					</div>	
					<div class="col-md-4 col-12 text-center">
						<h2>Parceiros</h2>
						<ul class="nav justify-content-center">
							<li class="nav-item"><a class="nav-link" href="https:/www.produtosdotiao.com"><img src="imagens/parceiro.png" width="300"></li></a>
						</ul>
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