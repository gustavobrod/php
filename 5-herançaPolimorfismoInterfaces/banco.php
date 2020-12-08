<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Monte Mor', 'Centro', 'Rua A', '1b');
$gustavo = new Titular(new CPF('123.456.789.10'), 'Gustavo Brod', $endereco);
$primeiraConta = new Conta($gustavo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$alline = new Titular(new CPF('698.887.242-20'), 'Alline', $endereco);
$segundaConta = new Conta($alline);
var_dump($segundaConta);

$outroEndereco = new Endereco('Cidade', 'Bairro', 'Rua', '2b');
$outra - new Conta(new Titular(new CPF('987.123.456-50'), 'Ana Julia', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;