<?php
//O doLogin apenas verifica o login, então não é preciso adicionar HTML

include 'includes/config.php';

$login = $_POST["login"];
$senha = $_POST["senha"];

$erro = "";

if ($login=="" || $senha=="")
    $erro = "Login ou senha não pode ser nulo";
else
    {
        $sql = "SELECT * FROM usuarios WHERE (login=:login and senha=:senha)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam("login", $login);
        $stmt->bindParam("senha", $senha);
        $stmt->execute();
        
        $usuario = $stmt->fetch();
        echo "aqui";
        if ($usuario!=null)
        {
             $_SESSION["login_id"] = $usuario->id; //o id do usuario no banco
             //vai pra outra página
             header( 'Location: home.php' ) ;
        }
        else { 
            $erro = "Usuário inválido";
        }
        
    }
    
// se chegou algum algum erro aconteceu
header( 'Location: index.php?erro='.$erro ) ;

?>