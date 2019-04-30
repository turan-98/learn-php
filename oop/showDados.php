<?php
require_once 'classe.php';
$nome = $_POST['nome'];
$aluno = new aluno();
$aluno->setNome($nome);

/*
	if (isset($_POST['nome'] && !empty($_POST['nome']) {
			$nome = $_POST['nome'];
	} else {
			$nome = "NÃO TEM NADA!!!";
	}
*/
//echo $nome;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>FormularioPHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="card carding">
		<div class="card-body">
			/*  <h2><?php echo $nome; ?></h2> */
			<h1 class="card-title text-center">Parabéns !!!</h1>
			<h4>Aluno(a) <?=$aluno->getNome();?></h4> <p>esta matriculado no curso </p>
			<h4><?=$aluno->setCurso($_POST['selectCurso']);?></h4>
			<p>No periodo </p>
			<h4><?=$aluno->setHorario($_POST['turnoCurso']);?></h4>
	</div>
</div>
</body>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script  src="js/index.js"></script>
</html>
