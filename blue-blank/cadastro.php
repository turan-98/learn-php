<!DOCTYPE html>
<html lang="en" >
<link rel="stylesheet" href="view/css/base/style.css">

<?php 
  require_once('head.php');
?>
<body>
<!-- partial:index.partial.html -->
<header class="o-header">
  <nav class="sidebar">
    <i class="fas fa-bars"></i>
    <ul class="ul-item">
      <li class="li-item"><figure class="logo-hero"><i class="fab fa-buysellads"></i>
      <small>Blue Bank</small>
    </figure></li>
      <li class="li-item"><a href="" class="link">Saldo</a></li>
      <li class="li-item"><a href="" class="link">Transações</a></li>
    </ul>
  </nav>
</header>
<main class="o-main">
  <form action="" class="form-container">
    <figure class="logo-hero">
      <i class="fab fa-buysellads"></i>
      <small>Blue Bank</small>
    </figure>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Campo_Nome">Nome</label>
        <input type="text" class="form-control" placeholder="Bruce Wayne" required>
      </div>
      <div class="form-group col-md-6">
        <label for="Campo_Email">Email</label>
        <input type="text" class="form-control" placeholder="batman@batcaverna.com" required name="email">
      </div>
    </div>
    <div class="form-group">
      <label for="Campo_CPF">CPF</label>
      <input type="text" class="form-control" placeholder="999-999-999-99" required id="cpf" name="cpf">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Campo_Senha">Senha</label>
        <input type="password" class="form-control" placeholder="Sua senha" name="senha">
      </div>
      <div class="form-group col-md-6">
        <label for="Campo_Senha">Confirmar Senha</label>
        <input type="password" class="form-control" placeholder="Repetir senha">
      </div>
    </div>
    <button type="submit"  class="btn btn-outline-light" id="btn">Login</button>
  </form>
</main>
<footer class="o-footer"></footer>
<!-- partial -->
</body>
<?php 
  require_once('footer.php');
?>
</html>