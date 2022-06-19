<?php declare(strict_types=1);

namespace Alura;

require 'autoload.php';

// aula 05





// um array associativo criado de outra forma
$array_associativo = [
	"Bruno" => 1000,
	"Raphael" => 2000,
	"Cabral" => 3000,
	"Mesquita" => 4000
];

// imprimindo o array associativo
echo "<pre>";
var_dump($array_associativo);
echo "</pre>";

// Aula 04

$correntistas = [
	"Giovanni",
	"João",
	"Maria",
	"Luis",
	"Luisa",
	"Rafael"
];

$saldos = [
	2500,
	3000,
	4400,
	1000,
	8700,
	9000
];

// o array impresso aqui será mesclado, o primeiro e o último
$relacionados = array_merge($correntistas, $saldos);
echo "<pre>";
var_dump($relacionados);
echo "</pre>";

// o array impresso aqui será combinado, ele se torna o que chamamos de array associativo
// onde o primeiro array será a chave (index) e o seguinte serão os valores.
$relacionados = array_combine($correntistas, $saldos);
echo "<pre>";
var_dump($relacionados);
echo "</pre>";

// imprimir o conteúdo de um item do array
echo "<p>Saldo Giovanni: R$ {$relacionados["Giovanni"]}</p>";

// adicionar um item no array
$relacionados["Matheus"] = 4500;
echo "<pre>";
var_dump($relacionados);
echo "</pre>";

// verificando se uma chave de um array existe ou não
$chaveArray = "Maria";

$mensagemSaldo = "O saldo do $chaveArray é: R$ {$relacionados[$chaveArray]}";
$mensagemErro = "Não foi encontrado.";

if (array_key_exists($chaveArray, $relacionados)) {
	echo $mensagemSaldo;
} else {
	echo $mensagemErro;
}

// outro exercício
$maioresSaldos = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);
echo "<pre>";
var_dump($maioresSaldos);
echo "</pre>";

//$correntistas = [
//	"Giovanni",
//	"João",
//	"Maria",
//	"Luis",
//	"Luisa",
//	"Rafael"
//];
//
//$correntistasNaoPagantes = [
//	"Luis",
//	"Luisa",
//	"Rafael",
//];
//
//$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

//echo "<pre>";
//var_dump($correntistasPagantes);
//echo "</pre>";


//// aula 03
////require 'ArrayUtils.php'; // não é necessário, já está no autoload.php
//
//$correntistas_e_compras = [
//  "Giovanni",
//  "João",
//   12,
//  "Maria",
//   25,
//  "Luis",
//  "Luísa",
//  "12"
//  ];
//
//  echo "<pre>";
//
//  var_dump($correntistas_e_compras);
//
//  ArrayUtils::remover("12", $correntistas_e_compras);
//
//  var_dump($correntistas_e_compras);
//
//  echo "</pre>";

// aula 02
// require 'Calculadora.php';

// $nomes = "Giovani, João, Maria, Pedro";

// // é tipo o split do js
// $array_nomes = explode(", ", $nomes);

// foreach($array_nomes as $nome){
//   echo "<p>Olá, $nome!</p>";
// }

// // aqui é o contrário do split
// $nomesJuntos = implode(", ", $array_nomes);

// //var_dump($array_nomes);



// echo "<br>";

// $notas = [9, 3, 10, 5, 10];

// //$notaPortugues = 9;
// //$notaMatematica = 3;
// //$notaGeografia = 10;
// //$notaHistoria = 5;

// // echo "<p>a nota de português é $notas[0].</p>";
// // echo "<p>a nota de matemática é $notas[1].</p>";
// // echo "<p>a nota de geografia é $notas[2].</p>";
// // echo "<p>a nota de história é $notas[3].</p>";
// // echo "<p>a nota de química é $notas[4].</p>";

// $calculadora = new Calculadora();
// $media = $calculadora->calculaMedia($notas);

// if ($media) {
//   echo "A média é: $media";
// } else {
//   echo "<p>Não foi possível calcular a média.</p>";
// }