<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include './includes/config.php';
setMenu("Fornecedores");
include './includes/cabecalho.php';

// Esta página deve checar se o usuário está logado
checkLogin();

?>

<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><strong>Fornecedores</strong></h3></div>
			<div class="panel-body">
				


			</div>
		</div>
	</div>


<?php
include './includes/rodape.php';
?>