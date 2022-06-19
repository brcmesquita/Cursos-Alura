<?php

require_once 'funcoes.php';

$contasCorrentes = [
	'123.456.789-10' => [
		'titular' => 'Maria',
		'saldo' => '1000'
	],
	'123.456.789-11' => [
		'titular' => 'Alberto',
		'saldo' => '300'
	],
	'123.456.789-12' => [
		'titular' => 'Vinícius',
		'saldo' => '100'
	]
];

// DIMINUINDO o saldo
$contasCorrentes['123.456.789-11']['saldo'] = $contasCorrentes['123.456.789-11']['saldo'] - 500;
// SIMPLIFICANDO ficaria assim
$contasCorrentes['123.456.789-11']['saldo'] -= 500;

//// Removendo uma variável da memória
//unset($contasCorrentes['123.456.789-11']);
//// ou mais de uma
//unset(
//	$contasCorrentes['123.456.789-10'],
//	$contasCorrentes['123.456.789-11']
//);

echo "Saldo dos clientes: <br>" ;
// Modo padrão
foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("Modo 01: " . $cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}

// Outro modo de imprimir as mensagens
foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("Modo 02: $cpf $conta[titular] $conta[saldo]");
}

// Mais um modo de imprimir as mensagens
foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("Modo 03: {$cpf} {$conta['titular']} {$conta['saldo']}");
}

echo "Saldo dos clientes: <br>" ;
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
	exibeConta($conta);
}
echo "</ul>";

?>

<!doctype html>
<html lang="br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contas Correntes</title>
</head>
<body>
	<h1>Contas Correntes</h1>

	<dl>
		<?php foreach($contasCorrentes as $cpf => $conta) { ?>
			<dt><h3><?= "{$conta['titular']} - {$cpf}";?></h3></dt>
			<dd><?php echo "Saldo: {$conta['saldo']};"?></dd>
		<?php } ?>
	</dl>
</body>
</html>
