<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

// $student = new Student(null, 'Bruno Raphael', new \DateTimeImmutable('1984-07-12'));

// sem proteção com SQL INJECTION
// $sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";

//// Com proteção SQL INJECION
//$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?,?);";
//$statement = $pdo->prepare($sqlInsert);
//$statement->bindValue(1,$student->name());
//$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));
////$statement->execute();
//// para saber se funcionou
//if ($statement->execute()){
//	echo "Aluno incluído";
//}

//var_dump($pdo->exec($sqlInsert));

// Com proteção SQL INJECION com parâmetro nomeado
$student = new Student(null, 'Cabral de Mesquita', new \DateTimeImmutable('2013-12-07'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name',$student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
//$statement->execute();
// para saber se funcionou
if ($statement->execute()){
	echo "Aluno incluído";
}
