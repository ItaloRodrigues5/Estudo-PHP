<?php

// Testando sessões em PHP

if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) { // cria sessão se usuário tiver clicado no botão enviar do formulário
 session_start();

 // cria variáveis de sessão e as inicializa com os dados do formulário:
 
    $_SESSION['nome'] = $_POST['frm_nome'];

    $_SESSION['sobrenome'] = $_POST['frm_sobrenome'];

    // exibe link para a página 02:

    echo "<a href='session.php'>Ir para página 2</a>";

}

else { // Se usuário ainda não clicou no botão de enviar, mostra o formulário na página:

?>

<form name="form1" action="session.php?valor=enviado" method="POST">

    <label for="nome">Digite seu nome: </label> 
    <input type="text" name="frm_nome"><br>
    
    <label for="sobrenome">Digite seu sobrenome: </label>
    
    <input type="text" name="frm_sobrenome"><br>
    <input type="submit" value="Enviar">
</form>
<?php
 }
?>