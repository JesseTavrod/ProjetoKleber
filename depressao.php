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

				<div class="procurar-medico"><a href="especialistas.php">Procurar Medicos</a></div>

				<div class="row">
					<div class="cont-transtornos">
						<?php 
							if(!empty($_SESSION['usuario'])){
								echo "<div class='sessao_name'>".'Bem vindo !! '.utf8_encode($_SESSION['usuario'])."</div>";
							}else{
								echo "";
							}
						?>
						<h1>Depressão</h1>
						<p><b>Depressão</b> é um Distúrbio mental caracterizado por depressão persistente ou perda de interesse em atividades, prejudicando significativamente o dia a dia.</p>
						<p><b>Suas possíveis causas:</b> As causas possíveis incluem uma combinação de origens biológicas, psicológicas e sociais de angústia. Cada vez mais, as pesquisas sugerem que esses fatores podem causar mudanças na função cerebral, incluindo alteração na atividade de determinados circuitos neuronais no cérebro.</p>
						<p><b>Quais são os sintomas:</b> A sensação persistente de tristeza ou perda de interesse que caracteriza a depressão pode levar a uma variedade de sintomas físicos e comportamentais. Estes podem incluir alterações no sono, apetite, nível de energia, concentração, comportamento diário ou autoestima. A depressão também pode ser associada a pensamentos suicidas.</p>
						<p><b>Tratamento:</b> A base do tratamento geralmente inclui medicamentos, psicoterapia ou uma combinação dos dois. Cada vez mais, as pesquisas sugerem que esses tratamentos podem normalizar alterações cerebrais associadas à depressão.</p>
						
						<div class="tipos_sintomas row mt-4">
						<div class="col-6">

							<ul><h2 class="text-center mb-5"><b>Tipos de Depressão:</b></h2>
								<li><a href="#TDM"><span> >> </span> Transtorno Depressivo Maior</a></li>
								<li><a href="#TB"><span> >> </span>Depressão Bipolar</a></li>
								<li><a href="#DIS"><span> >> </span>Distimia (Transtorno depressivo persistente)</a></li>	
								<li><a href="#DPP"><span> >> </span>Depressão Pós-Parto</a></li>	
								<li><a href="#TDP"><span> >> </span>Transtorno disfórico pré-menstrual</a></li>	
								<li><a href="#TAS"><span> >> </span>Transtorno Afetivo Sazonal (SAD)</a></li>	
							</ul>
						</div>
						<div class="col-6">
							<img class="img-fluid" src="images/depressao.jpg">
							
						</div>
							
						</div>
												
						<h2 class="mt-4" id="TDM">Transtorno Depressivo Maior</h2>
						<p><b>Descrição:</b> Distúrbio mental caracterizado por depressão persistente ou perda de interesse em atividades, prejudicando significativamente o dia a dia.</p>
		 				<p>É a mais comum de todas as depressões, caracteriza-se por um quadro de humor deprimido, perde-se o interesse e o prazer em fazer as coisas que lhe agradavam, a energia é algo que também se esvai, fraqueza, e em casos mais graves, sofrimento, melancolia e incapacidade temporária devido a essa falta de interesse e energia.</p>
						<p><b>As pessoas podem ter:</b></p>
						<p><b>No humor:</b> ansiedade, apatia, culpa, descontentamento geral, desesperança, mudanças de humor, perda de interesse, perda de interesse ou prazer nas atividades, solidão, tristeza, tédio ou sofrimento emocional.</p>
						<p><b>No comportamento:</b> agitação, automutilação, choro excessivo, irritabilidade ou isolamento social.</p>
						<p><b>No sono:</b> despertar precoce, excesso de sonolência, insônia ou sono agitado.</p>
						<p><b>No corpo:</b> fadiga, fome excessiva ou inquietação.</p>
						<p><b>Na cognição:</b> falta de concentração, lentidão durante atividades ou pensamentos suicidas.</p>
						<p><b>No peso:</b> ganho de peso ou perda de peso.</p>
						<p><b>Também é comum:</b> depressão, abuso de substâncias, falta de apetite ou repetição incessante de pensamentos.</p>

						<h2 id="TB">Depressão Bipolar</h2>
						<p><b>Descrição:</b> Distúrbio associado a alterações de humor que vão da depressão a episódios de obsessão.</p>
						<p>A causa exata do distúrbio bipolar não é conhecida, mas acredita-se que seja influenciado por uma combinação de fatores como genética, ambiente, estrutura e química do cérebro.</p>
						<p>Os episódios maníacos incluem sintomas como euforia, dificuldade para dormir e perda de contato com a realidade. Já os episódios depressivos são caracterizados por falta de energia e motivação, além de perda de interesse nas atividades cotidianas. </p>
						<p>Os episódios de alteração de humor podem durar dias ou meses e também podem estar associados a pensamentos suicidas.</p>
						<p>O tratamento costuma ser necessário por toda a vida e geralmente envolve uma combinação de medicamentos e psicoterapia.</p>
		 
						<p><b>As pessoas podem ter:</b></p>
						<p><b>No humor:</b> ansiedade, apatia, apreensão, culpa, descontentamento geral, desesperança, euforia, mudanças de humor, perda de interesse, perda de interesse ou prazer nas atividades, raiva, tristeza ou entusiasmo.</p>
						<p><b>No comportamento:</b> agitação, agressão, automutilação, choro, comportamentos de risco, excesso de desejo sexual, hiperatividade, impulsividade, inquietação ou irritabilidade.</p>
						<p>Na cognição: delírio, falta de concentração, lentidão durante atividades, pensamento acelerado, pensamentos indesejados ou falsa superioridade.</p>
						<p>Sintomas psicológicos: depressão, depressão agitada, episódio maníaco ou paranoia.</p>
						<p><b>No sono:</b> dificuldade em adormecer ou excesso de sonolência.</p>
						<p><b>No peso:</b> ganho de peso ou perda de peso.</p>
						<p><b>Também é comum:</b> fadiga ou fala rápida e frenética.</p>
		 
						<h2 id="DIS">Distimia (Transtorno depressivo persistente)</h2>
						<p><b>Descrição:</b> Depressão branda, porém de duração longa.</p>
						<p>A distimia é definida como uma tristeza que ocorre durante pelo menos dois anos, juntamente com pelo menos dois outros sintomas da depressão.</p>
						<p>Alguns exemplos de sintomas incluem perda de interesse em atividades normais, falta de esperança, baixa autoestima, falta de apetite, baixa energia, alterações no sono e falta de concentração.</p>
						<p>Os tratamentos incluem medicamentos e psicoterapia.</p>
						<p><b>As pessoas podem ter:</b></p>
						<p><b>No humor:</b> tristeza, culpa, descontentamento geral, desesperança, perda de interesse ou raiva.</p>
						<p><b>No corpo:</b> fadiga, fome excessiva ou perda de apetite.</p>
						<p><p>No sono:</p> excesso de sonolência ou insônia.</p>
						<p><b>Na cognição:</b> falta de concentração ou lentidão durante atividades</p>
						<p><b>Também é comum:</b> baixa autoestima, indecisão ou irritabilidade.</p>
		 
						<h2 id="DPP">Depressão Pós-Parto</h2>

						<p><b>Descrição:</b> Depressão que ocorre após o parto.</p>
						<p>Mulheres que desenvolvem depressão pós-parto possuem maior risco de desenvolver depressão em um outro momento da vida.
						Os sintomas podem incluir insônia, perda de apetite, irritabilidade intensa e dificuldade de criar um vínculo com o bebê.</p>
						<p>Se não for tratada, a depressão pode durar vários meses. O tratamento inclui terapia, antidepressivos ou tratamento de reposição hormonal.</p>
						<p><b>As pessoas podem ter:</b></p>
						<p><b>No humor:</b> ansiedade, ataques de pânico, culpa, descontentamento geral, desesperança, mudanças de humor, perda de interesse, perda de interesse ou prazer nas atividades, raiva, solidão ou tristeza.</p>
						No comportamento: choro, inquietação, irritabilidade ou isolamento social
						No sono: insônia, pesadelos ou privação de sono
						Na cognição: falta de concentração, pensamentos indesejados ou transtorno de pensamento
						No corpo: fadiga ou perda de apetite
						Sintomas psicológicos: depressão ou medo
						No peso: ganho de peso ou perda de peso
						Também é comum: repetição incessante de pensamentos
							
						<h2 id="TDP">Transtorno disfórico pré-menstrual</h2>

						<p>Descrição: Extensão grave e às vezes incapacitante da síndrome pré-menstrual.</p>
						<p>O Transtorno disfórico pré-menstrual (TDPM) causa mudanças extremas de humor que podem afetar o trabalho e prejudicar relacionamentos. Os sintomas incluem extrema tristeza, desânimo, irritabilidade ou raiva, além dos sintomas comuns da síndrome pré-menstrual, como sensibilidade e inchaço nas mamas.</p>
						<p>Medicamentos e mudanças no estilo de vida podem ajudar.</p> 
						<p><b>As pessoas podem ter:</b></p>
						<p><b>Dores locais:</b> mama, nos músculos ou pélvis.</p>
						<p><b>No humor:</b> mudanças de humor, tristeza, ansiedade, ataques de pânico, desesperança ou raiva.</p>
						<p><b>No sono:</b> excesso de sonolência ou insônia.</p>
						<p><b>No comportamento:</b> irritabilidade ou choro.</p>
						<p><b>Também é comum:</b> alta sensibilidade à rejeição, barriga inchada, depressão, desejo de comida, diminuição do interesse por atividades corriqueiras, disfunção econômica ou social causada por sintomas, dor de cabeça, fadiga, falta de concentração, ganho de peso, mudança no apetite, pensamento autocrítico, retenção de líquido ou sentir-se esmagado.</p>

						<h2 id="TAS">Transtorno Afetivo Sazonal (SAD)</h2>

						<p><b>Descrição:</b> Transtorno de humor caracterizado por depressão que ocorre na mesma época do ano.</p>
						<p>O Transtorno afetivo sazonal ocorre em climas nos quais há menos luz solar em algumas épocas do ano.</p>
						<p>Os sintomas incluem fadiga, depressão, desânimo e isolamento social.</p>
						<p>O tratamento inclui terapia de luz (fototerapia), psicoterapia e medicamentos.</p>
						 
						<p><b>As pessoas podem ter:</b></p>
						<p><b>No humor:</b> ansiedade, apatia, descontentamento geral, desesperança, mudanças de humor, perda de interesse, perda de interesse ou prazer nas atividades, raiva, solidão ou tristeza.</p>
						<p><b>No comportamento:</b> choro, inquietação, irritabilidade ou isolamento social.</p>
						<p><b>No sono:</b> excesso de sonolência, insônia ou privação de sono.</p>
						<p><b>No corpo:</b> alterações do apetite ou fadiga.</p>
						<p><b>No peso:</b> ganho de peso ou perda de peso.</p>
						<p><b>Também é comum:</b> depressão, falta de concentração ou repetição incessante de pensamentos.</p>
						 
						<h2>Especificadores</h2>
						<p>Depressão maior e transtorno depressivo persistente podem incluir um ou mais especificadores que descrevem manifestações adicionais durante um episódio depressivo:</p>
						<p><b>Sofrimento ansioso:</b> pacientes se sentem tensos e extraordinariamente inquietos; eles têm dificuldade de concentração porque se preocupam ou temem que algo terrível pode acontecer, ou eles sentem que podem perder o controle deles mesmos.</p>
						<p><b>Características mistas:</b> pacientes também têm ≥ 3 sintomas de mania ou hipomaníacos (p. ex., humor elevado, grandiosidade, maior loquacidade do que o habitual, fuga de ideias, diminuição do sono).</p>
						<p><b>Melancólico:</b>
						pacientes perderam o prazer em quase todas as atividades ou não respondem a estímulos geralmente agradáveis. Eles podem estar desanimados ou desesperados, sentir culpa excessiva ou inapropriada, ter despertar matutino precoce, agitação ou retardo psicomotor marcantes e anorexia ou perda de peso significante.</p>
						<p><b>Atípico:</b> o humor dos pacientes melhora temporariamente em resposta a eventos positivos (p. ex., visita de filhos).</p>
						<p><b>seguintes:</b> reação exagerada a críticas ou rejeição percebida, sentimentos de paralisia de chumbo (sensação pesada ou de peso, geralmente nas extremidades), ganho de peso ou aumento de apetite e hipersonia.</p>
						<p><b>Psicótico:</b> pacientes têm delírios e/ou alucinações. Delírios muitas vezes envolvendo ter cometido pecados ou crimes imperdoáveis, de portar transtornos incuráveis ou vergonhosos ou de ser perseguido. Alucinações podem ser auditivas (p. ex., ouvir vozes acusatórias ou condenatórias) ou visuais. Se apenas vozes forem descritas, deve-se ter consideração especial se as vozes representam alucinações verdadeiras.</p>
						<p><b>Catatônico:</b> pacientes têm retardo psicomotor grave, envolvem-se em atividade excessiva sem propósito e/ou se isolam; alguns pacientes fazem caretas e imitam fala (ecolalia) ou movimento (ecopraxia).</p>
						<p><b>Início no Peri-parto:</b> o início ocorre durante a gestação ou até a quarta semana após o parto. Características psicóticas podem estar presentes; infanticídio é frequentemente associado a episódios psicóticos envolvendo alucinações de comando para matar o bebê ou delírios de que o recém-nascido está possuído.</p>
						<p><b>Padrão sazonal:</b> os episódios ocorrem em um determinado momento do ano, na maioria das vezes no outono ou inverno.</p>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('includes/footer.php');?>