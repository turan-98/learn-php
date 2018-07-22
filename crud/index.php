<!DOCTYPE html>
<html>
<head>
	<title>Dev PHP</title>
</head>
<body>
	<?php 
		//conexão com o db
		$link = mysqli_connect('localhost:3306','root','');

		//testando conexão
		if(!$link){
			die('Não foi possivel conectar'.mysqli_error());
		}
		//selecionando o banco 
		 mysqli_select_db($link, "teste");
	?>
	<?php  require_once("header.php"); ?>
	<h1>
		<?php
			$ola_mundo = "Hello Word";
            echo($ola_mundo);
		?>
	</h1>		
	<ul>
		<?php
			$query =$link->escape_string("SELECT * FROM `filmes` ");
			$result = $link->query($query);

			while($filme = $result->fetch_object()){
				echo("<li>".$filme ->nome." (".$filme ->ano. ") </li>");
			}
		?>
	</ul>
</body>
<?php 
	require_once("footer.php");
	//fechando conexão
	mysqli_close($link);
 ?>
