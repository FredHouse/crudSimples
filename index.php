<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include 'includes/config.php';
include 'includes/cabecalho.php';

// Esta página deve checar se o usuário está logado
checkLogin();

?>

<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><strong>Home</strong></h3></div>
			<div class="panel-body">
				
			Use o menu acima para navegar.
			<br/><br/>
			Para entender melhor sobre o sistema, acesse: 

			</div>
		</div>
	</div>



	<?php
	include './includes/rodape.php';
	?>