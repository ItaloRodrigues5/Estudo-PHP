<?php

$vetorA = array(2, 4, 6, 8, 10, 6);
$vetorB = array(2, 2, 3, 4, 5, 6);
$vetorC = array(-1, -1, -1, -1, -1, -1);

for ($i = 0; $i < 6; $i++){
    if ($vetorA[$i] == $vetorB[$i]){
        $vetorC[$i] = $vetorA[$i];
    }
    else{
        $vetorC[$i] = "|*|, ";
    }
}

foreach($vetorC as $c){
    echo $c;
}


/* Fazer um programa que leia dois vetores de inteiros (A e B) de 6 posições
e crie um terceiro vetor (C) com a interseção dos dois primeiros, isto é, coloque
em C apenas os elementos que existem em A e que também existem em B na
mesma posição do vetor. Caso não exista a interseção de A e B em uma
determinada posição, adicionar o valor -1 a essa posição no vetor C. Depois
exibir o resultado do vetor C. Utilize a estrutura for. */

?>