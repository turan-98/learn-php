<?php
require_once 'classe.php';
$aluno = new aluno();
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
			<h1 class="card-title text-center">Parabéns !!!</h1>
			<h4>Aluno(a) <?=$aluno->nome;?></h4> <p>esta matriculado no curso </p>
			<h4><?=$aluno->curso;?></h4>
			<p>No periodo </p>
			<h4><?=$aluno->horario;?></h4>
	</div>
</div>
</body>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script  src="js/index.js"></script>
</html>