<?php 

if(isset($_POST['nome_completo']) ) {
    include('conecta.php');

    $nome_completo = $_POST['nome_completo'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    if ($senha != $_POST['senha_confirmacao']) {
?>
	<script type="text/javascript">
		alert("Senhas Diferentes!");
	</script>
<?php
    }else{

   	// $verificar_usuario = mysqli_query($conexao , "select * from usuario where email ='$email'");
    // $verificar_medico = mysqli_query($conexao , "select * from usuario where email ='$email'");
    // var_dump($verificar_usuario) ;
    // var_dump($verificar_medico); 
    
    // if( $verificar_usuario != "" || $verificar_medico != "" ){
    // 	echo "Email ja cadastrado!";

    // }else{

	    if(isset($_POST['identificacao_medico'])){
	    	
		$identificacao_medico = $_POST['identificacao_medico'];

		$cadastra_dados = "INSERT INTO medico(nome_completo,cidade,uf,email,data_nascimento,senha,sexo) VALUES('$nome_completo','$cidade','$uf','$email','$data_nascimento','$senha','$sexo')";
		mysqli_query($conexao , $cadastra_dados); 
		?>
		<script type="text/javascript">
	 		alert("MEDICO CADASTRADO");
		</script>
		<?php
	    }else{
	    	$cadastra_dados = "INSERT INTO usuario(nome_completo,cidade,uf,email,data_nascimento,senha,sexo) VALUES('$nome_completo','$cidade','$uf','$email','$data_nascimento','$senha','$sexo')";
	   
		?>
		 <script type="text/javascript">
		 	alert("USÚARIO CADASTRADO!");
		 </script>

		<?php

	    }
	     mysqli_query($conexao , $cadastra_dados); 
    //} 
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
	
	<div class="container mt-3">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="formulario-cadastro">
					<div class="titulo-form">Tipo de cadastro</div>
					<ul class="nav nav-pills mb-3 row text-center" id="pills-tab" role="tablist">
						<li class="nav-item col-12 col-sm-8">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-usuario" role="tab" aria-controls="pills-home" aria-selected="true">USÚARIO</a>
						</li>
						<li class="nav-item col-12 col-sm-4">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-medico" role="tab" aria-controls="pills-medico" aria-selected="false">MÉDICO</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					    <div class="tab-pane fade " id="pills-medico" role="tabpanel" aria-labelledby="pills-home-tab">
					    	<form class="cadastro-medico" action="cadastro.php" method="POST">
								<div class="form-group">
									<label>Nome Completo:</label><br>
									<input class="form-control"  type="text" name="nome_completo" required>
								</div>
								<div class="form-group">
									<label>Cod. Identificação do Médico</label>
									<input class="form-control"  type="number" name="identificacao_medico"  required>
								</div>
								<div class="form-group row">
									<div class="col-8 pr-1">
										<label>Cidade:</label><br>
										<input class="form-control "  type="text" name="cidade" required>
									</div>
									<div class="col-4 pl-0">
										<label>UF:</label>
										<input class="form-control col"  type="text" name="uf" required>
									</div>
								</div>
								<div class="form-group">
									<label>Email</label><br>
									<input class="form-control" type="" name="email" placeholder="e.x:joao@gmail.com" required>
								</div>
								<div class="form-group">
									<label>Data de nascimento:</label><br>
									<input class="form-control"  type="date" name="data_nascimento" placeholder="data_nascimento" required>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 pr-sm-1">
										<label>Senha:</label><br>
										<input class="form-control"  type="password" name="senha" required>
									</div>
									<div class="col-sm-6 pl-sm-0">
										<label>Repetir senha:</label><br>
										<input class="form-control"  type="password" name="senha_confirmacao" required>
									</div>
								</div>
								<div class="form-group">
									<label>Sexo:</label><br>
									<input type="radio" name="sexo" value="F" checked>Feminino
							 		<input type="radio" name="sexo" value="M">Masculino
								</div>
								<div class="btn-formulario div-form">
									<button class="btn-login" type="submit">Cadastrar</button>
								</div>
							</form>		
					    </div>

					  	<div class="tab-pane fade show active" id="pills-usuario" role="tabpanel" aria-labelledby="pills-profile-tab">
					  		<form class="cadastro-usuario" name="formUsuario" action="" method="POST">
								<div class="form-group">
									<label>Nome Completo:</label><br>
									<input class="form-control"  type="text" name="nome_completo" required>
								</div>
								<div class="form-group row">
									<div class="col-8 pr-1">
										<label>Cidade:</label><br>
										<input class="form-control"  type="text" name="cidade" required>
									</div>
									<div class="col-4 pl-0">
										<label>UF:</label>
										<input class="form-control"  type="text" name="uf" required>
									</div>
								</div>
								<div class="form-group">
									<label>Email</label><br>
									<input class="form-control" type="" name="email" required>
								</div>
								<div class="form-group">
									<label>Data de nascimento:</label><br>
									<input class="form-control"  type="date" name="data_nascimento" required>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-6 pr-1">
										<label>Senha:</label><br>
										<input class="form-control"  type="password" name="senha" required>
									</div>
									<div class="col-sm-6 pl-0">
										<label>Repetir senha:</label><br>
										<input class="form-control"  type="password" name="senha_confirmacao" required>
									</div>
								</div>
								<div class="form-group">
									<label>Sexo:</label><br>
									<input type="radio" name="sexo" value="M" checked>Masculino
									<input type="radio" name="sexo" value="F">Feminino
								</div> 

								<div class="btn-formulario div-form">
									<button class="btn-login" type="submit" onclick="myFunction()">Cadastrar</button>
								</div>
							</form>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!--     	<script>
		function myFunction() {
			var primeiraS = formgroup.senha.value;
			var primeiraSenha = document.getElementById("senha1");
			var segundaSenha = document.getElementById("senha2");

			alert(primeiraS);

			if (primeiraSenha.value == segundaSenha.value) {
				alert("aqui");
				return true;
			}else{
				alert("não");
				return false
			}
		}
	</script> -->
</body>
</html>
