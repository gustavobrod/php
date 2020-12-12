<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Campinas',  'Centro', 'Rua A', '1B');
$outroEndereco = new Endereco('Hortolandia',  'Jd. Amanda', 'Rua Abc', '73');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
