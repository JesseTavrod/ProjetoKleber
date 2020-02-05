<?php include("conecta.php")?>
<?php 


	if (isset($_GET["especialidade"])) {
		$especialidade = $_GET["especialidade"] ;
		$sqlmedicos = " SELECT * FROM medico
                        WHERE especialidade = '$especialidade' " ;           
		$medicos = mysqli_query($conexao, $sqlmedicos);
	}
	else{
		$medicos = mysqli_query($conexao,  " SELECT * FROM medico ");
	}
 ?>	
<?php include('includes/header.php');?>

<section class="home">
	<div class="row">
		<div class="col-3 sideleft">
			<?php
				include('includes/menu.php');
			?>
		</div>
		<div class="col-9">
			<div class="menu-topo"> 
				<h1><a href="index.php"> Psicohealth! </a></h1>
				<div class="btn-contato"><a href="contato.php">Entrar em contato</a></div>
			</div>
			<main>

				<?php if(mysqli_num_rows($medicos) > 0 ){ ?>
				<?php 
					if(!empty($_SESSION['usuario'])){
						echo "<div class='sessao_name'>".'Bem vindo !! '.utf8_encode($_SESSION['usuario'])."</div>";
					}else{
						echo "";
					}
				?>
				<div class="loading">
					<div class="carrosel-medico">		
						<div class="carrosel-medico-conteudo">
							<?php while($exibe = mysqli_fetch_assoc($medicos)){	?>
								<div class="col-4 item mt-4">
									<div class="imagem" style="background: url(medicos/<?php echo $exibe['img_url']?>) center; background-size: cover; "><img src=""></div>
									<h2>Dr.<?php echo utf8_encode(current( str_word_count( $exibe['nome_completo'] , 2 ))) ;?></h2>
									<p style=" word-wrap: break-word;"><?php echo utf8_encode(substr($exibe['descricao'], 0, 100 ))."..." ;?></p>
									<div class="buton"><a href="medicos.php?cod=<?php echo $exibe['cod_medico']?>">Ver medico</a></div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>

				<div class="paginacao-medico"> 
						<span id="anterior" onclick="anterior()"><< Anterior </span>
						<span id="proximo" onclick="proximo()">Proximo >>  </span>
				</div>

				<?php } else { ?>

				<div class="medico-encontrado">
					<div class="div-medico">
						Não tem médico dessa especialidade participando!
					</div>
				</div>

				<?php } ?>

			</main>
		</div>
	</div>
</section>
<?php include('includes/footer.php');?>