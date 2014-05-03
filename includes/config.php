<?php
//
// Configure.php é um arquivo que possui todas as configurações
// necessárias para que o sistema funcione. Toda página php precisa
// deste arquivo, que deve ser adicionada antes do cabeçalho
//

//
//Configuracao do banco de dados
//
define("DB_HOST","localhost");
define("DB_NAME","crud");
define("DB_USER","root");
define("DB_PASSWORD","");

//
// Configura o menu do topo da aplicacao
//
$menu=array(
		array("Home","index.php"),
		array("Usuários","ususariosListar.php"),
		array("Produtos","produtosListar.php"),
		array("Logout","logout.php")
	);
//Active Menu é um nome para o menu ativo. Pode
// ser alterado de acordo com a página
$activeMenu="";

//
// Inicia a sessao do php, para armazenar valores com o Login
//
session_start();

// 
// Configura as mensagens de erro do sistema, excluindo NOTICE
// 
error_reporting(E_ALL ^ E_NOTICE);

//
// Includes diversos, sempre devem estar presentes nos arquivos php
//
include 'banco.php';
include 'funcoes.php';