<?php

// AULA 1

require_once 'autoload.php';

use Alura\Calculadora;

$notas = [9, 2, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if($media){
    echo "A media é: $media";
} else{
    echo "Não foi possível calcular a media!";
}