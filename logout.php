<?php
//Estes dois includes são obrigatórios para qualquer página PHP
include './includes/config.php';

$_SESSION["login_id"] = null;
redirect("loginForm.php");