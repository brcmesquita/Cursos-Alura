<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro qualquer', 'minha rua','79');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua aí', '50');

//echo $umEndereco . PHP_EOL;
//echo $outroEndereco . PHP_EOL;

echo $umEndereco->recuperaCidade();
