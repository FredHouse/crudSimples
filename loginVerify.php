<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include './includes/config.php';
setMenu("Home");
include './includes/cabecalho.php';

$login = $_POST["login"];
$senha = $_POST["senha"];

$msg = "Usuário/senha incorretos";
$url = "loginForm.php";

//Login de mentira....
if ($login=="1" and $senha=="1")
{
	$_SESSION["login_id"] = 1;
	$msg = "Seja bem vindo, clique aqui para continuar";
	$url = "index.php";
}

?>

<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><strong>Login</strong></h3></div>
			<div class="panel-body">

				<?php echo "<a href='$url'>$msg</a>" ?>


			</div>
		</div>
	</div>

	<?php
	include './includes/rodape.php';
	?>