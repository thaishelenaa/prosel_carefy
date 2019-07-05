<?php
session_start();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/prosel_carefy.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Login</h5>
              <form class="form-signin" action="login.php" method="POST">
                <div class="form-label-group">
                  <input type="email" name="email" class="form-control" placeholder="contato@carefy.com.br" required autofocus>
                  <label for="email">E-mail</label>
                </div>

                <div class="form-label-group">
                  <input type="password" name="password" class="form-control" required>
                  <label for="password">Senha</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
              </form>
              <?php
                  if(isset($_SESSION['nao_autenticado'])):
                  ?>
                  <div class="text-danger">
                    <p>ERRO: E-mail ou senha inválidos. </p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['nao_autenticado']);
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
