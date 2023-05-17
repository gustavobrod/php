<?php

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$c = -55.65;

echo $c;
echo "<br>";

if(is_float($c)) {
    echo "Sim, podemos ter floats negativos!";
}