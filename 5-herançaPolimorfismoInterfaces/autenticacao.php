<?php

require_once 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João Silva',
    new CPF('696.858.222-99'),
    '10000',
);

$autenticador->tentaLogin($umDiretor, '4321');