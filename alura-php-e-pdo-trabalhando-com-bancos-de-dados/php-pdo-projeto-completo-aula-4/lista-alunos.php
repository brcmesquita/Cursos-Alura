<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';


// código usado em aulas anteriores
// $pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();
//$statement = $pdo->query('SELECT * FROM students;');
//$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
//$studentList = [];
//
//foreach ($studentDataList as $studentData) {
//    $studentList[] = new Student(
//        $studentData['id'],
//        $studentData['name'],
//        new \DateTimeImmutable($studentData['birth_date'])
//    );
//}

// novo código utilizado recentemente
$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

// esse var_dump parece que funciona em todos os exemplos testados aqui
var_dump($studentList);
