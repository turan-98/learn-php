<!doctype html>
<html lang="pt-br">
	<head> 
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
			'termino' => '2020', 
			'instituicao' => 'Fatec Ferraz de Vasconcelos'),
			array('inicio' => '2018', 
				'termino' => false,
				'ocupacao' => 'Desenvolvimento PHP',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' => false,
				'ocupacao' => 'Inglês',
				'instituicao' => 'Fatec'),
			array('inicio' => '2018',
				'termino' => false,
				'ocupacao' => 'Learn to Porgram in Javascript:Beginner to Pro',
				'instituicao' => 'Udemy'),
			array('inicio' => '2018',
				'termino' => false,
				'ocupacao' => 'Desenvolvimento em Python',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' => false,
				'ocupacao' => 'Desenvolvimento Web com Bootstrap',
				'instituicao' => 'Devmedia'),
			array('inicio' => '2018',
				'termino' => false,
				'ocupacao' => 'jQuery',
				'instituicao' => 'Solo Learn'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'FlexBox o Guia definitivo',
				'instituicao' => 'Udemy'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'Desenvolvimento em Sass',
				'instituicao' => 'Curso livre'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'Response Design',
				'instituicao' => 'Codecademy'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'Design de interfaces com CSS3',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'Introduçao ao Ajax',
				'instituicao' => 'Udacity'),
			array('inicio' => '2018',
				'termino' =>  true,
				'ocupacao' => 'Programação em PHP,HTML5 e CSS',
				'instituicao' => 'Uninove'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'Java',
				'instituicao' => 'TimTec'),
			array('inicio' => '2018',
				'termino' => true,
				'ocupacao' => 'Introdução ao Front-End',
				'instituicao' => 'TimTec'));
$experiencia = array(array('inicio' => 'Dezembro de 2017', 
				'termino' => 'Julho de 2018', 
				'empresa' => 'AlbumGraf', 
				'ocupacao' => 'Estágio (Design Gráfico)'));
$portifolio = array(array('titulo' => 'Accordion de Imagens', 
					'url' => 'http://sammy08.github.io/GitPages/accordion/index.html', 
					'ano' => '2018'),
			array('titulo' => 'weather',
					'url' => 'https://sammy08.github.io/GitPages/weather/index.html', 
					'ano' => '2018'),
			array('titulo' => 'Cards','  
					url' => 'https://sammy08.github.io/GitPages/udacity-cards/index.html',
					'ano' => '2018'),
			array('titulo' =>	'Projeto meu blog',
					'url' =>	'https://sammy08.github.io/GitPages/my-Home/index.html',
					'ano' => '2018'),
			array('titulo' =>	'Form de login',
					'url' =>  'https://sammy08.github.io/GitPages/my-site-home/index.html',
					'ano' => '2018'));
$habilidades = array('hmtl' => 100, 'css' => 100, 'php' => 80, 'javascript' => 80,'Bootstrap' => 70,'jQuery' => 80,
					'Sass' => 100, 'Git' => 50, 'MySql' => 50, 'Design Responsivo' => 95, 'Ruby' => 40, 'Python' => 80,'Linux' => 80);

?>
	<h1><?= $nome ?></h1>
	<p><?= $profissao .'&mdash;'. $especialidade ?></p>
	<h2>Contato</h2>
	<ul>
		<?php foreach($contato as $canal => $url): ?>
			<!--usamos chaves de array para pegar o link do canal-->
			<li><a href="<?= $url ?>"><?= $canal ?></a></li>
		<?php endforeach; ?>
	</ul>
	<h2>Formação</h2>
		<?php foreach($formacao as $curso): ?>
			<h3><?= $curso['ocupacao'] ?></h3>
			<p><?= $curso['inicio'] . ' &mdash;' . $curso['termino'] .''. $curso['instituicao']?></p>
		<?php endforeach; ?>
</body>
</html>


