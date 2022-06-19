<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\PdoStudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::CreateConnection();

$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = new Student(
	null,
'Bucetildes',
new DateTimeImmutable('1986-01-08')
);
$studentRepository->save($aStudent);

$anotherStudent = new Student(
	null,
	'Xorongolina',
	new DateTimeImmutable('1984-12-7')
);
$studentRepository->save($anotherStudent);

$connection->commit();