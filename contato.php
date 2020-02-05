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
				<div class="formulario-contato">
					<h2 class="text-center mt-3">Entre em contato</h2>
					<div class="row">
						<div class="col-7 mx-auto mt-4">
							<form action="formulario-contato.php" method="get">
							  <div class="form-group">
							    <label for="formGroupExampleInput">Nome Completo:</label>
							    <input type="text" class="form-control" name="nome" id="formGroupExampleInput">
							  </div>
							  <div class="form-group">
							    <label for="formGroupExampleInput2">Email:</label>
							    <input type="text" class="form-control" id="formGroupExampleInput2">
							  </div>
							  <div class="form-group">
							    <label for="formGroupExampleInput2">Assunto:</label>
							    <input type="text" class="form-control" id="formGroupExampleInput2">
							  </div>
							  <div class="form-group">
							    <label for="formGroupExampleInput2">Descrição:</label>
							    <textarea class="form-control" rows="3" id="validationTextarea" ></textarea>
							  </div>
							  <button type="submit" class="btn ">Enviar</button>
							</form>		
						</div>	
					</div>
				</div>
			</main>
		</div>
	</div>
</section>
<?php include('includes/footer.php');?>