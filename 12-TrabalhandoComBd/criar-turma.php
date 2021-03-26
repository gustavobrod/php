<?php

use RuntimeException;
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
        'Adriana Souza',
        new DateTimeImmutable('1999-01-31')
    );

    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'João Antonio',
        new DateTimeImmutable('2000-12-21')
    );

    $studentRepository->save($anotherStudent);
    $connection->commit();
} catch (RuntimeException $e) {
        echo $e->getMessage();
        $connection->rollBack();
}
