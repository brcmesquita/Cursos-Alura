<?php

$idadeList = [21, 23, 19, 25, 30, 41,18];

// Pegar 3 valores dentro de um array
$idadeVinicius = $idadeList[0];
$idadeJoao = $idadeList[1];
$idadeMaria = $idadeList[2];

// Outra forma de pegar os 3 valores
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
// Usando a forma acima, as variáveis serão equivalentes aos índices dos arrays.
// Vinícius = 0, João = 1, Maria = 2

// Outra forma de pegar apenas 2 valores
list($idadeVinicius, , $idadeMaria) = $idadeList;
// Usando a forma acima, as variáveis serão equivalentes aos índices dos arrays.
// Vinícius = 0, o espaço entre virgulas recebe o index 1, Maria = 2

$umaIdade = $idadeList[4];
echo $umaIdade;

// ADICIONANDO um item no final do ARRAY (sétimo item)
$idadeList[7] = 20;

// ADICIONANDO um item no final do ARRAY (primeira forma)
$idadeList[] = 84;

// ADICIONANDO um item no final do ARRAY (segunda forma)
$idadeList[count($idadeList)] = 1207;

foreach ($idadeList as $idade) {
	echo $idade . PHP_EOL;
}


