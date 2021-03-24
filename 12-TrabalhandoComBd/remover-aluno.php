<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::creatorConnection();

$prepareStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$prepareStatement->bindValue(1, 1, PDO::PARAM_INT);

var_dump($prepareStatement->execute());
