<?php 

// ABSOLUTO
$resA = abs(500);
echo "A resposta é $resA" . "<br/>";

// CONVERSÃO DE BASE
$resB = base_convert(254, 10, 8);
echo "A resposta é $resB na base 8" . "<br/>";

$resC = base_convert(254, 10, 16);
echo "A resposta é $resC na base 16" . "<br/>";

$resD = base_convert(254, 10, 16);
echo "A resposta é $resD na base 16" . "<br/>";

// OUTRAS FUNÇÕES
// ceil(), floor(), round()
// hypot()
// min(), max()

// intdiv()
$resE = 5 / 2; //divisão
echo "A resposta é $resE" . "<br/>";

$resF = 5 % 2; //resto da divisão
echo "A resposta é $resF" . "<br/>";

$resG = intdiv(5, 2); //divisão inteiro
echo "A resposta é $resG" . "<br/>";

// pi()
$resH = pi(); //função PI
echo "A resposta é $resH" . "<br/>";

$resI = M_PI; //constante PI
echo "A resposta é $resI" . "<br/>";

//pow()
$resJ = 5 ** 2;
echo "A resposta é $resJ" . "<br/>";

$resL = pow(8, 2); //usando função pow() perde a ordem de precedência
echo "A resposta é $resL" . "<br/>";

 //sin(), cos(), tan()
 
 //sqrt() 
$resM = sqrt(81);
echo "A resposta é $resM" . "<br/>";

$resN = 81 ** (1/2);
echo "A resposta é $resN" . "<br/>";
  
$resO = 27 ** (1/3); //raiz cubica
echo "A resposta é $resO" . "<br/>";