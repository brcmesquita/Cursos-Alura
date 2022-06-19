<?php

/**
 *
 */

// strings de exemplo
echo 'Olá mundo!' . PHP_EOL;

echo "Olá mundo!"  . PHP_EOL;

// concatenação de strings
$nome = "Raphael Cabral";
$idade = 36;
echo 'Olá mundo! Minha idade é ' . $idade . ' anos.' . PHP_EOL;

// Interpolação de Strings
echo "Olá mundo! Minha idade é {$idade} anos." . PHP_EOL;

$frase = sprintf("Olá mundo! minha idade e %d anos. Me chamo %s"
	, $idade
	, $nome
);
echo $frase  . PHP_EOL;
