<?php include('conecta.php')?>
<?php include('includes/header.php');?>

<?php 
	$id = $_SESSION['id'];
	$tipo =  $_SESSION['tipo_usuario'];

	if($tipo == "medico"){
		$query = " select * from $tipo where  cod_medico = $id ";
		$dados = mysqli_query($conexao, $query);
		$valor = mysqli_fetch_assoc($dados);
		$esp = $valor['especialidade'];	 //especialidade
	} else{
		$query = " select * from $tipo where  cod_usuario = $id ";
		$dados = mysqli_query($conexao, $query);
		$valor = mysqli_fetch_assoc($dados);
		
		
	}

	$estado = $valor['uf'];  // UF
	$sex  = $valor['sexo'];

?>
	<section class="sobre">
		<div class="row">
			<div class="col-3 sideleft">
				<?php
					include('includes/menu.php');
				?>
			</div>
			<div class="col-9">
				<div class="menu-topo"> 
					<h1><a href="index.php"> Psicohealth!</a></h1>
					<div class="btn-contato"><a href="contato.php">Entrar em contato</a></div>
				</div>
				<main class="row">
					<div class="box-quiz col-12">
					<?php if( $tipo == 'medico'){?>
						<form method="POST" action="update_informacoes.php" enctype="multipart/form-data">
							<div>
							<?php 
								if($valor["img_url"] != ''){?>
									<div class="imagem-perfil" style="height: 250px;width: 200px;background: url(medicos/<?php echo $valor['img_url']?>) center center; background-size: cover;"> <!-- div que contém a imagem -->
										<!-- imagem sendo pega o nome do DB-->
									</div>

								<?php }else{ ?>

									<div class="imagem-perfil"> <!-- div que contém a imagem -->
										<p>Médico não possui imagem</p>
									</div>

								<?php 
									}
								?> <!-- Se possuir alguma imagem irá mostrar -->

								<div class="form-group div-seila">
									<label class="text-imagem">Imagem de perfil:</label><br>
									<div class="box-imagem">
										<input type="hidden" name="img_existente" value="<?php echo $valor["img_url"] ?>">
										<!--Servira pra permanecer a imagem atual, caso o usúario não queira trocar -->
										<input name="imagem" type="file">
									 	<span>Alterar foto</span>
									</div>

								</div>
							</div>

							<div class="form-group">
								<label>Nome Completo:</label><br>
								<input class="form-control"  type="text" name="nome_completo" required value="<?php echo utf8_encode($valor['nome_completo'])?>" >
							</div>
							<div class="form-group">
								<label>Cod. Identificação do Médico</label>
								<input class="form-control"  type="number" name="identificacao_medico"  required value="<?php echo $valor['identificacao_medico']?>">
							</div>
							<div class="form-group row">
								<div class="col-8 pr-1">
									<label>Cidade:</label><br>
									<input class="form-control"  type="text" name="cidade" required value="<?php echo $valor['cidade']?>">
								</div>
								<div class="col-4 pl-0">
									<label>UF:</label>
									<input class="form-control"  type="text" name="uf" required value="	<?php echo $valor['uf']?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-8 pr-1">
									<label>Email:</label><br>
									<input class="form-control" type="" name="email" required value="<?php echo $valor['email']?>">
								</div>
								<div class="col-4 ">
									<label>Data de nascimento:</label><br>
									<input class="form-control"  type="date" name="data_nascimento" required value="<?php echo $valor['data_nascimento']?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-4 pr-1">
									<label>Especialidade: </label>
									<select name="especialidade" class="form-control">
										<option value="clinicos" <?php if($esp == 'clinicos' ){echo "selected";}?> >Clinico</option>
										<option value="psicoterapeutas" <?php if($esp == "psicoterapeutas" ){echo "selected";}?> >Psicoterapeuta</option>
										<option value="educacionais" <?php if($esp == "psicoterapeutas" ){echo "selected";}?> >Educacionais</option>
										<option value="neuropsicologos" <?php if($esp == "neuropsicologos" ){echo "selected";}?> >Neuropsicólogo</option>
										<option value="sociais" <?php if($esp == "sociais"){echo "selected";}?> >Social</option>
										<option value="trabalho" <?php if($esp == "trabalho" ){echo "selected";}?> >Trabalho</option>
										<option value="criminal" <?php if($esp == "criminal"){echo "selected";}?> >Criminal</option>
										<option value="esportivo" <?php if($esp == "esportivo" ){echo "selected";}?> >Esportivo</option>
										<option value="coaching" <?php if($esp == "coaching" ){echo "selected";}?> >Coaching</option>
									</select>
								</div>
							
								<div class="col-4 pr-1">
									<div class="input-estados">
										<label>Estado:</label>
										<select name="uf" class="form-control">
											<option value="AC" <?php if($estado == "AC" ){echo "selected";}?> >Acre</option>
											<option value="AL" <?php if($estado == "AL" ){echo "selected";}?> >Alagoas</option>
											<option value="AP" <?php if($estado == "AP" ){echo "selected";}?> >Amapá</option>
											<option value="AM" <?php if($estado == "AM" ){echo "selected";}?> >Amazonas</option>
											<option value="BA" <?php if($estado == "BA" ){echo "selected";}?> >Bahia</option>
											<option value="CE" <?php if($estado == "CE" ){echo "selected";}?> >Ceará</option>
											<option value="DF" <?php if($estado == "DF" ){echo "selected";}?> >Distrito Federal</option>
											<option value="ES" <?php if($estado == "ES" ){echo "selected";}?> >Espírito Santo</option>
											<option value="GO" <?php if($estado == "GO" ){echo "selected";}?> >Goiás</option>
											<option value="MA" <?php if($estado == "MA" ){echo "selected";}?> >Maranhão</option>
											<option value="MT" <?php if($estado == "MT" ){echo "selected";}?> >Mato Grosso</option>
											<option value="MS" <?php if($estado == "MS" ){echo "selected";}?> >Mato Grosso do Sul</option>
											<option value="MG" <?php if($estado == "MG" ){echo "selected";}?> >Minas Gerais</option>
											<option value="PA" <?php if($estado == "PA" ){echo "selected";}?> >Pará</option>
											<option value="PB" <?php if($estado == "PB" ){echo "selected";}?> >Paraíba</option>
											<option value="PR" <?php if($estado == "PR" ){echo "selected";}?> >Paraná</option>
											<option value="PE" <?php if($estado == "PE" ){echo "selected";}?> >Pernambuco</option>
											<option value="PI" <?php if($estado == "PI" ){echo "selected";}?> >Piauí</option>
											<option value="RJ" <?php if($estado == "RJ" ){echo "selected";}?> >Rio de Janeiro</option>
											<option value="RN" <?php if($estado == "RN" ){echo "selected";}?> >Rio Grande do Norte</option>
											<option value="RS" <?php if($estado == "RS" ){echo "selected";}?> >Rio Grande do Sul</option>
											<option value="RO" <?php if($estado == "RO" ){echo "selected";}?> >Rondônia</option>
											<option value="RR" <?php if($estado == "RR" ){echo "selected";}?> >Roraima</option>
											<option value="SC" <?php if($estado == "SC" ){echo "selected";}?> >Santa Catarina</option>
											<option value="SP" <?php if($estado == "SP" ){echo "selected";}?> >São Paulo</option>
											<option value="SE" <?php if($estado == "SE" ){echo "selected";}?> >Sergipe</option>
											<option value="TO" <?php if($estado == "TO" ){echo "selected";}?> >Tocantins</option>
										</select>	
									</div>
								</div>
								<div class="col-4">
									<label>Cidade:</label><br>
									<input class="form-control"  type="text" name="cidade" required value="<?php echo $valor['cidade']?>">
								</div>
							</div> 
							<div >
								<label class="mr-2">Sexo:</label>
								<div>
									<input type="radio" name="sexo" value="M" <?php if($sex == "M"){echo "checked";}?>>Masculino
									<input type="radio" name="sexo" value="F" <?php if($sex == "F"){echo "checked";}?>>Feminino
								</div>
							</div>
					   		<div class="form-group">
							    <label for="formGroupExampleInput2">Descrição:</label>
							    <textarea class="form-control" rows="7" id="validationTextarea" name="descricao"> <?php echo utf8_encode($valor['descricao'])?></textarea>
							</div>
					   		<div class="btn-formulario div-form">
								<button class="btn-login" type="submit">Atualizar</button>
							</div>
						</form> <!-- Form -->
					<?php } else{ ?> 

						<!-- Alteração de cadastro de usuario-->
						<form class="cadastro-usuario" name="form_usuario" action="update_informacoes.php" method="POST">
							<div class="form-group">
								<label>Nome Completo:</label><br>
								<input class="form-control"  type="text" name="nome_completo" required value="<?php echo utf8_encode($valor['nome_completo'])?>">
							</div>
							<div class="form-group row">
								<div class="col-8 pr-1">
									<label>Email:</label><br>
									<input class="form-control" type="" name="email" required value="<?php echo $valor['email']?>">
								</div>
								<div class="col-4 ">
									<label>Data de nascimento:</label><br>
									<input class="form-control"  type="date" name="data_nascimento" placeholder="data_nascimento" required value="<?php echo $valor['data_nascimento']?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-6 pr-1">
									<div class="input-estados">
										<label>Estado:</label>
										<select name="uf" class="form-control">
											<option value="AC" <?php if($estado == "AC" ){echo "selected";}?> >Acre</option>
											<option value="AL" <?php if($estado == "AL" ){echo "selected";}?> >Alagoas</option>
											<option value="AP" <?php if($estado == "AP" ){echo "selected";}?> >Amapá</option>
											<option value="AM" <?php if($estado == "AM" ){echo "selected";}?> >Amazonas</option>
											<option value="BA" <?php if($estado == "BA" ){echo "selected";}?> >Bahia</option>
											<option value="CE" <?php if($estado == "CE" ){echo "selected";}?> >Ceará</option>
											<option value="DF" <?php if($estado == "DF" ){echo "selected";}?> >Distrito Federal</option>
											<option value="ES" <?php if($estado == "ES" ){echo "selected";}?> >Espírito Santo</option>
											<option value="GO" <?php if($estado == "GO" ){echo "selected";}?> >Goiás</option>
											<option value="MA" <?php if($estado == "MA" ){echo "selected";}?> >Maranhão</option>
											<option value="MT" <?php if($estado == "MT" ){echo "selected";}?> >Mato Grosso</option>
											<option value="MS" <?php if($estado == "MS" ){echo "selected";}?> >Mato Grosso do Sul</option>
											<option value="MG" <?php if($estado == "MG" ){echo "selected";}?> >Minas Gerais</option>
											<option value="PA" <?php if($estado == "PA" ){echo "selected";}?> >Pará</option>
											<option value="PB" <?php if($estado == "PB" ){echo "selected";}?> >Paraíba</option>
											<option value="PR" <?php if($estado == "PR" ){echo "selected";}?> >Paraná</option>
											<option value="PE" <?php if($estado == "PE" ){echo "selected";}?> >Pernambuco</option>
											<option value="PI" <?php if($estado == "PI" ){echo "selected";}?> >Piauí</option>
											<option value="RJ" <?php if($estado == "RJ" ){echo "selected";}?> >Rio de Janeiro</option>
											<option value="RN" <?php if($estado == "RN" ){echo "selected";}?> >Rio Grande do Norte</option>
											<option value="RS" <?php if($estado == "RS" ){echo "selected";}?> >Rio Grande do Sul</option>
											<option value="RO" <?php if($estado == "RO" ){echo "selected";}?> >Rondônia</option>
											<option value="RR" <?php if($estado == "RR" ){echo "selected";}?> >Roraima</option>
											<option value="SC" <?php if($estado == "SC" ){echo "selected";}?> >Santa Catarina</option>
											<option value="SP" <?php if($estado == "SP" ){echo "selected";}?> >São Paulo</option>
											<option value="SE" <?php if($estado == "SE" ){echo "selected";}?> >Sergipe</option>
											<option value="TO" <?php if($estado == "TO" ){echo "selected";}?> >Tocantins</option>
										</select>	
									</div>
								</div>
								<div class="col-6">
									<label>Cidade:</label><br>
									<input class="form-control"  type="text" name="cidade" required value="<?php echo $valor['cidade']?>">
								</div>
							</div>
							<div class="form-group">
								<label class="mr-2">Sexo:</label>
								<input type="radio" name="sexo" value="M"  <?php if($sex == "M"){echo "checked";}?> >Masculino
								<input type="radio" name="sexo" value="F" <?php if($sex == "F"){echo "checked";}?>>Feminino
							</div> 

							<div class="btn-formulario div-form">
								<button type="submit">Atualizar</button>
							</div>
						</form>
					<?php } ?>
					</div><!-- box-quiz -->
				</main> <!-- row -->
			</div><!-- col--> 
		</div> <!-- row -->
	</section> <!-- Section -->

<?php include("includes/footer.php")?>