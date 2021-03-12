<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite: . $databasePath');

$statement = $pdo->query('SELECT * FROM students;');

$studentDataList = $statement->fetchall(PDO::FETCH_ASSOC);
$studentList = [];

var_dump($studentDataList); exit();

foreach ($studentDataList as $studentData) {
    $studentList = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump(($studentList));