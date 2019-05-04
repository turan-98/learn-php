<?php
require_once "index.php";
$heroi = new Heroi;
$heroi->setNome("Superman");
echo "O {$heroi->getNome()} é muito forte";
?>
