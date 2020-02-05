<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript">
		<?php if(isset($_GET['info']) ){?>
			alert("Email já está cadastrado!");
		<?php } ?>
	</script>

	<title>Projeto Clinica</title>

</head>
<body class="fundo-cadastro">
	<div class="container mt-3">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="formulario-cadastro">
					<div class="titulo-form">Cadastro</div>

				 	<!-    -->
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

					    	<!--Formulario de candastro de Medico-->
					    	<form class="cadastro-medico" name="form_medico" action="inserir_cadastro.php" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label class="text-imagem">Imagem de perfil:</label><br>
									<div class="box-imagem">
										<input name="imagem" type="file" required>
									 	<span>Inserir foto</span>
									</div>
								</div>
								<div class="form-group">
									<label>Nome Completo:</label><br>
									<input class="form-control"  type="text" name="nome_completo" required>
								</div>
								<div class="form-group">
									<label>Cod. Identificação do Médico</label>
									<input class="form-control"  type="number" name="identificacao_medico"  required>
								</div>
								<div class="form-group row">
									<div class="col-8 pr-sm-1">
										<label>Email</label><br>
										<input class="form-control" type="" name="email" required>
									</div>
									<div class="col-4">
										<label>Data de nascimento:</label><br>
										<input class="form-control"  type="date" name="data_nascimento" placeholder="data_nascimento" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 pr-sm-1 pl-sm-0">
										<label>Senha:</label><br>
										<input class="form-control"  type="password" name="senha" required>
										<div id="senha_diferente"></div>
									</div>
									<div class="col-sm-6 pl-sm-0 pr-sm-1">
										<label>Repetir senha:</label><br>
										<input class="form-control"  type="password" name="senha_confirmacao" required>

									</div>
								</div>
								<div class="form-group row">
									<div class="col-4 pr-1">
										<label>Especialidade: </label>
										<select name="especialidade" class="form-control">
										<option value="clinicos">Clinico</option>
										<option value="psicoterapeutas">Psicoterapeuta</option>
										<option value="educacionais">Educacionais</option>
										<option value="neuropsicologos">Neuropsicólogo</option>
										<option value="sociais">Social</option>
										<option value="trabalho">Trabalho</option>
										<option value="criminal">Criminal</option>
										<option value="esportivo">Esportivo</option>
										<option value="coaching">Coaching</option>
										</select>
									</div>
								
									<div class="col-4 pr-1">
										<div class="input-estados">
											<label>Estado:</label>
											<select name="uf" class="form-control">
												<option value="AC">Acre</option>
												<option value="AL">Alagoas</option>
												<option value="AP">Amapá</option>
												<option value="AM">Amazonas</option>
												<option value="BA">Bahia</option>
												<option value="CE">Ceará</option>
												<option value="DF">Distrito Federal</option>
												<option value="ES">Espírito Santo</option>
												<option value="GO">Goiás</option>
												<option value="MA">Maranhão</option>
												<option value="MT">Mato Grosso</option>
												<option value="MS">Mato Grosso do Sul</option>
												<option value="MG">Minas Gerais</option>
												<option value="PA">Pará</option>
												<option value="PB">Paraíba</option>
												<option value="PR">Paraná</option>
												<option value="PE">Pernambuco</option>
												<option value="PI">Piauí</option>
												<option value="RJ">Rio de Janeiro</option>
												<option value="RN">Rio Grande do Norte</option>
												<option value="RS">Rio Grande do Sul</option>
												<option value="RO">Rondônia</option>
												<option value="RR">Roraima</option>
												<option value="SC">Santa Catarina</option>
												<option value="SP">São Paulo</option>
												<option value="SE">Sergipe</option>
												<option value="TO">Tocantins</option>
											</select>	
										</div>
									</div>
									<div class="col-4">
										<label>Cidade:</label><br>
										<input class="form-control"  type="text" name="cidade" required>
									</div>

								</div> 
								<div >
									<label class="mr-2">Sexo:</label>
									<div>
										<input type="radio" name="sexo" value="M" >Masculino
										<input type="radio" name="sexo" value="F" >Feminino
									</div>
								</div>
								<div class="form-group">
								    <label for="formGroupExampleInput2">Descrição:</label>
								    <textarea class="form-control" rows="7" id="validationTextarea" name="descricao"></textarea>
								</div>

								<div class="btn-formulario div-form">
									<button class="btn-login" type="submit" onclick="return validarMedico()">Cadastrar</button>
								</div>
							</form>	
							<!--Formulario de cadastro de Medico-->	
					    </div>

					  	<div class="tab-pane fade show active" id="pills-usuario" role="tabpanel" aria-labelledby="pills-profile-tab">

					  	<!--Formulario de cadastro de usuario-->
					  		<form class="cadastro-usuario" name="form_usuario" action="inserir_cadastro.php" method="POST">
								<div class="form-group">
									<label>Nome Completo:</label><br>
									<input class="form-control"  type="text" name="nome_completo" required>
								</div>
								<div class="form-group row">
									<div class="col-8 pr-1">
										<label>Email:</label><br>
										<input class="form-control" type="" name="email" required>
									</div>
									<div class="col-4 ">
										<label>Data de nascimento:</label><br>
										<input class="form-control"  type="date" name="data_nascimento" placeholder="data_nascimento" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-6 pr-1">
										<div class="input-estados">
											<label>Estado:</label>
											<select name="uf" class="form-control">
												<option value="AC">Acre</option>
												<option value="AL">Alagoas</option>
												<option value="AP">Amapá</option>
												<option value="AM">Amazonas</option>
												<option value="BA">Bahia</option>
												<option value="CE">Ceará</option>
												<option value="DF">Distrito Federal</option>
												<option value="ES">Espírito Santo</option>
												<option value="GO">Goiás</option>
												<option value="MA">Maranhão</option>
												<option value="MT">Mato Grosso</option>
												<option value="MS">Mato Grosso do Sul</option>
												<option value="MG">Minas Gerais</option>
												<option value="PA">Pará</option>
												<option value="PB">Paraíba</option>
												<option value="PR">Paraná</option>
												<option value="PE">Pernambuco</option>
												<option value="PI">Piauí</option>
												<option value="RJ">Rio de Janeiro</option>
												<option value="RN">Rio Grande do Norte</option>
												<option value="RS">Rio Grande do Sul</option>
												<option value="RO">Rondônia</option>
												<option value="RR">Roraima</option>
												<option value="SC">Santa Catarina</option>
												<option value="SP">São Paulo</option>
												<option value="SE">Sergipe</option>
												<option value="TO">Tocantins</option>
											</select>	
										</div>
									</div>
									<div class="col-6">
										<label>Cidade:</label><br>
										<input class="form-control"  type="text" name="cidade" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 pr-1 pl-0">
										<label>Senha:</label><br>
										<input class="form-control"  type="password" name="senha" required>
										<div id="senha_diferente"></div>
									</div>
									<div class="col-sm-6 pr-1 pl-0">
										<label>Repetir senha:</label><br>
										<input class="form-control"  type="password" name="senha_confirmacao" required>
									</div>
								</div>
								<div class="form-group">
									<label class="mr-2">Sexo:</label>
									<input type="radio" name="sexo" value="M" checked>Masculino
									<input type="radio" name="sexo" value="F" >Feminino
								</div> 

								<div class="btn-formulario div-form">
									<button class="btn-login" type="submit" onclick="return validarUsuario()">Cadastrar</button>
								</div>
							</form>
							<!--Formulario de candastro de Usuário-->
							
							
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php');?>