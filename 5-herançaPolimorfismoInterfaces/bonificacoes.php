<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Funcionario, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'João',
    new CPF('545.841.870-99'),
    '1000');

$umFuncionario->sobreDeNivel();

$umaFuncionaria = new Gerente(
    'Jaqueline',
    new CPF('841.112.780-25'),
    '3000');

$umDiretor = new Diretor(
'Eduardo',
new CPF('111.558.461-30'),
'5000');

$umEditor = new EditorVideo(
    'Ricardo',
    new CPF('151.578.991-35'),
    '1500');

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;