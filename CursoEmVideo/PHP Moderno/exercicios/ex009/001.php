<?php 

// PHP 8
$rA = "2" + "2";
var_dump($rA) . "<br/>";
// php 8 converte string em numero e para somar
// resultado int(4)

// PHP 7 e 5
$rB = "nota 2" + "gustavo 12";
var_dump($rB) . "<br/>";
// php 7 e anteriores tentam converter string em numero para somar
// resultado sera int(0)

$rC = "21 casas" + "12 caixas";
var_dump($rC) . "<br/>";
// php 7 e anteriores tentam converter string em numero para somar
// resultado sera int(33)

// OPERADORES ARITMETICOS
$rD = 5 + 2;

var_dump($rF) . "<br/>";

$rG = 5 / 2;
var_dump($rG) . "<br/>";

$rH = 5 % 2;
var_dump($rH) . "<br/>";

$rI = 5 ** 2;
var_dump($rI) . "<br/>";

