<!DOCTYPE html>
<html>
<head>
<title>Notas e Alunos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="main.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="container">
    <h1 class="jumboTron text-center">Notas e Alunos</h1>
    <?php
        $caderno_de_notas = array(
            'Alice' => 9,
            'Bernardo' => 8.8,
            'Carmen' => 7.3,
            'Bigode' => 4.5,
            'Fernanda' => 10,
            'Luiz' => 9.5,
            'Carlos' => 3,
            'Samuel' => 12,
            'Pedro' => 7.5,
            'Diogo' => 6
        );
        foreach($caderno_de_notas as $aluno => $nota){
            if($nota < 5){
                unset($caderno_de_notas[$aluno]);
            }
        }

    ?>
    <?php foreach($caderno_de_notas as $aluno => $nota):?>
        <div class="row">
            <div class="col-md-3">
                <?=$aluno?>
            </div>
            <div class="col-md-3">
                <?=$nota?>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>