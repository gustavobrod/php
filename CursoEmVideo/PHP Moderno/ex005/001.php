<?php 

// QUATRO FORMATOS DE STRINGS
// double quoted
$nome = "Curso";
$nomeA = 'Curso';

$nom = "Rodrigo";
$snom = "Nogueira";
echo "$nom \"Minotauro\" $snom" . "<br/>"; // \" Sequencia de escape

$nomeA = "Gustavo";
$snomeA = "Brod";
$apelido = "Guga";
echo "$nomeA\t\"$apelido\"\t$snomeA" . "<br/>";

const CANAL = "Curso em Vídeo \u{1f499}";
echo "Eu adoro o " . CANAL . "<br/>";
echo "Estamos no ano de date ('y')"  . "<br/>"; //errado
echo "Estamos no ano de " . date ("Y")  . "<br/>"; //coreto, concatenar funções fora da string

// single quoted
$sobrenome = "PHP\u{1f596}";
echo "$nome $sobrenome" . "<br/>";
echo '$nome $sobrenome' . "<br/>";

// Heredoc
 $canal = "Curso em video";
 $ano = date('Y');
 echo <<< TESTE
    Olá galera do $canal!
        Tudo bem com vocês?
    Como esta sendo o $ano ?
    Abraços! \u{1f596}
    TESTE . "<br>";

// Nowdoc
$canalA = "Curso em video";
 $anoA = date('Y');
 echo <<< 'TESTE'
    Olá galera do $canalA!
        Tudo bem com vocês?
    Como esta sendo o $anoA ?
    Abraços! \u{1f596}
    TESTE;

// Concatenar usa-se . (ponto)

// ESCAPES SEQUENCES
// \n => Nova linha
// \t => Tabulação horizontal
// \\ => Barra invertida
// \$ => Sinal de cifrão
// \u{} => Codepoint Unicode