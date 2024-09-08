<meta charset = "utf-8">

<?php

//Esta é a página onde será recuperado as variáveis de sessão

session_start();

date_default_timezone_set('America/Sao_Paulo');
echo "<h1>Agora estamos na página 02 =D</h1>";
echo "<p>Estamos na aula de " . $_SESSION['aula'] . "</p><br>";
echo "<p>Agora são " . date('H:i:s', $_SESSION['hora']) . " horas </p>";

?>