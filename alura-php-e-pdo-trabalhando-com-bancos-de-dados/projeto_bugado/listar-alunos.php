<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM students;');

// resultado padrão
var_dump($statement->fetchAll());
echo PHP_EOL;

// buscar só o ID
//$studentList = $statement->fetchAll();
//echo $studentList[0]['id'] . PHP_EOL;
//echo PHP_EOL;

// buscar só o nome
//echo $studentList[0]['nome'] . PHP_EOL;

//$studentList = $statement->fetchAll(PDO::FETCH_CLASS, Student::class);
//var_dump($studentList);

//$studentList = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//foreach ($studentList as $studentData){
//	$studentList[] = new Student(
//		$studentData['id'],
//		$studentData['name'],
//		new \DateTimeImmutable($studentData['birth_date'])
//	);
//}
//var_dump($studentList);

//while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
//	$student = new Student(
//		$studentData['id'],
//		$studentData['name'],
//		new DateTimeImmutable($studentData['birth_date'])
//	);
//
//	echo $student->age() . PHP_EOL;
//}
//exit();

//var_dump($statement->fetchColumn(2)); exit();

//var_dump($statement->fetchObject(Student::class)); exit();