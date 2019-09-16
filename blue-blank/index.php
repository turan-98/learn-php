<?php 
require_once 'init.php';
//abre conexão
$PDO = db_connect();

// a função count do sql lista todos os registros do bd
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";
//sql para selecionar os registros
$sql = "SELECT id, name, email, gender, birthdate FROM users ORDER BY name ASC";


// conta o total dos registros
$stmt_count = $PDO->prepare($sql_count);
// '->' serve para chamar um método o variável
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

//seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en" >
<?php 
  require_once('head.php');
?>
<body>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Cadastro - ULTIMATE PHP</title>
    </head>
    <main class="o-main">
    <h1 class="m-2">Blue Bank</h1>
        <div class="card m-4 p-3">
            <p class="text-light"><a href="form-add.php">Adicionar Usuário</a></p>
            <h2>Lista de Usuários</h2>
            <p>Total de usuários: <?php echo $total ?></p>
        </div> 
        <?php if ($total > 0): ?>
        <table class="table p-3" >
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th>Email</th>
                    <th>Gênero</th>
                    <th>Data de Nascimento</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <td scope="row"><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo ($user['gender'] == 'm') ? 'Masculino' : 'Feminino' ?></td>
                    <td><?php echo dateConvert($user['birthdate']) ?></td>
                    <td><?php echo calculateAge($user['birthdate']) ?> anos</td>
                    <td>
                    <a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum usuário registrado</p>
    <?php endif; ?>
    </main>
</body>
</html>