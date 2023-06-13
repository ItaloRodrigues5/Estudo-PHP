<!DOCTYPE html>
<html lang = "pt-br">

<head>
    <meta charset = "UTF-8">
    <title>Análise do vetor</title>
</head>

<body>


    <fieldset>
        <legend> Xuxa analisa vetor </legend>
        <form action = "xuxa.php" method = "POST">

            <label for = "nome"> Nome: </label>
            <input type = "text" name = "nome" id = "" placeholder="Nome de usuário">
            
            <label for = "endereco"> Endereço: </label>
            <input type = "text" name = "endereco" id = "" placeholder="Endereço de usuário">
            
            <label for = "telefone"> Telefone: </label>
            <input type = "text" name = "telefone" id = "" placeholder="Telefone de usuário">

            <label for = "email"> E-mail: </label>
            <input type = "text" name = "email" id = "" placeholder="E-mail de usuário">

            <?php

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $teleofne = $_POST['telefone'];
                $email = $_POST['email'];



            ?>


        </form>
    </fieldset>

</body>
</html>