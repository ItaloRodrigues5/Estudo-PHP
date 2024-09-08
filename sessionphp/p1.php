<meta charset = "utf-8">

<?php

//pagina 01

session_start();

echo '<h1>Esta página 01 é onde a sessão será criada</h1>';

$_SESSION['aula'] = 'PHP';
$_SESSION['hora'] = time();

//Link para a página 02

echo "<a href='p2.php'>Página2</a>"


?>