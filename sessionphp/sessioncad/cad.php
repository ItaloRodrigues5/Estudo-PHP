<?php

session_start();

//if(isset($_SESSION['usuario'], $_SESSION['senha'])){
    //if($_SESSION['usuario'] == 'xuxa' && $_SESSION['senha'] = 'xuxa123'){
    // header('Location: xuxa.php');}}

$usuario = $_POST['usuario'] = "";
$senha = $_POST['senha'] = "";


if(isset($_POST['usuario'], $_POST['senha'])){
    /*Essa linha logo abaixo pertence ao acesso do banco de dados*/
    if($_POST['usuario'] == 'xuxa' && $_POST['senha'] == 'xuxa123'){
        $_SESSION['usuario'] == $_POST['usuario'];
        $_SESSION['senha'] == $_POST['senha'];
        header("Location: home.php");
    }
    else{
        header("Location: cad.php");
    }
}

var_dump($_SESSION['usuario']);
var_dump($_SESSION['senha']);

?>

<html>
<body>
<meta charset = "utf-8">
<form action="home.php" method = "POST">
        <label for="nome">Nome de usuário: </label>
        <input type="text" name = "usuario" placeholder = "Nome de usuário">
        <label for="">Senha: </label>
        <input type="text" name = "senha" placeholder = "Senha de usuário">
        <input type="submit" name = "login" value = "login">
</form>
</body>
</html>