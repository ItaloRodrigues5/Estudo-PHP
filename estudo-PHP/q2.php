<?php

echo "<h1> This is escada invertida </h1>";

//Estrutura da Escada invertida

$linha = 5;

for($i = $linha; $i >= 1; $i--){
    for($j = $i; $j >= 1; $j--){
        echo $j . " ";
    }
    echo "<br>";
}

echo "<hr>";

echo "<h1> This is escada </h1>";

//Estrutura da Escada normal

for($i = 1; $i <= 5; $i++){
    for($x = 1; $x <= $i; $x++){
        echo $x . " ";
    }
    echo "<br>";
}

/* 
Faça um programa para mostrar uma pirâmide semelhante a abaixo,
sendo que o maior valor da pirâmide é definido pelo usuário. Ex: n=9.

9 8 7 6 5 4 3 2 1
8 7 6 5 4 3 2 1
7 6 5 4 3 2 1
6 5 4 3 2 1
5 4 3 2 1
4 3 2 1
3 2 1
2 1
1
*/

?>