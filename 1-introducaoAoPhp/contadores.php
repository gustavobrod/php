<?php 

$contador = 1;

while($contador <= 15){
    $contador = $contador + 1;
    echo "#$contador" . PHP_EOL;
}

for($contador1 = 1; $contador1 <= 15; $contador1 ++){
    if ($contador1 == 13){
        continue;
    }
    echo "#$contador1" . PHP_EOL;
}

for($contador2 = 1; $contador2 <= 15; $contador2 ++){
    if ($contador2 == 13){
        break;
    }
    echo "#$contador2" . PHP_EOL;
}