<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite: . $databasePath');

$preparedStatement = $pdo->prepare('DELETE FROM students where id = ?;');
$preparedStatement->bindValue(1, 7, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 6, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 2, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 1, PDO::PARAM_INT);
var_dump($preparedStatement->execute());