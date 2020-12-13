<?php

// AULA 2-2

$nomes = "Giovanna, João, Maria, Pedro";

$arrayNomes = explode(", ", $nomes);

foreach($arrayNomes as $nome){
    echo "<p>Ola $nome</p>";
}

$nomesJuntos = implode(", ", $arrayNomes);
echo $nomesJuntos;