<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FormularioPHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form action="showDados.php" method="POST">
    <div class="form-group row justify-content-center">
        <div class="col-md-2"></div>
          <label for="InputNome" class="col-md-1 col-form-label lbl">Nome</label>
        <div class="col-md-8">
          <input class="form-control form-contol-sm inputForm" type="text" name="nome" id="nome" placeholder="Bruce Wayne" required>
        </div>
      </div>
    <div class="form-group row justify-content-center">
      <div class="col-md-2"></div>
        <label for="InputEmail" class="col-md-1 col-form-label lbl">Email</label>
      <div class="col-md-8">
        <input class="form-control form-contol-sm inputForm" type="text" name="email" id="email" placeholder="Bruce@Wayne" required>
      </div>
    </div>
    <div class="form-row justify-content-center">
      <div class="col-md-2"></div>
      <label for="InputEmail" class="col-md-1 col-form-label">Cursos</label>
      <div class="form-group col-md-4">
        <select class="form-control form-control-xs" name="selectCurso" id="curso" required>
          <optgroup label="---Front-End----">
            <option>Design Responsivo</option>
            <option>Bootstrap</option>
            <option>Foundation</option>
            <option>Sass</option>
            <option>JavaScript</option>
          </optgroup>
          <optgroup label="---Back-End---">
            <option>Ruby on Rails</option>
            <option>PHP</option>
            <option>Big Data</option>
            <option>Lavarel</option>
            <option>Big Data</option>
            <option>Python</option>
          </optgroup>
        </select>
      </div>
      <div class="form-group col-md-4">
          <select class="form-control form-control-xs" name="turnoCurso" id="curso">
              <option value="diurno">Diurno</option>
              <option value="matutino">Matutino</option>
              <option value="noturno">Noturno</option>
          </select>
      </div>
      <div class="form-group col-md-5 justify-content-center">
        <button type="submit" class="btn btn-outline-primary" id="btn" disabled='disabled'>Submit</button>
      </div>
    </div>
  </form>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="js/index.js"></script>
</html>
