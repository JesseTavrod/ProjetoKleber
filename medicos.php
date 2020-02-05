<?php 

include("conecta.php");

if(isset($_GET["cod"])) {
		$cod = $_GET["cod"] ;
		$sqlmedicos = " SELECT * FROM medico
                        WHERE cod_medico = '$cod' " ;           
		$medicos = mysqli_query($conexao, $sqlmedicos);

	}
?>

<?php include("includes/header.php")?>

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
			<main class="medicos">

				<?php if(mysqli_num_rows($medicos) > 0 ){ ?>
	
					<?php while($exibe = mysqli_fetch_assoc($medicos)){	?>
						<div class="col-12 mx-auto p-5 item text-left">
							<div class="imagem" style="height: 250px;width: 200px;background: url(medicos/<?php echo $exibe['img_url']?>) center center; background-size: cover; border: 0.2px solid black;"><img src=""></div>
							<h2 style="font-size: 2rem; font-weight: bold;"><?php echo utf8_encode($exibe['nome_completo']) ;?></h2>
							<p style=" word-wrap: break-word;"><?php echo utf8_encode($exibe['descricao']);?></p>
						</div>
					<?php } }?>

			</main>
		</div>
	</div>
</section>

<?php include("includes/footer.php")?>
