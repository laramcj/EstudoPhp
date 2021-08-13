<?php

$altura = 1.80;
$peso = 80;

$imc = $peso / $altura ** 2;

echo "Seu IMC é $imc, Seu IMC é classificado como ";
if ($imc < 18.5) {
    echo "abaixo do peso! ";
} else if ( $imc >= 18.5 && $imc < 25) {
    echo "peso ideal! Parabéns! ";
} else if ($imc >=  25 && $imc < 30) {
    echo "acima do peso! ";
} else if ($imc >= 30 && $imc < 35) {
    echo "Obesidade grau 1. ";
} else if ($imc >= 35 && $imc < 40) {
    echo "Obesidade grau 2. ";
} else
    echo "Obesidade grau 3. ";