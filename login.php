	
<!-- Mensagem mostrada no login se o cadastro foi efetuado com sucesso!!-->
<?php 
	session_start();
?>

<?php 
		if (isset($_GET["info"]) && $_GET["info"] == "usu") {
		 	$mensagem = "Usuário cadastrado";
		}else if(isset($_GET["info"])  && $_GET["info"] == "med"){
			$mensagem = "Médico cadastrado";
		} else if (isset($_GET["info"]) && $_GET["info"] == "false") {
		?>
			<script type="text/javascript">
			alert("Usuário já cadastrado");
		</script>
<?php	} ?>	

<?php 
	if (isset($_GET["inf"])) {
	?>
		<script type="text/javascript">
			alert("Usuário não encontrado");
		</script>
<?php	} ?>	
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Projeto Clinica</title>
</head>

<!-- ADICIONAR CLASS -->
<body class="fundo-login">

<section class="login">
	<div class="row">
		<div class="col-sm-5 ml-auto mr-auto">
			<div class="formulario-login">
				<?php if(!empty($mensagem)){?>
					<div class="mensagem_cadastro"> <?php echo $mensagem?></div>
				<?php } ?>
				<form action="verifica_login.php" method="POST">
					<div class="titulo-form">PSICOHEALTH!</div>
					<div class="form-group">
						<label>Email:</label><br>
						<input class="form-control" type="text" name="email" required>
					</div>
					<div class="form-group">
						<label>Senha:</label><br>
					    <input class="form-control" type="password" name="senha" required>  
					</div>
					<a data-toggle="modal" data-target="#exampleModal"><span>Esqueceu a senha?</span></a><br>
					<a href="cadastro.php"><span>Faça seu cadastro já!</span></a>
					<div class="btn-formulario">
						<button class="btn-login" type="submit">Logar</button>
					</div>
				</form>	
			</div>
		</div>
		
	</div>
	

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollable" aria-hidden="true">
 		<div class="modal-dialog modal-dialog-scrollable" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalScrollableTitle">Recuperação de senha.</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
		        	<form >
		        		<div class="form-group mb-0">
		        			<label>Ensira seu Email:</label><br>
							<input class="form-control" type="email" name="txt_usuario" required>	
		        		</div>
						<div class="text-right">
							<button class="btn-recuperacao" type="submit">Recuperar</button>
						</div>
		        	</form>
		      	</div>
	    	</div>
  		</div>
	</div>
	
</section>

<?php 
	include('includes/footer.php');
	// }
	//fim da verificação
?>