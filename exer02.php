<!DOCTYPE hmtl>
<html lang = "pt-br">

<head>
    <meta charset = "UTF-8">
</head>

<body>

<?php

/*Criar um arquivo exer02.php que implemente
as seguintes funcionalidades:

a. Atribuir duas variáveis reais quaisquer,
calcular e imprimir a média dos mesmos.

Atribuir o valor a uma variável média
e depois exibir seu resultado.

b. Com base nas duas variáveis imprimir
a soma, subtração, multiplicação e divisão.*/

$n1 = 8.5;
$n2 = 9.5;

$media = ($n1 + $n2) / 2;

echo "A média da soma dos valores é: ". $media . "<br> <br>";

$soma = 8.5 + 9.5;
$sub = 8.5 - 9.5;
$multi = 8.5 * 9.5;
$div = 8.5 / 9.5;

echo "Soma: " . $soma . " <br> Subtração: " . $sub . "<br> Multiplicação: " . $multi . "<br> Divisão: " . $div;

?>

</body>

</html>