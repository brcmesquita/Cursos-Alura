<?php

// FUNCIONALIDADE ou SUBROTINA
function exibeMensagem($mensagem){
	echo $mensagem . "<br>";
}

function exibeConta(array $conta){
	echo "<li>Titular: {$conta['titular']} - Saldo: {$conta['saldo']}.";
}