<?php 
/**
* Verifica o login. Se nao houver o login na sessao, 
* redireciona para a pagina de login.
*/
function checkLogin()
{
	if ($_SESSION["login_id"] == null)
		redirect("loginForm.php");
}

/**
* Redireciona para uma página qualquer.
*/
function redirect($page)
{
	header( "Location: $page") ;
}

/**
* Diz qual é o item de menu q deve aparecer como ativo
*/
function setMenu($menu)
{
	define("MENU",$menu);
}
