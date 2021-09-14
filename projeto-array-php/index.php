<?php

require 'Calculadora.php';

$notas = [9, 3, 10, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "a média é: $media";
} else {
    echo "Não foi possível calcular a média";
}
