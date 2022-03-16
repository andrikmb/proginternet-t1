<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>P&aacute;gina principal</title>
  </head>
  <body>
  <div class="container">
  <nav class="nav">
  <a class="nav-link disabled" href="index.php">Home</a>
<a class="nav-link" href="vendas.php">Vendas</a>
<a class="nav-link" href="clientes.php">Clientes</a>
<a class="nav-link" href="estoque.php">Estoque</a>
<a class="nav-link" href="configura.php">Configurações</a>
</nav>
</div>
  <div class="container">
  <!-- Content here -->
  <form id="form_login" action="login.php"> 
        <div class="position-absolute top-50 start-50 translate-middle">
        <h1>Entre ou registre-se:</h1>
  <div class="">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Seus dados não serão divulgados.</div>
  </div>
  <div class="">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha">
  </div>
  <div class=" form-check">
    <input type="checkbox" class="form-check-input" id="Check1">
    <label class="form-check-label" for="exampleCheck1">Lembrar do login</label>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</div>
</form>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>