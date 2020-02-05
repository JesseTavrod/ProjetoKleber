
<!-- Menu lateral-->
		<div class="nav-login">
			<ul>
				<?php
					if(empty($_SESSION['usuario'])){
						echo "<li><a href='login.php'> Login </a></li>
							  <li><a href='cadastro.php'> Cadastro </a></li>";
					}else{
						echo "<li><a href='sair.php'>Sair</a></li>
							   <li><a href='alterar_dados.php'>Alterar Dados</a></li>
						";
					}
				?>
				
			</ul>
		</div>

		
		<nav class="">
			<ul class="nav flex-column">

		  		<li class="nav-item menu-itens" >
		   	 		<a class="nav-link dropdown-toggle title-nav" href="#">Transtornos/Médicos</a>
		   	 		<div class="menu-escondido">
		   	 			<ul>
		   	 				<li><a href="depressao.php"> Depressão</a></li>
		   	 				<li><a href="especialistas.php">Tipos de Especialistas</a></li>
		   	 			</ul>
		   	 		</div>		
		  		</li>

		  		<li class="nav-item menu-itens">
		    		<a class="nav-link dropdown-toggle title-nav" href="#">Especialistas</a>
		    		<div class="menu-escondido">
		   	 			<ul>
		   	 				<li><a href="index.php?especialidade=clinicos">Clínicos</a></li>
		   	 				<li><a href="index.php?especialidade=psicoterapeutas">Psicoterapeutas</a></li>
		   	 				<li><a href="index.php?especialidade=educacionais">Educacionais</a></li>
		   	 				<li><a href="index.php?especialidade=neuropsicologos">Neuropsicólogos</a></li>
							<li><a href="index.php?especialidade=sociais">Sociais</a></li>
							<li><a href="index.php?especialidade=trabalho">trabalho</a></li>
							<li><a href="index.php?especialidade=criminais">Criminais</a></li>
							<li><a href="index.php?especialidade=esportivos">Esportivos</a></li>
							<li><a href="index.php?especialidade=Coaching">Coaching</a></li>
						</ul>
		   	 		</div>	
		  		</li>
				<li class="nav-item menu-itens">
				    <a class="nav-link  dropdown-toggle title-nav" href="#">Parcerias</a>
				    <div class="menu-escondido">
		   	 			<ul>
		   	 				<li><a href=""> YOUTUBE</a></li>
		   	 				<li><a href="">	GOOGLE</a></li>
		   	 				<li><a href="">	MYCASAMYLIFE</a></li>
		   	 			</ul>
		   	 		</div>	
				</li>
				<li class="nav-item">
				    <a class="nav-link title-nav" href="chat.php">Chat</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link title-nav" href="quiz.php">Quiz</a>
				</li>
				<li class="nav-item"><a href="sobre.php" class="nav-link title-nav">Sobre nós</a></li>
				<li class="nav-item">
				    <a class="nav-link title-nav" href="#">Ajuda</a>
				</li>
			</ul>	
		</nav>

<!-- Menu lateral-->