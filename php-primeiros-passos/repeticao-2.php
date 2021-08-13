<?php

for ($contador = 1; $contador <= 20; $contador++) {
    if ($contador == 13){
        continue;
    }
    if ($contador == 15) {
        break;
    }
    echo "#$contador" . PHP_EOL;
}