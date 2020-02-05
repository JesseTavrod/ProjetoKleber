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
				<?php 
					if(!empty($_SESSION['usuario'])){
						echo "<div class='sessao_name'>".'Bem vindo !! '.utf8_encode($_SESSION['usuario'])."</div>";
					}else{
						echo "";
					}
				?>
			<div class="formulario_quiz">

				<form  method="Post" action=" ">

						<!--Envio de formulario para  

							CRIAR FORMÚLARIO 

						-->

						<h1>INSERIR CHAT AQUI</h1>
				</form> 
			<!-- form       
				desc: Method= como as informações serão enviadas.  
				Action = para qual arquivo vai ser enviado 
			-->
			</div> <!--Formulario_Quiz-->
			</main>
		</div>
	</div>
</section>
<?php include('includes/footer.php');?>