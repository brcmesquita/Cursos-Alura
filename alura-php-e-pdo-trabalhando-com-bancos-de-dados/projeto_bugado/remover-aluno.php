<?php

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$sqlDelete = "DELETE FROM students WHERE id = ?;";
$preparedStatement = $pdo->prepare($sqlDelete);
$preparedStatement->bindValue(1, 2, PDO::PARAM_INT);
//$preparedStatement->execute();
var_dump($preparedStatement->execute()); // VAR_DUMP para retornar um true ou false