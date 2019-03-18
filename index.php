<?php 

if(isset($_POST["email"])){

	include('conecta.php');
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$consulta = mysqli_query($conexao, "SELECT * FROM usuario WHERE email ='$email' and senha = '$senha' ");
	$linha = mysqli_num_rows($consulta);
	if($linha >= 1){
	 	echo '<script type="text/javascript">
		alert("login efetuado com SUCESSO!");
		</script>';
	}else{
		echo '<script type="text/javascript">
		alert("ERRO DE CONEXÃO! VERIFICAR OS DADOS");
		</script>';
	}
}
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Projeto Clinica</title>
</head>
<body>
	<div class="formulario-login">
		<form action="index.php" method="POST">
			<div class="titulo-form">Tela de login</div>
			<div class="form-group">
				<label>Email:</label><br>
				<input class="form-control" type="text" name="email" required>
			</div>
			<div class="form-group">
				<label>Senha:</label><br>
			    <input class="form-control" type="password" name="senha" required>  
			</div>
			<a data-toggle="modal" data-tarPOST="#exampleModalScrollable"><span>Esqueceu a senha?</span></a><br>
			<a href="cadastro.php"><span>Faça seu cadastro já!</span></a>
			<div class="btn-formulario">
				<button class="btn-login" type="submit">Logar</button>
			</div>
		</form>	
	</div>

	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
