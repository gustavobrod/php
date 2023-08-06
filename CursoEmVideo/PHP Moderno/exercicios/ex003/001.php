<?php 

$nome = "Gustavo ";
$sobrenome = "Lima Brod";

const PAIS = "Brasil";

echo "Muito prazer, $nome $sobrenome, você mora no " . PAIS . "<br/>";

//REGRAS PARA NOMES IDENTIFICADORES

// Variáveis sempre começam com o simbolo $
// O segundo pode ser LETRA ou o símbolo _ (underline)
const _TX = 850;
echo "O valor da constante é = " . _TX . "<br/>";

// Aceita caracteres [a-z], [A-Z], [0-9] e []
// Aceita caracteres da tabela ASCII a partir de 128
$valorµ = 500;
echo "Seu valor é $valorµ" . "<br/>";

// Aceita caracteres acentuados como á, õ, ç
$salário = 2500.78;
echo "Seu salário é $salário" . "<br/>";
echo "Seu salário é $salario" . "<br/>"; // salário é diferente de salario

// A linguagem é case sensitive em relação a nomes
$nome = "Alline";
$Nome = "Adair";
echo "Seu nome é $nome" . "<br/>";
echo "Seu nome é $Nome" . "<br/>";

// Nomes específicos como $this não podem ser usados



//RECOMENDAÇÕES PARA DAR NOMES

// Tente dar nomes claros e de facil identificação 
// Evite nomes muitos CURTOS ou muito LONGOS
// Defina um PADRÃO e siga em todo o projeto
// Para variáveis, dê preferencia a letras minúsculas
// Para constantes, dê preferencia a letras maiúsculas
// Use camelCase para métodos e atributos
$nomeCompletoCliente = "Camel Case";
$telefone_contato_fornecedor = "Snake Case";

// Use SNAKE_CASE para nomear constantes