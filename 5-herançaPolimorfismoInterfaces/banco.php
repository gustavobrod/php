<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco = new Endereco('Monte Mor', 'Centro', 'A', '1B');
$gustavo = new Titular(new CPF('123.456.789-10'), 'Gustavo Brod', $endereço);
$primeiraConta = new Conta($gustavo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$alline = new Titular(new CPF('251.582.981-10'), 'Alline Risso', $endereco);
$segundaConta = new Conta($alline);
var_dump ($segundaConta);

$outroEndereco = new Endereco('Hortolandia', 'Centro', 'A', '2B');
$outra = new Conta(new Titular(new CPF('554.786.514-55'), 'Ana Julia', $outroEndereco));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;