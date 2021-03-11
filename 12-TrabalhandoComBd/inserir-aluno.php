<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite: . $databasePath');

$student = new Student(null, 'Gustavo Brod', new \DateTimeImmutable('1981-05-25'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

var_dump ($pdo->exec($sqlInsert)) . PHP_EOL;

 