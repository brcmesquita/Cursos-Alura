<?php

use Alura\Pdo\Infrastructure\PdoStudentRepository;

$pdo = new PdoStudentRepository();

$resultado = $pdo->allStudents();