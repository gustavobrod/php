<?php  

$i = 1;
$n = 100;
$impar = 1;

while($i <= $n){
    echo "#$impar" . PHP_EOL;
    $i = $i + 1;
    $impar = $impar + 2;
}

for($contador = 1; $contador < 100; $contador++){
    if($contador % 2 != 0){
        echo $contador . PHP_EOL;
    }
}