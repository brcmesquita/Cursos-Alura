<?php
$idadeList = [21, 23, 19, 25, 30, 41,18];

echo count($idadeList) . PHP_EOL; // funciona como o string.length do javascript

for ($i = 0; $i < count($idadeList); $i++){
	echo $idadeList[$i] . PHP_EOL;
}