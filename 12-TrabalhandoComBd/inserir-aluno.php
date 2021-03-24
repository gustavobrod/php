<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::creatorConnection();

$student = new Student(
    null,
    "Ana Julia",
    new DateTimeImmutable('2008-04-12')
);

$sqlInsert = "INSERT INTO students(name, birth_date) VALUES (:name, :birth_date)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído." . PHP_EOL;
};
