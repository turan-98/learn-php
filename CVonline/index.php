<!doctype html>
<html lang="pt-br">
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
		<?php $title = 'Samuel Santana';  ?>
		<meta charset="utf-8">
		<title><?= $title ?></title>
	</head>
<body>
<?php
$nome = 'Samuel Santana';
$profissao = 'Estudante';
$especialidade = 'Programador Front-end';
$contato = array('Email' => 'santanasamuel08@gmail.com', 
				'Linkedin' => 'https://www.linkedin.com/in/samuel-santana-15780411b/', 
				'GitHub' => 'https://github.com/sammy08');
$formacao = array(array('inicio' => '2018', 
			'termino' => 'Ano de conclusão 2020',
			'ocupacao' => 'Analise e Desenvolvimento de Sistemas', 
			'instituicao' => 'Fatec Ferraz de Vasconcelos'),
			array('inicio' => '2018', 
				'termino' =>  false,
				'ocupacao' => 'Desenvolvimento PHP',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' =>  false,
				'ocupacao' => 'Inglês',
				'instituicao' => 'Fatec'),
			array('inicio' => '2018',
				'termino' =>  false,
				'ocupacao' => 'Learn to Porgram in Javascript:Beginner to Pro',
				'instituicao' => 'Udemy'),
			array('inicio' => '2018',
				'termino' =>  false,
				'ocupacao' => 'Desenvolvimento em Python',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' =>  false,
				'ocupacao' => 'Desenvolvimento Web com Bootstrap',
				'instituicao' => 'Devmedia'),
			array('inicio' => '2018',
				'termino' =>  false,
				'ocupacao' => 'jQuery',
				'instituicao' => 'Solo Learn'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'FlexBox o Guia definitivo',
				'instituicao' => 'Udemy'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'Desenvolvimento em Sass',
				'instituicao' => 'Curso livre'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'Response Design',
				'instituicao' => 'Codecademy'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'Design de interfaces com CSS3',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'Introduçao ao Ajax',
				'instituicao' => 'Udacity'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'Programação em PHP,HTML5 e CSS',
				'instituicao' => 'Uninove'),
			array('inicio' => '2018',
				'termino' =>   true,
				'ocupacao' => 'Java',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' =>  true,
				'ocupacao' => 'Introdução ao Front-End',
				'instituicao' => 'TimTec'));
$experiencia = array(array('inicio' => 'Dezembro de 2017', 
				'termino' => 'Julho de 2018', 
				'empresa' => 'AlbumGraf', 
				'ocupacao' => 'Estágio (Design Gráfico)'));
$portifolio = array(array('titulo' => 'Accordion de Imagens',
					'foto' => 'img/accordion.png', 
					'url' => 'http://sammy08.github.io/GitPages/accordion/index.html', 
					'ano' => '2018'),
			array('titulo' => 'weather',
					'foto' => 'img/weather.png',
					'url' => 'https://sammy08.github.io/GitPages/weather/index.html', 
					'ano' => '2018'),
			array('titulo' => 'Cards',
					'foto' => 'img/udacity.png',
					'url' => 'https://sammy08.github.io/GitPages/udacity-cards/index.html',
					'ano' => '2018'),
			array('titulo' =>'Projeto meu blog',
					'foto' => 'img/my-Home.png',
					'url' =>'https://sammy08.github.io/GitPages/my-Home/index.html',
					'ano' => '2018'),
			array('titulo' =>'Form de login',
					'foto' => 'img/my-home-site.png',
					'url' =>  'https://sammy08.github.io/GitPages/my-site-home/index.html',
					'ano' => '2018'));
$habilidades = array('hmtl' => 100, 'css' => 100, 'php' => 80, 'javascript' => 80,'Bootstrap' => 70,'jQuery' => 80,
					'Sass' => 100, 'Git' => 50, 'MySql' => 50, 'Design Responsivo' => 95, 'Ruby' => 40, 'Python' => 80,'Linux' => 80);
?>
	<main class="container">
		<section class="section-item">
			<figure class="img-container">
				<img src="img/samuca.jpg" alt="Samuel Santana estudante de ADS" class="img-item">
			</figure>
			<h1 class="section-h1"><?= $nome ?></h1>
			<p 	class="section-paragraph"><?= $profissao .'  -  '. $especialidade ?></p>
			<h2 class="section-h2">Contato</h2>
			<ul>
				<?php foreach($contato as $canal => $url): ?>
				<!--usamos chaves de array para pegar o link do canal-->
				<li><a href="<?= $url ?>"><?= $canal ?></a></li>
				<?php endforeach; ?>
			</ul>
		</section>
		<section class="section-item formacao">
			<h1 class="section-h1">Formação</h1>
				<?php foreach($formacao as $curso): ?>
				<h2 class="section-h2"><?=$curso['ocupacao'] ?></h3>
				<?php 
					if(!$curso['termino']){
						$curso['termino'] = 'Cursando';
					}else{
						$curso['termino'] = 'Concluido';
					}
				 ?>
				<p class="section-paragraph">
					<?=$curso['inicio'] . '  -  ' . $curso['instituicao']  ."</br>".  $curso['termino']?></p>
				<?php endforeach; ?>
		</section>
		<section class="section-item">
			<h1 class="section-h1">Experiência</h1>
				<?php foreach($experiencia as $trabalho): ?>
					<h2 class="section-h2"><?=$trabalho['empresa'] ?></h2>
					<p class="section-paragraph">
					<?= $trabalho['ocupacao'] .'</br>' .$trabalho['inicio'] . "  -  ". $trabalho['termino'] ?>
					</p>
				<?php endforeach; ?>
		</section>
		<section class="section-item">
			<h1 class="section-h1">Portifolio</h1>
				<?php foreach ($portifolio as $item): ?>
					<h2 class="section-h2"><?=$item['titulo'] .'  -   '. $item['ano'] .'</br>' ?></h2>
					<?php if(!empty($item['foto'])):  ?>
						<figure class="container-img">
							<img src="<?=$item['foto'] ?>" alt="" class="o-img">
						</figure>
						<div class="container-hr">
							<hr>
						</div>
					<?php endif; ?>
					<?php if(!empty($item['url'])): ?>
						<a href="<?=$item['url'] ?>" class="section-link"></a>
					<?php endif; ?>
				<?php endforeach; ?>
		</section>
		<section class="section-item">
			<h1 class="section-h1">Proficiências e Habilidades</h1>
			<h2 class="section-h2">
				<?php foreach($habilidades as $habilidades_items => $value): ?>
			</h2>
			<p class="section-paragraph"><?= $habilidades_items .'  :  '. $value .'%' ?></p>
				<?php endforeach; ?>
		</section>
	</main>
</body>
</html>


