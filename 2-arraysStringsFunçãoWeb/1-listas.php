<?php

$idadeList = [15, 44, 36, 39, 25];

list($idadeGustavo, $idadeAlline, $idadeAnaJulia) = $idadeList;

$umaIdade = $idadeList;

//adicionando item ao final da lista
$idadeList [] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}