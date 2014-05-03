<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include './includes/config.php';
setMenu("Home");
include './includes/cabecalho.php';
?>

<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Login:</strong></h3></div>
  <div class="panel-body">
   <form role="form" action="loginVerify.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="input" class="form-control" style="border-radius:0px" id="login" name="login" placeholder="Entre com o usuário">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha: <!--<a href="loginLostPassword.php">(esqueci a senha)</a>--></label>
    <input type="password" class="form-control" style="border-radius:0px" id="senha" name="senha" placeholder="Senha">
  </div>
  <button type="submit" class="btn btn-sm btn-default">Entrar</button>
</form>
  </div>
</div>
</div>



<?php
include './includes/rodape.php';
?>