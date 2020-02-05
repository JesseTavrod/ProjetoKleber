<?php include('includes/header.php');?>

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
			<div class="doencas">

				<div class="row">
					<div class="cont-transtornos">
										<?php 
					if(!empty($_SESSION['usuario'])){
						echo "<div class='sessao_name'>".'Bem vindo !! '.utf8_encode($_SESSION['usuario'])."</div>";
					}else{
						echo "";
					}
				?>
						<h1>Especialistas</h1>
				
						<div class="tipos_sintomas row mt-4">
						<div class="col-6">
							<ul>
							<h2 class="text-center mb-2"><b>Tipos de especialistas:</b></h2>
								<li><a href="#Coaching"><span> >> </span>Coaching</a></li>
								<li><a href="#Neuro"><span> >> </span>Neuropsicólogos</a></li>
								<li><a href="#PCli"><span> >> </span>Psicólogos Clínicos</a></li>
								<li><a href="#PCri"><span> >> </span>Psicólogos Criminais</a></li>	
								<li><a href="#PEdu"><span> >> </span>Psicólogos Educacionais</a></li>	
								<li><a href="#PEsp"><span> >> </span>Psicólogos Esportivos</a></li>	
								<li><a href="#PSoc"><span> >> </span>Psicólogos Sociais</a></li>	
								<li><a href="#PTrab"><span> >> </span>Psicólogos do trabalho</a></li>	
								<li><a href="#Psic"><span> >> </span>Psicoterapeutas</a></li>	
							</ul>
						</div>
						<div class="col-6">
							<img class="img-fluid" src="images/especialistas.jpg">
							
						</div>

						<h2 id="Coaching">Coaching<span><a href="index.php?especialidade=coaching">(ver medicos)</a></span></h2>
						<p>Os coaches podem ser psicólogos e são responsáveis por fazer com que cada pessoa encontre os seus objetivos, ajudando-a a alcançá-los. Eles se adaptam a cada indivíduo e funcionam como um “conselheiro” para que encontre o seu caminho.</p>
						<p>Existem outros campos de especialização? Claro que sim, existe também a psicologia canina, a psicologia aplicada aos jogos, ao marketing, à nutrição… definitivamente, existe um psicólogo para cada uma das nossas necessidades mentais.</p>

						<h2 id="Neuro">Neuropsicólogos<span><a href="index.php?especialidade=neuropsicologos">(ver medicos)</a></span></h2>
						<div class="row">
							<div class="col-4 "><img class="img-fluid" src="images/labirinto.jpg"></div>
							<div class="col-8 pl-3">
								<p>Normalmente são pesquisadores, embora muitas vezes desenvolvam suas atividades profissionais no campo da reabilitação cognitiva, comportamental e emocional de pacientes com danos cerebrais. Eles também são especialistas no diagnóstico precoce e tratamento das demências.</p>
								<p>Portanto, sua área de especialização é clínica e trabalha no espaço entre a neurologia e a psicologia. Seu foco é o estudo de possíveis alterações que acometem o sistema nervoso central e como isso afeta a vida do paciente.</p>
								<p>Essas alterações podem ser causadas por diferentes agentes, desde um traumatismo, acidente vascular cerebral ou tumor. Seus maiores aliados são as técnicas de neuroimagem e o seu trabalho baseia-se na relação entre o nosso cérebro físico e a mente.</p>
							</div>
							
						</div>

						<h2 id="PCli">Psicólogos Clínicos<span><a href="index.php?especialidade=clinicos">(ver medicos)</a></span></h2>
						<p>Os psicólogos clínicos são especializados em distúrbios mentais e emocionais, cujas crises podem ser de curto prazo ou durar muito tempo. Eles estão preparados para lidar com qualquer problema que se apresente, mas também precisam se especializar.</p>
						<p>
						É por isso que encontramos psicólogos clínicos especializados em transtornos de depressão, compulsão alimentar, transtornos de personalidade, abuso de drogas, questões relacionadas a crianças e adolescentes, etc.</p>

						<h2 id="PCri">Psicólogos Criminais<span><a href="index.php?especialidade=criminais">(ver medicos)</a></span></h2>
						<p>Os psicólogos criminais são especializados em questões criminais, por isso a sua experiência é muito importante nos tribunais. De alguma forma, podem orientar o juiz a dar uma sentença justa, contra ou a favor do réu.</p>
						<p>O seu trabalho é descobrir o que levou o indivíduo a cometer determinado crime ou os crimes pelos quais é acusado. O estudo da sua personalidade permitirá projetar um tratamento adequado para o acusado.</p>

						<h2 id="PEdu">Psicólogos Educacionais<span><a href="index.php?especialidade=educacionais">(ver medicos)</a></span></h2>
						<p>A psicologia educacional se concentra nos processos de aprendizagem das pessoas. Esses psicólogos muitas vezes trabalham em escolas como conselheiros ou ajudando qualquer criança que apresente algum distúrbio de aprendizagem.</p>
						<p>Infelizmente, a sua presença nas escolas públicas é menos frequente do que o desejável. Muitas vezes, eles têm pouco tempo para atender muitas crianças que precisam de ajuda. Mas, mesmo assim, a sua ajuda é fundamental. Em muitos casos, a sua intervenção é importante, porque a missão da psicologia educacional não é somente fazer com que a criança aprenda, mas ajudá-la a adquirir os recursos necessários e úteis para compensar qualquer limitação.</p>

						<h2 id="PEsp">Psicólogos Esportivos<span><a href="index.php?especialidade=esportivos">(ver medicos)</a></span></h2>
						<p>Os psicólogos esportivos são responsáveis por trabalhar com os atletas, com o treinador e a organização de toda a equipe. Tudo isso para melhorar o rendimento da equipe, aumentar a sua motivação, aumentar a eficiência e gerenciar o estresse.</p>
						<p>Ele lhe ajudará a ter mais confiança em si mesmo para aumentar o seu rendimento até o limite. Além disso, favorece o aumento da autoestima de todo o grupo e mostra que os limites só existem dentro da nossa própria mente.</p>

						<h2 id="PSoc">Psicólogos Sociais<span><a href="index.php?especialidade=sociais">(ver medicos)</a></span></h2>
						<p>Os psicólogos sociais se especializam em tudo o que se relaciona com o comportamento humano e os fatores psicológicos que podem afetar o seu ambiente social. Seu campo de conhecimento engloba desde os relacionamentos interpessoais até outros temas como a cultura, os preconceitos ou atitudes que temos para com os outros.</p>
						<p>Eles são especializados em criar grupos e programas que ajudam os mais desfavorecidos ou as minorias. Graças aos psicólogos sociais, muitas pessoas conseguem se reintegrar na sociedade.</p>

						<h2 id="PTrab">Psicólogos do trabalho:<span><a href="index.php?especialidade=trabalho">(ver medicos)</a></span></h2>
						<p>Existem psicólogos especializados no campo do trabalho. Encontramos esses profissionais nos departamentos de recrutamento das empresas, na formação, saúde e desenvolvimento profissional dos funcionários. Às vezes, também trabalham nos Departamentos de Recursos Humanos.</p>
						<p>Eles são particularmente importantes, uma vez que têm um grande conhecimento sobre motivação e liderança. Eles podem ajudar a melhorar o desempenho e a satisfação dos trabalhadores.</p>

						<h2 id="Psic">Psicoterapeutas<span><a href="index.php?especialidade=psicoterapeutas">(ver medicos)</a></span></h2>
						Os psicoterapeutas são responsáveis pela prestação de apoio psicológico e ensinar uma variedade de técnicas para melhorar a qualidade de vida dos pacientes. Obviamente, os problemas que os psicoterapeutas tratam não são tão graves como os que tratam os psicólogos clínicos.
						<p>Qual é o foco do psicoterapeuta? Os problemas cotidianos, os conflitos nos relacionamentos interpessoais ou problemas emocionais que dificultam os relacionamentos. Além disso, tratam e gerenciam as situações de estresse e ansiedade que podem afetar os seus relacionamentos e a vida cotidiana.</p>

					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('includes/footer.php');?>