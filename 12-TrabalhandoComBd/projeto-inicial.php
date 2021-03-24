<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Gustavo Brod',
    new \DateTimeImmutable('1981-05-25')
);

echo $student->age() . PHP_EOL;
