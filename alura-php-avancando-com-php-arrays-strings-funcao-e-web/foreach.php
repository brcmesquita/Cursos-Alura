<?php
$conta1 = [
	'titular' => 'Bruno',
	'saldo' => 25000
];

$conta2 = [
	'titular' => 'Raphael',
	'saldo' => 35000
];

$conta3 = [
	'titular' => 'Cabral',
	'saldo' => 45000
];

// Forma 1 de array
$contasCorrentes = [$conta1, $conta2, $conta3];

// forma 1 com FOR
for ($i = 0; $i < count($contasCorrentes); $i++){
	echo $contasCorrentes[$i]['titular'] . " ";
	echo $contasCorrentes[$i]['saldo'] . PHP_EOL;
}

// forma 2 com FOREACH
foreach ($contasCorrentes as $conta) {
	echo "Titular: " . $conta['titular'] . PHP_EOL;
	echo "Saldo: " . $conta['saldo'] . PHP_EOL;
	echo PHP_EOL;
}

// Outra forma
$contasCorrentesCPF = [
	12345678910 => $conta1,
	12345678911 => $conta2,
	12345678912 => $conta3
];

// acessando pelo índice (CPF)
foreach ($contasCorrentesCPF as $cpf => $conta) {
	echo $cpf . PHP_EOL;
}

// Outra forma de array associativo
$contasCorrentes3 = [
	1234567891099 => [
		'titular' => 'Bruno',
		'saldo' => 25000
	],
	1234567891199 => [
		'titular' => 'Raphael',
		'saldo' => 35000
	],
	1234567891299 => [
		'titular' => 'Cabral',
		'saldo' => 45000
	]
];

// FOREACH pelo índice associativo
foreach ($contasCorrentes3 as $cpf => $conta) {
	echo $cpf . PHP_EOL;
}

// Como ADICIONAR itens ao array associativo
$contasCorrentes3[1234567891234] = [
	'titular' => 'Mesquita',
	'saldo' => '55000'
];

// FOREACH pelo índice associativo
foreach ($contasCorrentes3 as $cpf => $conta) {
	echo $cpf . PHP_EOL;
}