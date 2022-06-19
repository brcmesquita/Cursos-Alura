<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
	$aStudent = new Student(
		null,
		'Xeronildes',
		new DateTimeImmutable('1984-12-07')
	);
	$studentRepository->save($aStudent);

	$bStudent = new Student(
		null,
		'Bucetildes',
		new DateTimeImmutable('1986-01-08')
	);
	$studentRepository->save($aStudent);
	$connection->commit();
} catch (\PDOException $e){
	echo $e->getMessage();
	$connection->rollBack();
}