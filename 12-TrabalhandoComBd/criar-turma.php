<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
$aStudent = new Student(
    null,
    'Nico Stppat',
    new DateTimeImmutable('1963-07-31')
);

$studentRepository->save($aStudent);

$anotherStudent = new Student(
    null,
    'Alline Silva',
    new DateTimeImmutable('1983-05-20')
);

$studentRepository->save($anotherStudent);

$connection->commit();
